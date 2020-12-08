<script> 
      var timer = setInterval(function CompteaRebour() {
        <?php
            $secondes = $items['date_fin'] - mktime(date("H"), date("i"), date("s"), date("m"), date("d"), date("Y"));
        ?>
        var temps = <?php echo $secondes; ?>;
            j = parseInt(temps);
            h = parseInt(temps / 3600);
            m = parseInt((temps % 3600) / 60);
            s = parseInt((temps % 3600) % 60);

            document.getElementById('<?= $items['id'] ?>').innerHTML = (h < 10 ? "0" + h : h) + '  h :  ' +
            (m < 10 ? "0" + m : m) + ' mn : ' +
            (s < 10 ? "0" + s : s) + ' s ';

            if ((s == 0 && m == 0 && h == 0)) {
            <?php echo 'expirer'; ?>
            }
        }, 1000);
    </script>