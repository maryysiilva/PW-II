<?php include("cabecalho.php"); ?>

<section>
        <h1> Tabuada </h1>
    </section>

    <section style="margin: 0 auto; display:table; width:50%;">
        <table class="table table-striped">  
            <tbody>

                <?php
                    $n = 5;

                    for($i=0;$i<=10;$i++){
                        echo "<tr>";            
                            echo "<td> $n </td>";
                            echo "<td> * </td>";
                            echo "<td> $i </td>";
                            echo "<td> = </td>";
                            echo "<td>" . ($n * $i) . "</td>";
                        echo "</tr>";
                    }
                ?>    
                
            </tbody>
            </table>
    </section>



<?php include("rodape.php"); ?>