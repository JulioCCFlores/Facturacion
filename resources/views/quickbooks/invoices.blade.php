<!DOCTYPE html>
<html>
<head>
    <title>QuickBooks Invoices</title>
</head>
<body>
    <h1>QuickBooks Invoices</h1>
    @if ($invoices)
        <ul>
            @foreach ($invoices as $invoice)
                <li>Invoice ID: {{ $invoice->Id }} - Amount: {{ $invoice->FullyQualifiedName }}</li>
            @endforeach
        </ul>
    @else
        <p>No invoices found.</p>
    @endif
</body>
</html>
