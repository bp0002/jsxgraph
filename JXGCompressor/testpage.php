<html>
<head>
<!--<script src="../distrib/jsxcompressor.js" type="text/javascript"></script>-->
<script>
JXG = {};
</script>
<script src="../src/Util.js" type="text/javascript"></script>
<body>
<h1>Using the JSX Compressor</h1>
<script type="text/javascript">
compressed = "eNrtmW1v2zYQgD/Hv4JAvrQbaklO3DqYIKB5K4YNLdB2RTsMHWSLtrnIokFRiZ2i/313x6NEd3bXdcHWdU6AhHc8vh2fO0pU+uTi2dOL1y+zXvrq4vmL7589zZL+oySNvNRLxzo3RdY7SKt8IbOfpZrMZTUtf2niWB5DWYA1VYGJqqbaLHKrdJWlUShBZd7YuTag5wKoJnqxkJUFnS+BcqorW6tbmSXDNGoF7L3IYCxFk2HdQbrIV2oBQpFZ08g06mSsXWVxP06jFQlrJ6xJuFGFnWdHQ1I5AdVzqWZzmx3FpGcJxovcgELAiLpo6myQxIOHYOIkWos2hapyK0EUB6zgWbkyqWdGeS0VSVlX+TKb5mUNWirjXLRRM4Wuo4UM4m4puBaW3Woib4ud3Wq98K2SjTZJ0MJZoX1TKevth5uDDMMxnB22sNK0IwTWraWrR8syH8vSm64C23VrzCZovWhKq3Z3DH6a65tV6ygSWv061HPf3KHbjsqqqtG0WzQAm7ejsMxNQ3vBQ4Se+njrzhrbApPtqG7r22ZO5FbODlustF77FrPXP8pwU2ZvSOY2zhLbXCt5s9SGZ2j1MjvG3cMCaUo5tdkD0lGRlGNtLYAA6kEasUAVhtA/6Y/SyHAUwGjdGOKAse6YTzuggVeasXCs0mxpF4yua+8rJ/DulJASDs9i/L28xK5RQXVFXs/ZT1Qk5VIryAxB2HQKDFc/k3ScT65mRjeVSwg8ziX/tONA1VSVkmkyE0AO//IObAZFFxM+jWwmkTaLbOYQmJUfIlWLfCazfr8P+YyKkFmEgA0IZitIBRgWClNo7TVRoEIFrlKWEtNn7cNzxbsLTtBl8UqaGsxdZqf8SV61OZVcaGDyffvu7buXc1ULUNTg8AkOIm5yUBgJm1yIG2Xngs6M1UuB/fXfv3eh4pI39rZYgvMWy1ZakbhieZU9OEKmvLxGeTjwDoWNzY07ErhAk43a2aY5zOpaMg8suAqYYwZHBv3nJQItsaeGNCYH8JkYJzg/wVHFJ5ZTXKtajUs/jJdcYJl8In0fTnDUWKOvpKMA1hOKvYMWvcA0O4zh5/Iyjr01xykCo6oZ1iOkWN/qyAI4KrPD05Pz00fnD4+JK06yLpkeYqOY4ihIwG69h2cj/MVmgQOicHaQu8gTQT7tPNN1iJtJCHd7SSKHRjh0i2wb+q3C1ddZ1ZQl6DlP/lZPYT/wLy/YJ04sudXAgQfAg6e55CBorGaZRwo0fDa54PhbUfJGNwI4E6apKtgVkVcCepBGXLtOhJ76MLmbCBntI2QfIf9shOBZQ4cqHSr8/P/YP+wLDpxZIocuXEQXL4LXftwf+qcAB3LiQRYBs+LPoT35MqA9+ii0HbUdXAG1H2LL9IXYem5d9dEg4LYFN47/CO6/Si524d5vgj75hceTyTUtmu6hp334cb5bw1Yk6LI1PyVFLX5bWTzdwuLDnSwm/cEGi4N+crxHcY/inaB4tgXFRztRHPDrRJsW4/7JPi3uWbwbFs+3sDjayWLcH40+PKOH+8S4h/GzYJyZfDkPYXzya7wFx5MdOE6biu4cshequrf65vW9x/e/fQN/7kPxFIun92GC3uivAjr8bwEaxyO+C/sIoO4SawegaLDx8vMBoPTa9CUAivd1DM4OipItFCXxp2J0huycEUbnWDzfY/T/xGiwDaPk87LRLrhOvxbCju/yJP3qCEuj4NIdP53QZ1K6sAcvgDV9b7Fal+McP2SI1K6XMvvpxcVz8DgWUedeZGXV2FtpCjlVlZLGSvGDu4G/omv+UqrayhZdkRaynhi1JLjyK9vIspRi/Im9hI177lNQO8u0hkVNrCxCLV6+bVH3eum4AamiT6MD2IVA7KXwbCGh7Xf4bRJLPXcL6lwT+e/OvwOVuIW4";

<?php
//$txt = file_get_contents($_SERVER["argv"][1]);
$txt = rawurlencode(file_get_contents("./test.js"));
$txt = rawurlencode(file_get_contents("../examples/bspnc/chrysler.nc.gxt"));

$comp = gzcompress($txt);
$base64 = base64_encode($comp);
//echo "compressed = \"$base64\";";
//$base64 = file_get_contents("../examples/bspnc/schwingung.gxt");
echo "compressed = \"$base64\";";

//$x = gzuncompress(base64_decode($base64));
//echo "alert(\"$x\");";
?>

uncompressed = (new JXG.Util.Unzip(JXG.Util.Base64.decodeAsArray(compressed))).unzip();
alert(unescape(uncompressed));
//eval(uncompressed);
</script>
</html>

