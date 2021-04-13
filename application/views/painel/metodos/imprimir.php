<html>
    <head>
        <title>Imprimir</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <style>

            .page-break {
                page-break-after: always;
                page-break-inside: avoid;
                clear: both;
            }

            .page-break-before {
                page-break-before: always;
                page-break-inside: avoid;
                clear: both;
            }
        </style>
        <!--
        <link href="<?php echo base_url(); ?>/assets/css/bootstrap.css" rel="stylesheet" />
        -->
    </head>

    <body style="background: black">
        <button onclick="generate()" style="display: none">Generate PDF</button>
        <div id="html-2-pdfwrapper" style="display: none">
            <div class="col-md-12 col-xs-12">
                <div class="col-md-3 col-xs-3">
                    <!--
                    <img src='<?php echo base_url('assets'); ?>/img/marca.jpg' class="img-responsive">
                    -->
                </div>
                <div class="col-md-7 col-xs-7 text-cente" >
                    Nupex - Núcleo de Pesquisa e Extensão
                    <br>
                    Lista de Presença
                </div>
            </div>
            <div class="col-md-12">
                <?php echo $titulo; ?>
            </div>
            <table class="table table-bordered" style="font-size: 5px;">
                <thead>
                    <tr>
                        <th >#</th>
                        <th >Nº Insc.</th>
                        <th >Classe</th>
                        <th >Método</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $i = 0;
                    foreach ($object->result() as $linha) {
                        $i++;
                        ?>
                        <tr >
                            <td >
                                <?php echo $i; ?>
                            </td>
                            <td><?php echo $linha->met_id; ?></td>
                            <td><?php echo $linha->met_classe; ?></td>
                            <td><?php echo $linha->met_metodo; ?></td>
                            <td></td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>



        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script type="text/javascript" src="https://unpkg.com/jspdf"></script>
        <script type="text/javascript" src="https://unpkg.com/jspdf-autotable"></script>

        <script>


            var base64Img = null;
            imgToBase64('https://avatars0.githubusercontent.com/u/583231?s=460&v=4', function (base64) {
                base64Img = base64;
            });

            margins = {
                top: 50,
                bottom: 40,
                left: 30,
                width: 550
            };

            generate = function () {
                var doc = new jsPDF('p', 'pt', 'a4');
                //var totalPagesExp = "{total_pages_count_string}";
                var totalPagesExp = "";
                doc.setFontSize(10);
                doc.autoTable({
                    html: '.table',
                    margin: {top: 70},
                    didDrawPage: function (data) {
                        // Header
                        //doc.setFontSize(5);
                        doc.setTextColor(40);
                        doc.setFontStyle('normal');
                        if (base64Img) {
                            doc.addImage(base64Img, 'JPEG', data.settings.margin.left, 15, 10, 10);
                        }
                        //doc.text("<?php //echo $this->util->utf8Fix($evento[even_tipo] . ': ' . $evento[even_numEdicao] . ' ' . $evento[even_tema]);   ?>", data.settings.margin.left + 1, 50);

                        var text = doc.splitTextToSize('<?php echo mb_strtoupper($titulo); ?>', data.settings.margin.left + 480, 0);
                        doc.text(text, data.settings.margin.left + 1, 50);


                        // Footer
                        var str = "Página " + doc.internal.getNumberOfPages()
                        // Total page number plugin only available in jspdf v1.0+
                        if (typeof doc.putTotalPages === 'function') {
                            //str = str + " of " + totalPagesExp;
                            str = str + " " + totalPagesExp;
                        }

                        // jsPDF 1.4+ uses getWidth, <1.4 uses .width
                        var pageSize = doc.internal.pageSize;
                        var pageHeight = pageSize.height ? pageSize.height : pageSize.getHeight();
                        doc.text(str, data.settings.margin.left, pageHeight - 10);
                    },

                });
                /*
                 pdf.fromHTML(document.getElementById('html-2-pdfwrapper'),
                 margins.left, // x coord
                 margins.top, {
                 // y coord
                 width: margins.width // max width of content on PDF
                 },
                 function (dispose) {
                 headerFooterFormatting(pdf, pdf.internal.getNumberOfPages());
                 },
                 margins);
                 */


                var iframe = document.createElement('iframe');
                iframe.setAttribute('style', 'position:absolute; left:0; top:0; bottom:0; height:95%; width:97%; padding:20px;');
                document.body.appendChild(iframe);

                iframe.src = doc.output('datauristring');
            };

            function headerFooterFormatting(doc, totalPages) {
                for (var i = totalPages; i >= 1; i--) {
                    doc.setPage(i);
                    //header
                    header(doc);

                    footer(doc, i, totalPages);
                    doc.page++;
                }
            }
            ;

            function header(doc) {
                /*
                 doc.setFontSize(30);
                 doc.setTextColor(40);
                 doc.setFontStyle('normal');
                 
                 if (base64Img) {
                 doc.addImage(base64Img, 'JPEG', margins.left, 10, 40, 40);
                 }
                 
                 doc.text("Report Header Template", margins.left + 50, 40);
                 doc.setLineCap(2);
                 doc.line(3, 70, margins.width + 43, 70); // horizontal line
                 * 
                 */
            }
            ;

            // You could either use a function similar to this or pre convert an image with for example http://dopiaza.org/tools/datauri
            // http://stackoverflow.com/questions/6150289/how-to-convert-image-into-base64-string-using-javascript
            function imgToBase64(url, callback, imgVariable) {

                if (!window.FileReader) {
                    callback(null);
                    return;
                }
                var xhr = new XMLHttpRequest();
                xhr.responseType = 'blob';
                xhr.onload = function () {
                    var reader = new FileReader();
                    reader.onloadend = function () {
                        imgVariable = reader.result.replace('text/xml', 'image/jpeg');
                        callback(imgVariable);
                    };
                    reader.readAsDataURL(xhr.response);
                };
                xhr.open('GET', url);
                xhr.send();
            }
            ;

            function footer(doc, pageNumber, totalPages) {

                var str = "Page " + pageNumber + " of " + totalPages

                doc.setFontSize(10);
                doc.text(str, margins.left, doc.internal.pageSize.height - 20);

            }
            generate();
        </script>
    </body>

</html>



