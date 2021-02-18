<table width="600" border="0" cellpadding="0" cellspacing="0"
       align="center" class="row" style="width:600px;max-width:600px;">
    <?php $max = 0 ?>
    @foreach($sessao['itens'] as $index => $item)
        <?php $max++ ?>
        @if($max === 1)
            <tr>
                @endif
                <td align="center" valign="top">
                    <!--[if (gte mso 9)|(IE)]>
                    <table border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td valign="top">
                    <![endif]-->

                    <!-- column -->
                    <table width="180" border="0" cellpadding="0"
                           cellspacing="0" align="left" class="row"
                           style="width:180px;max-width:180px;">
                        <tr>
                            <td style="border: solid 1px #999999; border-radius: 5px;"
                                align="center" valign="top">
                                <!-- Picture -->
                                <table border="0" width="100%" align="center"
                                       cellpadding="0" cellspacing="0"
                                       class="row"
                                       style="width:100%;max-width:100%;">
                                    <tr>
                                        <td colspan="3" valign="middle"
                                            align="center" height="20"
                                            bgcolor=""
                                            style="font-size:20px;line-height:20px;">
                                             
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center" valign="top"
                                            height="70" bgcolor="#FFFFFF"
                                            style="height: 70px;"></td>
                                        <td rowspan="2"
                                            class="bg-color-option-a row"
                                            width="140" align="center"
                                            valign="top" bgcolor="#FFFFFF"
                                            style="width:140px;max-width:140px;">
                                            <!-- full-width-image -->
                                            <table width="140" border="0"
                                                   cellpadding="0"
                                                   cellspacing="0"
                                                   align="center" class="row"
                                                   style="width:140px;max-width:140px;">
                                                <tr>
                                                    <td align="center"
                                                        valign="top">
                                                        <table border="0"
                                                               cellpadding="0"
                                                               cellspacing="0"
                                                               align="center"
                                                               class="center-float">
                                                            <tr>
                                                                <td valign="middle"
                                                                    align="center"
                                                                    class="img140 img-responsive">
                                                                    <a href="{{$item['link']}}"><img
                                                                            style="display:block;width:100%;max-width:140px;display:block;border:0px;"
                                                                            src="{{$item['imagem']}}"
                                                                            width="140"
                                                                            border="0"
                                                                            alt="pict"/></a>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                            <!-- full-width-image -->
                                        </td>
                                        <td align="center" valign="top"
                                            height="70" bgcolor="#FFFFFF"
                                            style="height: 70px;"></td>
                                    </tr>
                                    <tr>
                                        <td class="bg-color-option-b"
                                            align="center" valign="top"
                                            bgcolor="#ffffff"> 
                                        </td>
                                        <td class="bg-color-option-b"
                                            align="center" valign="top"
                                            bgcolor="#ffffff"> 
                                        </td>
                                    </tr>
                                </table>
                                <!-- Picture -->
                                <!-- column -->
                                <table border="0" width="100%" align="center"
                                       cellpadding="0" cellspacing="0"
                                       style="width:100%;max-width:100%;">
                                    <tr>
                                        <td align="center" valign="top"
                                            bgcolor=""
                                            class="container-padding bg-color-option-b">
                                            <!-- container -->
                                            <table width="140" border="0"
                                                   cellpadding="0"
                                                   cellspacing="0"
                                                   align="center" class="row"
                                                   style="width:140px;max-width:140px;">
                                                <tr>
                                                    <td align="center"
                                                        valign="top">
                                                        <!-- splitter with gaps -->
                                                        <table border="0"
                                                               width="100%"
                                                               align="center"
                                                               cellpadding="0"
                                                               cellspacing="0"
                                                               style="width:100%;max-width:100%;">


                                                            <tr>
                                                                <td align="center"
                                                                    valign="middle"
                                                                    height="18"
                                                                    style="font-size:18px;line-height:18px;">
                                                                     
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <!-- splitter with gaps -->

                                                        <!-- subtitle -->
                                                        <table border="0"
                                                               width="100%"
                                                               cellpadding="0"
                                                               cellspacing="0"
                                                               align="center"
                                                               style="width:100%; max-width:100%;">
                                                            <tr>
                                                                <td class="subtitle center-text"
                                                                    valign="middle"
                                                                    align="left"
                                                                    style="font-family:'Roboto',Arial,Helvetica,sans-serif; font-size:14px; line-height:14px; font-weight:bolder;font-style:normal; color:#666666;text-decoration:none;letter-spacing: -0.5px; ">

                                                                    <a href="#"
                                                                       style="background-color:#c02b3e; padding: 5px 10px; color: #fff; border-radius:20px; @if($item['desconto'] === "") opacity: 0; @endif">{{$item['desconto']}}</a>

                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td height="10"></td>
                                                            </tr>
                                                        </table>
                                                        <!-- subtitle -->

                                                        <!-- space -->
                                                        <table border="0"
                                                               width="100%"
                                                               align="center"
                                                               cellpadding="0"
                                                               cellspacing="0"
                                                               style="width:100%;max-width:100%;">
                                                            <tr>
                                                                <td valign="middle"
                                                                    align="center"
                                                                    height="5"
                                                                    style="font-size:5px;line-height:5px;">
                                                                     
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <!-- space -->

                                                        <!-- title -->
                                                        <table border="0"
                                                               width="100%"
                                                               cellpadding="0"
                                                               cellspacing="0"
                                                               align="center"
                                                               style="width:100%; max-width:100%;">
                                                            <tr>
                                                                <td class="title center-text"
                                                                    valign="middle"
                                                                    align="left"
                                                                    style="font-family:'Roboto',Arial,Helvetica,sans-serif; font-size:16px; line-height:20px; font-weight:bolder;font-style:normal;">

                                                                    <a style="color:#444444;text-decoration:none;letter-spacing: 0px; display: inline-block; min-height: 60px;"
                                                                       href="{{$item['link']}}">{{$item['titulo']}}</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td valign="middle"
                                                                    align="center"
                                                                    height="10"
                                                                    style="font-size:10px;line-height:10px;">
                                                                     
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                @if(isset($item['preco-anterior']) && $item['preco-anterior'] > 0)
                                                                    <td class="title center-text"
                                                                        valign="middle"
                                                                        align="left"
                                                                        style="font-family:'Roboto',Arial,Helvetica,sans-serif; font-size:25px; line-height:20px; font-weight:bolder;font-style:normal; color:#444444;text-decoration:none;letter-spacing: 0px;">
                                                                        <span style="font-family:'Roboto',Arial,Helvetica,sans-serif; font-size:13px; line-height:21px; font-weight:normal;font-style:normal; color:#999;text-decoration:none;letter-spacing: 0px; text-decoration: line-through">R${{$item['preco-anterior']}}</span><br/>
                                                                        R${{$item['preco']}}
                                                                    </td>
                                                                @else
                                                                    <td class="title center-text"
                                                                        valign="middle"
                                                                        align="left"
                                                                        style="font-family:'Roboto',Arial,Helvetica,sans-serif; font-size:25px; line-height:20px; font-weight:bolder;font-style:normal; color:#444444;text-decoration:none;letter-spacing: 0px;">
                                                                        <br class="hide-mobile"/>
                                                                        <br class="hide-mobile"/><span
                                                                            style="font-family:'Roboto',Arial,Helvetica,sans-serif; font-size:13px; line-height:21px; font-weight:normal;font-style:normal; color:#999;text-decoration:line-through;letter-spacing: 0px;"></span><br/>R${{$item['preco']}}<br
                                                                            class="mobile-mobile"/>
                                                                    </td>
                                                                @endif
                                                            </tr>
                                                            <tr>
                                                                <td valign="middle"
                                                                    align="center"
                                                                    height="10"
                                                                    style="font-size:10px;line-height:10px;">
                                                                     
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <!-- title -->


                                                        <!-- Button-Container -->
                                                        <table border="0"
                                                               width="100%"
                                                               cellpadding="0"
                                                               cellspacing="0"
                                                               align="center"
                                                               style="width:100%; max-width:100%;">
                                                            <tr>
                                                                <td height="15"></td>
                                                            </tr>
                                                            <tr>
                                                                <td align="center"
                                                                    valign="middle">

                                                                    <a style="background-color: #c02b3e; color: #fff; text-decoration: none; display: block; padding: 10px;font-family:'Roboto',Arial,Helvetica,sans-serif; font-weight: bold; border-radius: 5px"
                                                                       href="{{$item['link']}}">COMPRAR</a>

                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td height="15"></td>
                                                            </tr>
                                                        </table>
                                                        <!-- Button-Container -->

                                                    </td>
                                                </tr>
                                            </table>
                                            <!-- container -->
                                        </td>
                                    </tr>
                                </table>
                                <!-- column -->
                            </td>
                        </tr>
                    </table>
                    <!-- column -->

                    <!--[if (gte mso 9)|(IE)]></td>
                    <td valign="top"><![endif]-->

                    <!-- gap -->
                    <table width="30" border="0" cellpadding="0" cellspacing="0"
                           align="left" class="row"
                           style="width:30px;max-width:30px;">
                        <tr>
                            <td valign="middle" align="center" height="30"></td>
                        </tr>
                    </table>
                    <!-- gap -->
                </td>
                @if($max === 3)
                    <?php $max = 0 ?>
            </tr>
        @endif
    @endforeach
</table>
