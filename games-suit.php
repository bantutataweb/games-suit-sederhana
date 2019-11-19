<!------------------------------ Geraldine Firdaus ------------------------------>
<!---- https://web.facebook.com/lampungprov.go.id ------>
<!---- https://twitter.com/Firdausid_ ---->

<html>
    <head>
        <title>GAMES SUIT</title>
        <style>
            @import url('https://fonts.googleapis.com/css?family=Oswald&display=swap');
            body {
                padding-top: 10%;
                background-color: #ececec;
                font-family: 'Oswald', sans-serif;
            }
            h1 , p , form {
                text-align: center;
            }

            input{
                width: 50%;
                height: 5%;            
            }

            button {
                height: 5%;
                background-color: #77DD77;
                color: white;
                border: none;
                cursor: pointer;
            }

            button:hover{
                background-color: #68BF88;
            }

        </style>
    <head>
    <body>
        <!---------------------------------- LOGIC KOMPUTER ------------------------------------>
        <?php 
        $com = rand();
            if ($com > 100000000 && $com < 800000000 ){
               $com = 'GAJAH';
            }elseif ($com > 800000000 && $com < 1250000000){
                $com = 'SEMUT';
            }else {
                $com = 'ORANG';
            }
        
        ?>

    <!--------------------- INPUTAN PEMAIAN ------------------------------->
        <form action="" method="POST">
            <h1>GAMES SUIT</h1> <p>MASUKAN : GAJAH / SEMUT / ORANG ( Note : Jangan Ada Sepasi )</p>
            <input onkeyup="this.value = this.value.toUpperCase()" type="text" name="nama" placeholder="Masukan Sesuatu. . . "  required autofocus>
            <button type="submit" name="sumbit"> SUUUIIITTT ! </button>
        </form>
    <br>

    <!--------------------------------- LOGIC GAMES --------------------------------------->

    <?php if ( isset($_POST["sumbit"]) ) : ?>
        <h1><?php 
        $hasil = '';
        if ( $_POST["nama"] == $com){
            $hasil = 'HASILNYA SERI !';
        }elseif ( $_POST["nama"] == 'GAJAH'){
            if ( $com == 'ORANG'){
                $hasil ='KAMU MENANG !';
            }else{
                $hasil ='KAMU KALAH !';
            }
        }elseif ( $_POST["nama"] == 'ORANG'){
            if ( $com == 'SEMUT'){
                $hasil ='KAMU MENANG !';
            }else{
                $hasil ='KAMU KALAH !';
            }
        }elseif ( $_POST["nama"] == 'SEMUT'){
            if ( $com == 'GAJAH'){
                $hasil ='KAMU MENANG !';
            }else{
                $hasil ='KAMU KALAH !';
            }
        }else {
            $hasil = 'YANG ANDA MASUKAN SALAH ATAU ADA SEPASI !';
        }
        ?>
        <p>kamu memlih : <b style="text-decoration: underline" ><?= $_POST["nama"] ?></b> dan komputer memilih : <b style="text-decoration: underline" ><?= $com ?></b> <br><?= $hasil ?></p>
    </h1>
    <?php  endif; ?>
    </body>


</html>
