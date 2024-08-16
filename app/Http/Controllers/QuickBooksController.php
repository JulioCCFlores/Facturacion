<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use QuickBooksOnline\API\DataService\DataService;
use QuickBooksOnline\API\Core\ServiceContext;
use QuickBooksOnline\API\Facades\OAuth2LoginHelper;


class QuickBooksController extends Controller
{
    private $dataService;

    public function __construct()
    {
        $this->dataService = DataService::Configure(array(
            'auth_mode'       => 'oauth2',
            'ClientID'        => env('QUICKBOOKS_CLIENT_ID'),
            'ClientSecret'    => env('QUICKBOOKS_CLIENT_SECRET'),
            'RedirectURI'     => env('QUICKBOOKS_REDIRECT_URI'),
            'scope'           => 'com.intuit.quickbooks.accounting',
            'baseUrl'         => "Development"
        ));
    }

    public function connect()
    {
        $OAuth2LoginHelper = $this->dataService->getOAuth2LoginHelper();
        $authUrl = $OAuth2LoginHelper->getAuthorizationCodeURL();
        return redirect()->away($authUrl);
    }

    public function callback(Request $request)
    {
        $code = $request->input('code');
        $realmId = $request->input('realmId');
        $OAuth2LoginHelper = $this->dataService->getOAuth2LoginHelper();
        $accessTokenObj = $OAuth2LoginHelper->exchangeAuthorizationCodeForToken($code, $realmId);

        // Almacenar tokens en la base de datos
        $accessTokenValue = $accessTokenObj->getAccessToken();
        $refreshTokenValue = $accessTokenObj->getRefreshToken();

        // Aquí guardamos los tokens en la base de datos para el usuario autenticado
        Auth::user()->update([
            'quickbooks_access_token' => $accessTokenValue,
            'quickbooks_refresh_token' => $refreshTokenValue,
        ]);

        return redirect('home')->with('success', 'Conectado a QuickBooks exitosamente.');
    }

    private function getDataService()
    {
        $accessToken = Auth::user()->quickbooks_access_token;
        $refreshToken = Auth::user()->quickbooks_refresh_token;

        $dataService = DataService::Configure(array(
            'auth_mode' => 'oauth2',
            'ClientID' => env('QUICKBOOKS_CLIENT_ID'),
            'ClientSecret' => env('QUICKBOOKS_CLIENT_SECRET'),
            'accessTokenKey' => $accessToken,
            'refreshTokenKey' => $refreshToken,
            'QBORealmID' => env('QUICKBOOKS_REALM_ID'),
            'baseUrl' => "Development"
        ));

        return $dataService;
    }

    public function showInvoices()
    {
        $dataService = $this->getDataService();
        $dataService->setLogLocation("/path/to/log");
        $invoices = $dataService->Query("SELECT * FROM Customer");

        if (!$invoices) {
            $error = $dataService->getLastError();
            return response()->json([
                'error' => $error->getResponseBody(),
                'status_code' => $error->getHttpStatusCode()
            ]);
        }
       
        // dd($invoices);
         return view('quickbooks.invoices', compact('invoices'));
    }
}
