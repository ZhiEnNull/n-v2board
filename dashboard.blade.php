
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <link rel="icon" href="/theme/{{$theme}}/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{$title}}</title>
    <script type="text/javascript">
        window.N = {
            title: '{{$title}}',
            version:  '{{$verison}}',
            crisp_id: '{{$crisp_id}}',
            Community_url:'https://t.me/ZhiEnNull',//设置侧边栏url
        }
    </script>
    <script type="module" crossorigin src="/theme/{{$theme}}/assets/index.bbf6b93f.js"></script>
    <link rel="modulepreload" href="/theme/{{$theme}}/assets/vendor.dfd46f6e.js">
    <link rel="stylesheet" href="/theme/{{$theme}}/assets/index.24fcc79c.css">
</head>
<body>
<div id="app"></div>
</body>
<script type="text/javascript">
    window.$crisp = [];
    window.CRISP_WEBSITE_ID = window.N.crisp_id;
    (function () {
        d = document;
        s = d.createElement("script");
        s.src = "https://client.crisp.chat/l.js";
        s.async = 1;
        d.getElementsByTagName("head")[0].appendChild(s);
    })();
</script>
</html>
