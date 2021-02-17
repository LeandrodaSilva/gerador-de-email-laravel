@foreach($sessoes as $sessao)
    <table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
        <tr>
            <td class="blog" align="center" valign="top">
                <!-- body-bg-color -->
                <table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" class="row"
                       style="width:100%;max-width:100%;">
                    <tr>
                        <td class="body-bg-color" align="center" valign="top" bgcolor="#F4F4F4">
                            <!-- bg-color -->
                            <table border="0" width="800" align="center" cellpadding="0" cellspacing="0" class="row"
                                   style="width:800px;max-width:800px;">
                                <tr>
                                    <td class="bg-color-option-a" align="center" valign="top" bgcolor="#FFFFFF">
                                        <!-- container -->
                                        <table width="600" border="0" cellpadding="0" cellspacing="0" align="center"
                                               class="row" style="width:600px;max-width:600px;">
                                            <tr>
                                                <td align="center" valign="top" class="container-padding">

                                                    <!-- space -->
                                                    <table border="0" width="100%" align="center" cellpadding="0"
                                                           cellspacing="0" style="width:100%;max-width:100%;">
                                                        <tr>
                                                            <td class="space-control" valign="middle" align="center"
                                                                height="30"> 
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <!-- space -->

                                                    <!-- container -->
                                                    <table width="600" border="0" cellpadding="0" cellspacing="0"
                                                           align="center" class="row"
                                                           style="width:600px;max-width:600px;">
                                                        <tr>
                                                            <td align="center" valign="top" class="container-padding">

                                                                <!-- title -->
                                                                <table border="0" width="100%" cellpadding="0"
                                                                       cellspacing="0" align="center"
                                                                       style="width:100%; max-width:100%;">
                                                                    <tr>
                                                                        <td class="title center-text" valign="middle"
                                                                            align="center"
                                                                            style="font-family:'Roboto',Arial,Helvetica,sans-serif; font-size:22px; line-height:22px; font-weight:bolder;font-style:normal; color:#444444;text-decoration:none;letter-spacing: 2px;">

                                                                            {{$sessao['titulo']}}

                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td valign="middle" align="center" height="10"
                                                                            style="font-size:10px;line-height:10px;"> 
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                                <!-- title -->

                                                                <!-- subtitle -->
                                                                <table border="0" width="100%" cellpadding="0"
                                                                       cellspacing="0" align="center"
                                                                       style="width:100%; max-width:100%;">
                                                                    <tr>
                                                                        <td class="subtitle center-text" valign="middle"
                                                                            align="center"
                                                                            style="font-family:'Roboto',Arial,Helvetica,sans-serif; font-size:12px; line-height:18px; font-weight:bolder;font-style:normal; color:#c02b3e;text-decoration:none;letter-spacing: 4px;">

                                                                            {{$sessao['descricao']}}

                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                                <!-- subtitle -->

                                                                <!-- splitter with gaps -->
                                                                <table border="0" width="100%" align="center"
                                                                       cellpadding="0" cellspacing="0"
                                                                       style="width:100%;max-width:100%;">
                                                                    <tr>
                                                                        <td align="center" valign="middle" height="20"
                                                                            style="font-size:20px;line-height:20px;"> 
                                                                        </td>
                                                                    </tr>

                                                                </table>
                                                                <!-- splitter with gaps -->

                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <!-- container -->

                                                    <!-- container-3-columns -->
                                                @component('template.product', ['sessao' => $sessao])
                                                @endcomponent
                                                <!-- container-3-columns -->

                                                    <!-- space -->
                                                    <table border="0" width="100%" align="center" cellpadding="0"
                                                           cellspacing="0" style="width:100%;max-width:100%;">
                                                        <tr>
                                                            <td class="space-control" valign="middle" align="center"
                                                                height="30"> 
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <!-- space -->
                                                </td>
                                            </tr>
                                        </table>
                                        <!-- container -->
                                    </td>
                                </tr>
                            </table>
                            <!-- bg-color -->
                        </td>
                    </tr>
                </table>
                <!-- body-bg-color -->
            </td>
        </tr>
    </table>
@endforeach
