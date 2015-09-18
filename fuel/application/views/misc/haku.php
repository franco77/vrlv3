<h2><?=$title?></h2>

<p>
    <div class="alert alert-<?php echo fuel_var('msg_type', 'info')?>" role="alert">   
        <?php echo fuel_var('msg', '')?>
        <?php echo validation_errors(); ?>
    </div>
    
    <?php
        echo fuel_var('form', '');
    ?>
    
    <br />
    
    <div id="result_div"></div>
    
    <?php if(!empty($headers)) : ?>
        <script>
            $(document).ready(function() {
                var headers = JSON.parse('<?=$headers?>');
                var data = JSON.parse('<?=$data?>');
                var numcolumns = 0;
                var table = "<table id='result_table'><thead><tr>";

                for(i in headers)
                {
                    table += "<th>" + headers[i]['title'] + "</th>";
                    numcolumns++;
                }
                
                table += "</tr></thead><tbody>";
                
                for(d in data)
                {
                    if (data[d] == null)
                        continue;
                    
                    table += "<tr>";
                    
                    for(var i=1; i<=numcolumns; i++)
                    {
                        //Jos pitää koota kaikki saman hakukohteen useat arvot yhteen arvoon, mennään iffiin
                        //esim. tallihaussa kootaan yhteen muuttujaan kaikki tallin kategoriat
                        if(headers[i]['aggregated_by'] != undefined)
                        {
                            for(agr in data) //etsitään muut aggregoitavat rivit
                            {
                                if (data[agr] == null)
                                    continue;
                                
                                //eihän ole sama rivi kuin mitä tulostetaan && vastaahan yksilöivät ID:t toisiaan (aggregated_by:t siis kertovat ID:n keyn)
                                if (d != agr && data[agr][headers[i]['aggregated_by']] == data[d][headers[i]['aggregated_by']])
                                {
                                    data[d][headers[i]['key']] += ", " + data[agr][headers[i]['key']]; //appendaus
                                    data[agr] = null; //poistetaan aggregoitu rivi ettei myöhemmin tulosteta sitä uudestaan
                                }
                            }
                        }
                        
                        if (headers[i]['profile_link'] != undefined)
                            table += "<td><a href='" + headers[i]['profile_link'] + data[d][headers[i]['key']] + "'>" + data[d][headers[i]['key']] + "</a></td>"; //profiili linkatun arvon tulostus soluunsa
                        else
                            table += "<td>" + data[d][headers[i]['key']] + "</td>"; //normaali arvon tulostus soluunsa
                    }
                        
                    table += "</tr>";
                }
                
                table += "<tbody></table>";
                $("#result_div").append(table);
                $('#result_table').DataTable();
            });
        </script>
    <?php endif; ?>
</p>