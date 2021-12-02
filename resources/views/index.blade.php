<!DOCTYPE html>
<html lang="en" class="h-100">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Adam Crampton">
        <title>Think Outside The Box</title>
        <link href="/css/app.css" rel="stylesheet">
    </head>
    <body class="d-flex flex-column h-100">
        <header class="masthead text-center py-2 m-0 bg-primary text-white">
            {{-- Header --}}
            <div class="row">
                <div class="col">
                    <h3 class="masthead-brand p-0 m-0">Think Outside The Box</h3>
                </div>
            </div>
        </header>
         {{-- Main --}}
         <main role="main" class="flex-grow-1 align-items-center">
            <div id="app-container" class="h-100">
                <div class="container" style="height: 75%;">
                    <div class="row h-100">
                        <div class="col-3">
                            <left></left>
                        </div>
                        <div class="col-6">
                            <middle></middle>
                        </div>
                        <div class="col-3">
                            <right></right>
                        </div>
                    </div>
                </div>
                <div class="container" style="height:25%;">
                    <div class="row">
                        <div class="col">
                            <answer></answer>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <script src="/js/app.js"></script>
    </body>
</html>
