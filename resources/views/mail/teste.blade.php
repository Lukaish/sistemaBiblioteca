<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <style>

    </style>
</head>

<body style="margin: 0; padding: 0">

    <table border="0" width="100%" cellpading="0" cellspacing="0">
        <tr>
            <td>
                <table align="center" border="0" width="600px" cellpading="0" cellspacing="0">
                    <tr>
                        <td bgcolor="#002f71" align="center" style="padding: 60px 0 50px 0;">
                            <h1>Livro Comprado</h1>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="white" align="center">
                            <table border="0" width="600px" cellpading="0" cellspacing="0" style="padding: 15px;">
                                <tr>
                                    <td>
                                        <h2>Obrigado pela compra {{ $nome }}</h2>
                                        <p> Compra do livro {{$livro}} no valor de {{$valor}} reais foi realizada com sucesso .</p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table border="0" style="height: 50px;" width="600px" cellpading="0" cellspacing="0">
                                <tr>
                                    <td bgcolor="#f78139">

                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

</body>

</html>