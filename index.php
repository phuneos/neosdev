<!DOCTYPE html>
<html>
<head>
    <title>Lambda Kintone Project</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <style type="text/css">
        /*
        * Type css here
        **/
    </style>
</head>
<body>
<h2><strong>Test send data to Kintone</strong></h2>
<!-- Site wrapper -->
<div class="wrapper">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="min-height: 2644px;">
        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-body row">
                    <div class="col-7">
                        <div class="form-group">
                            <label for="inputName">Name</label>
                            <input name="fullname" type="text" id="inputName" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputEmail">E-Mail</label>
                            <input name="email" type="email" id="inputEmail" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputSubject">Subject</label>
                            <input name="subject" type="text" id="inputSubject" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputMessage">Message</label>
                            <textarea name="message" id="inputMessage" class="form-control" rows="4"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="button" id="send" class="btn btn-primary" value="Send">
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark" style="display: none;">
        <!-- Control sidebar content goes here -->
        <div class="p-3 control-sidebar-content" style=""><h5>Customize AdminLTE</h5><hr class="mb-2"><div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>Dark Mode</span></div><h6>Header Options</h6><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Fixed</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Dropdown Legacy Offset</span></div><div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>No border</span></div><h6>Sidebar Options</h6><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Collapsed</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Fixed</span></div><div class="mb-1"><input type="checkbox" value="1" checked="checked" class="mr-1"><span>Sidebar Mini</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Sidebar Mini MD</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Sidebar Mini XS</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav Flat Style</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav Legacy Style</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav Compact</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav Child Indent</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav Child Hide on Collapse</span></div><div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>Disable Hover/Focus Auto-Expand</span></div><h6>Footer Options</h6><div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>Fixed</span></div><h6>Small Text Options</h6><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Body</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Navbar</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Brand</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Sidebar Nav</span></div><div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>Footer</span></div><h6>Navbar Variants</h6><div class="d-flex"><select class="custom-select mb-3 text-light border-0 bg-white"><option class="bg-primary">Primary</option><option class="bg-secondary">Secondary</option><option class="bg-info">Info</option><option class="bg-success">Success</option><option class="bg-danger">Danger</option><option class="bg-indigo">Indigo</option><option class="bg-purple">Purple</option><option class="bg-pink">Pink</option><option class="bg-navy">Navy</option><option class="bg-lightblue">Lightblue</option><option class="bg-teal">Teal</option><option class="bg-cyan">Cyan</option><option class="bg-dark">Dark</option><option class="bg-gray-dark">Gray dark</option><option class="bg-gray">Gray</option><option class="bg-light">Light</option><option class="bg-warning">Warning</option><option class="bg-white">White</option><option class="bg-orange">Orange</option></select></div><h6>Accent Color Variants</h6><div class="d-flex"></div><select class="custom-select mb-3 border-0"><option>None Selected</option><option class="bg-primary">Primary</option><option class="bg-warning">Warning</option><option class="bg-info">Info</option><option class="bg-danger">Danger</option><option class="bg-success">Success</option><option class="bg-indigo">Indigo</option><option class="bg-lightblue">Lightblue</option><option class="bg-navy">Navy</option><option class="bg-purple">Purple</option><option class="bg-fuchsia">Fuchsia</option><option class="bg-pink">Pink</option><option class="bg-maroon">Maroon</option><option class="bg-orange">Orange</option><option class="bg-lime">Lime</option><option class="bg-teal">Teal</option><option class="bg-olive">Olive</option></select><h6>Dark Sidebar Variants</h6><div class="d-flex"></div><select class="custom-select mb-3 text-light border-0 bg-primary"><option>None Selected</option><option class="bg-primary">Primary</option><option class="bg-warning">Warning</option><option class="bg-info">Info</option><option class="bg-danger">Danger</option><option class="bg-success">Success</option><option class="bg-indigo">Indigo</option><option class="bg-lightblue">Lightblue</option><option class="bg-navy">Navy</option><option class="bg-purple">Purple</option><option class="bg-fuchsia">Fuchsia</option><option class="bg-pink">Pink</option><option class="bg-maroon">Maroon</option><option class="bg-orange">Orange</option><option class="bg-lime">Lime</option><option class="bg-teal">Teal</option><option class="bg-olive">Olive</option></select><h6>Light Sidebar Variants</h6><div class="d-flex"></div><select class="custom-select mb-3 border-0"><option>None Selected</option><option class="bg-primary">Primary</option><option class="bg-warning">Warning</option><option class="bg-info">Info</option><option class="bg-danger">Danger</option><option class="bg-success">Success</option><option class="bg-indigo">Indigo</option><option class="bg-lightblue">Lightblue</option><option class="bg-navy">Navy</option><option class="bg-purple">Purple</option><option class="bg-fuchsia">Fuchsia</option><option class="bg-pink">Pink</option><option class="bg-maroon">Maroon</option><option class="bg-orange">Orange</option><option class="bg-lime">Lime</option><option class="bg-teal">Teal</option><option class="bg-olive">Olive</option></select><h6>Brand Logo Variants</h6><div class="d-flex"></div><select class="custom-select mb-3 border-0"><option>None Selected</option><option class="bg-primary">Primary</option><option class="bg-secondary">Secondary</option><option class="bg-info">Info</option><option class="bg-success">Success</option><option class="bg-danger">Danger</option><option class="bg-indigo">Indigo</option><option class="bg-purple">Purple</option><option class="bg-pink">Pink</option><option class="bg-navy">Navy</option><option class="bg-lightblue">Lightblue</option><option class="bg-teal">Teal</option><option class="bg-cyan">Cyan</option><option class="bg-dark">Dark</option><option class="bg-gray-dark">Gray dark</option><option class="bg-gray">Gray</option><option class="bg-light">Light</option><option class="bg-warning">Warning</option><option class="bg-white">White</option><option class="bg-orange">Orange</option><a href="#">clear</a></select></div></aside>
    <!-- /.control-sidebar -->
    <div id="sidebar-overlay"></div></div>
