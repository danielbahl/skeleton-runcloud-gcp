<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Ubuntu:400,700&display=swap');
        html {
            font-family: 'Ubuntu', sans-serif;
            font-size: calc(1em + 0.5vw);
            line-height: 1.5;
            color: #fff;
        }
        .bg {
            background-color: #121a29;
            height: 100vh;
            width: 100vw;
            position: fixed;
            top: 0;
            left: 0;
        }
        .content-wrapper {
            position: relative;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .content-wrapper .content {
            color: #fff;
            text-align: center;
            max-width: 900px;
        }
        h1 {
            font-size: 3rem;
            margin-top: 0;
        }
        p	{
            font-size:
        }
        code {
            font-family: Menlo, Monaco, Consolas, "Courier New", monospace;
            padding: 2px 4px;
            font-size: 90%;
            color: #c7254e;
            background-color: #f9f2f4;
            border-radius: 4px;
        }
        a {
            color: #ffcb36;
        }
        small {
            font-size: 11px;
        }
    </style>
</head>
<body>
<div class="bg">
    <svg xmlns="http://www.w3.org/2000/svg" width="100vw" height="100vh" style="opacity:0.075"><path d="M720,650L421,629L480,1010Z" fill="#717171" stroke="#717171" stroke-width="1.51"/><path d="M421,629L113,825L480,1010Z" fill="#747474" stroke="#747474" stroke-width="1.51"/><path d="M139,712L113,825L421,629Z" fill="#909090" stroke="#909090" stroke-width="1.51"/><path d="M480,1010L852,1160L720,650Z" fill="#4d4d4d" stroke="#4d4d4d" stroke-width="1.51"/><path d="M431,1434L745,1303L480,1010Z" fill="#595959" stroke="#595959" stroke-width="1.51"/><path d="M480,1010L745,1303L852,1160Z" fill="#4c4c4c" stroke="#4c4c4c" stroke-width="1.51"/><path d="M618,124L227,354L421,629Z" fill="#c0c0c0" stroke="#c0c0c0" stroke-width="1.51"/><path d="M421,629L227,354L139,712Z" fill="#aaaaaa" stroke="#aaaaaa" stroke-width="1.51"/><path d="M720,650L618,124L421,629Z" fill="#a1a1a1" stroke="#a1a1a1" stroke-width="1.51"/><path d="M852,1160L1080,587L720,650Z" fill="#4a4a4a" stroke="#4a4a4a" stroke-width="1.51"/><path d="M1080,587L928,308L720,650Z" fill="#797979" stroke="#797979" stroke-width="1.51"/><path d="M102,1315L431,1434L480,1010Z" fill="#686868" stroke="#686868" stroke-width="1.51"/><path d="M139,712L-53,568L113,825Z" fill="#9b9b9b" stroke="#9b9b9b" stroke-width="1.51"/><path d="M113,825L102,1315L480,1010Z" fill="#6d6d6d" stroke="#6d6d6d" stroke-width="1.51"/><path d="M227,354L-53,568L139,712Z" fill="#b5b5b5" stroke="#b5b5b5" stroke-width="1.51"/><path d="M928,308L618,124L720,650Z" fill="#a2a2a2" stroke="#a2a2a2" stroke-width="1.51"/><path d="M-182,1049L102,1315L113,825Z" fill="#767676" stroke="#767676" stroke-width="1.51"/><path d="M852,1160L1311,949L1080,587Z" fill="#2b2b2b" stroke="#2b2b2b" stroke-width="1.51"/><path d="M1319,189L1170,67L928,308Z" fill="#8e8e8e" stroke="#8e8e8e" stroke-width="1.51"/><path d="M1167,1502L1311,949L852,1160Z" fill="#272727" stroke="#272727" stroke-width="1.51"/><path d="M-53,568L-182,1049L113,825Z" fill="#858585" stroke="#858585" stroke-width="1.51"/><path d="M-182,1049L-24,1393L102,1315Z" fill="#777777" stroke="#777777" stroke-width="1.51"/><path d="M102,1315L-24,1393L431,1434Z" fill="#717171" stroke="#717171" stroke-width="1.51"/><path d="M-53,568L-504,702L-182,1049Z" fill="#8d8d8d" stroke="#8d8d8d" stroke-width="1.51"/><path d="M227,354L-96,284L-53,568Z" fill="#d1d1d1" stroke="#d1d1d1" stroke-width="1.51"/><path d="M-42,6L-96,284L227,354Z" fill="#ececec" stroke="#ececec" stroke-width="1.51"/><path d="M745,1303L1167,1502L852,1160Z" fill="#383838" stroke="#383838" stroke-width="1.51"/><path d="M431,1434L1167,1502L745,1303Z" fill="#444444" stroke="#444444" stroke-width="1.51"/><path d="M-24,1393L1167,1502L431,1434Z" fill="#5b5b5b" stroke="#5b5b5b" stroke-width="1.51"/><path d="M1001,-187L710,-194L618,124Z" fill="#c3c3c3" stroke="#c3c3c3" stroke-width="1.51"/><path d="M1319,189L928,308L1080,587Z" fill="#7d7d7d" stroke="#7d7d7d" stroke-width="1.51"/><path d="M1655,373L1319,189L1080,587Z" fill="#5c5c5c" stroke="#5c5c5c" stroke-width="1.51"/><path d="M150,-236L227,354L618,124Z" fill="#e8e8e8" stroke="#e8e8e8" stroke-width="1.51"/><path d="M150,-236L-42,6L227,354Z" fill="#f7f7f7" stroke="#f7f7f7" stroke-width="1.51"/><path d="M1311,949L1601,889L1080,587Z" fill="#1c1c1c" stroke="#1c1c1c" stroke-width="1.51"/><path d="M1167,1502L1489,1173L1311,949Z" fill="#111111" stroke="#111111" stroke-width="1.51"/><path d="M1001,-187L618,124L928,308Z" fill="#b7b7b7" stroke="#b7b7b7" stroke-width="1.51"/><path d="M1489,1173L1601,889L1311,949Z" fill="#000000" stroke="#000000" stroke-width="1.51"/><path d="M-474,101L-504,702L-96,284Z" fill="#d9d9d9" stroke="#d9d9d9" stroke-width="1.51"/><path d="M-96,284L-504,702L-53,568Z" fill="#bebebe" stroke="#bebebe" stroke-width="1.51"/><path d="M-182,1049L-652,1301L-24,1393Z" fill="#777777" stroke="#777777" stroke-width="1.51"/><path d="M1170,67L1001,-187L928,308Z" fill="#a5a5a5" stroke="#a5a5a5" stroke-width="1.51"/><path d="M1281,-431L1001,-187L1170,67Z" fill="#9a9a9a" stroke="#9a9a9a" stroke-width="1.51"/><path d="M710,-194L150,-236L618,124Z" fill="#e1e1e1" stroke="#e1e1e1" stroke-width="1.51"/><path d="M599,-397L150,-236L710,-194Z" fill="#e2e2e2" stroke="#e2e2e2" stroke-width="1.51"/><path d="M1601,889L1655,373L1080,587Z" fill="#323232" stroke="#323232" stroke-width="1.51"/><path d="M1319,189L1469,8L1170,67Z" fill="#7e7e7e" stroke="#7e7e7e" stroke-width="1.51"/><path d="M930,-588L599,-397L710,-194Z" fill="#c7c7c7" stroke="#c7c7c7" stroke-width="1.51"/><path d="M1001,-187L930,-588L710,-194Z" fill="#b9b9b9" stroke="#b9b9b9" stroke-width="1.51"/><path d="M1655,373L1469,8L1319,189Z" fill="#696969" stroke="#696969" stroke-width="1.51"/><path d="M1655,373L1922,273L1469,8Z" fill="#676767" stroke="#676767" stroke-width="1.51"/><path d="M1601,889L1742,524L1655,373Z" fill="#353535" stroke="#353535" stroke-width="1.51"/><path d="M-504,702L-636,1031L-182,1049Z" fill="#777777" stroke="#777777" stroke-width="1.51"/><path d="M599,-397L132,-348L150,-236Z" fill="#f0f0f0" stroke="#f0f0f0" stroke-width="1.51"/><path d="M150,-236L-236,-462L-42,6Z" fill="#ffffff" stroke="#ffffff" stroke-width="1.51"/><path d="M-42,6L-474,101L-96,284Z" fill="#f5f5f5" stroke="#f5f5f5" stroke-width="1.51"/><path d="M-504,702L-582,-178L-636,1031Z" fill="#bebebe" stroke="#bebebe" stroke-width="1.51"/><path d="M-582,-178L-474,101L-42,6Z" fill="#ffffff" stroke="#ffffff" stroke-width="1.51"/><path d="M-636,1031L-652,1301L-182,1049Z" fill="#777777" stroke="#777777" stroke-width="1.51"/><path d="M1601,889L1936,1126L1742,524Z" fill="#0c0c0c" stroke="#0c0c0c" stroke-width="1.51"/><path d="M1489,1173L1936,1126L1601,889Z" fill="#000000" stroke="#000000" stroke-width="1.51"/><path d="M1167,1502L1857,1305L1489,1173Z" fill="#000000" stroke="#000000" stroke-width="1.51"/><path d="M1857,1305L1936,1126L1489,1173Z" fill="#000000" stroke="#000000" stroke-width="1.51"/><path d="M1469,8L1281,-431L1170,67Z" fill="#858585" stroke="#858585" stroke-width="1.51"/><path d="M1792,-353L1281,-431L1469,8Z" fill="#777777" stroke="#777777" stroke-width="1.51"/><path d="M1281,-431L930,-588L1001,-187Z" fill="#a5a5a5" stroke="#a5a5a5" stroke-width="1.51"/><path d="M599,-397L-368,-564L132,-348Z" fill="#fafafa" stroke="#fafafa" stroke-width="1.51"/><path d="M1742,524L1922,273L1655,373Z" fill="#525252" stroke="#525252" stroke-width="1.51"/><path d="M2019,461L1922,273L1742,524Z" fill="#4d4d4d" stroke="#4d4d4d" stroke-width="1.51"/><path d="M132,-348L-236,-462L150,-236Z" fill="#fefefe" stroke="#fefefe" stroke-width="1.51"/><path d="M-368,-564L-236,-462L132,-348Z" fill="#ffffff" stroke="#ffffff" stroke-width="1.51"/><path d="M1936,1126L2019,461L1742,524Z" fill="#252525" stroke="#252525" stroke-width="1.51"/><path d="M-474,101L-582,-178L-504,702Z" fill="#ededed" stroke="#ededed" stroke-width="1.51"/><path d="M-636,1031L-582,-178L-652,1301Z" fill="#9a9a9a" stroke="#9a9a9a" stroke-width="1.51"/><path d="M-236,-462L-582,-178L-42,6Z" fill="#ffffff" stroke="#ffffff" stroke-width="1.51"/><path d="M-236,-462L-368,-564L-582,-178Z" fill="#ffffff" stroke="#ffffff" stroke-width="1.51"/><path d="M930,-588L-368,-564L599,-397Z" fill="#eaeaea" stroke="#eaeaea" stroke-width="1.51"/><path d="M1978,-208L1469,8L1922,273Z" fill="#767676" stroke="#767676" stroke-width="1.51"/><path d="M1978,-208L1792,-353L1469,8Z" fill="#777777" stroke="#777777" stroke-width="1.51"/><path d="M1281,-431L1792,-353L930,-588Z" fill="#828282" stroke="#828282" stroke-width="1.51"/><path d="M2019,461L1978,-208L1922,273Z" fill="#6b6b6b" stroke="#6b6b6b" stroke-width="1.51"/><path d="M1978,-208L2004,-327L1792,-353Z" fill="#777777" stroke="#777777" stroke-width="1.51"/><path d="M1792,-353L2004,-327L930,-588Z" fill="#777777" stroke="#777777" stroke-width="1.51"/><path d="M2019,461L2004,-327L1978,-208Z" fill="#777777" stroke="#777777" stroke-width="1.51"/></svg>
</div>
<div class="content-wrapper">
    <div class="content">
        <h1>It's alive!</h1>
        <h2>Congratulations, you successfully deployed a container image to your ServicePoint Kubernetes Cluster.</h2>
        <p>Please refer to your <code>config.ini</code> file to make changes to your container.</p>
        <p>To rebuild and deploy a new revision of your image, run <code>./build.sh</code></p>
        <p>See <a href="https://github.com/danielbahl/servicepoint-k8s-launcher">github.com/danielbahl/servicepoint-k8s-launcher</a> for full documentation</p>
        <p><small>
                <?php
                echo "Container Hostname: " . $_SERVER['SERVER_NAME'] . " &bull; " .
                    "Container IP: " . $_SERVER['SERVER_ADDR'] . " &bull; " .
                    "Load Balancer IP: " . $_SERVER['REMOTE_ADDR'] . "<br>" .

                    "Web-server: " . $_SERVER['SERVER_SOFTWARE'] . " &bull; " .
                    "PHP version: " .phpversion();
                ?>
            </small></p>
    </div>
</div>
</body>
</html>