<script>
    /*
     * Type javascript here
     **/
    $("#send").on('click', function () {
        sendDataToKintone();
    });

    function sendDataToKintone(){
        var name = document.getElementsByName("fullname")[0].value;
        var email = document.getElementsByName("email")[0].value;
        var subject = document.getElementsByName("subject")[0].value;
        var message = document.getElementsByName("message")[0].value;
        var body = {
            app: 405,
            record: {
                Name: {
                    value: name
                },
                Email: {
                    value: email
                },
                Subject: {
                    value: subject
                },
                Message: {
                    value: message
                },
            }
        };
        //body.__REQUEST_TOKEN__ = token;
        console.log(JSON.stringify(body));

        var xhr = new XMLHttpRequest();
//            xhr.open('POST', 'https://neos-dev.cybozu.com/k/v1/record.json?');
        xhr.open('POST', 'https://neos-dev.cybozu.com/k/guest/18/v1/record.json?');
        xhr.setRequestHeader('X-Cybozu-API-Token', 'jdXNa9a61Xo6YeGGMplhF6kTzn0lgtTfFs4kicNH');
        xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
//            xhr.setRequestHeader('Content-Type', 'application/json');
        xhr.setRequestHeader('Content-Type', 'multipart/form-data');
        xhr.setRequestHeader('Access-Control-Allow-Origin', '*');
        xhr.setRequestHeader('Access-Control-Allow-Methods', '*');
        xhr.setRequestHeader('Access-Control-Max-Age', '6000');
        var jsonString = JSON.stringify(body);
        xhr.onload = function() {
            var res = JSON.parse(xhr.responseText);
            if (xhr.status === 200) {
                resolve(res);
                return;
            } else {
                reject(err);
                return;
            }
        };

        xhr.onerror = function(err) {
            console.log('err: ', err);
            // reject(err);
            return;
        };

        xhr.send(jsonString);
    }

    function sendToKintone() {
        var name = document.getElementsByName("fullname")[0].value;
        var email = document.getElementsByName("email")[0].value;
        var subject = document.getElementsByName("subject")[0].value;
        var message = document.getElementsByName("message")[0].value;
        var body = {
            app: 405,
            record: {
                Name: {
                    value: name
                },
                Email: {
                    value: email
                },
                Subject: {
                    value: subject
                },
                Message: {
                    value: message
                },
            }
        };
        var url = 'https://neos-dev.cybozu.com/k/guest/18/v1/record.json';
        var method = 'POST';
        var headers = {
            'Content-Type':'application/json',
            'X-Cybozu-API-Token':'jdXNa9a61Xo6YeGGMplhF6kTzn0lgtTfFs4kicNH'
        };

        kintone.proxy(url, method, headers, body).then(function(r){
            console.log(JSON.parse(r));
        }).catch(function(e){
            console.log(e);
        });

    }
</script>
<!-- ./wrapper -->
</body>
</html>