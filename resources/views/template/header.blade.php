<table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
    <tr>
        <td class="header" align="center" valign="top">
            <!-- body-bg-color -->
            <table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" class="row"
                   style="width:100%;max-width:100%;">
                <tr>
                    <td class="body-bg-color" align="center" valign="top" bgcolor="#F4F4F4">
                        <!-- bg-color -->
                        <table border="0" width="800" align="center" cellpadding="0" cellspacing="0" class="row"
                               style="width:800px;max-width:800px;">
                            <tr>
                                <td class="bg-color" align="center" valign="top" bgcolor="#333333">
                                    <!-- header-outlook-windows -->
                                    <!--[if (gte mso 9)|(IE)]>
                                    <v:rect xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false"
                                            style="width:800px;height:570px;">
                                        <v:fill type="frame"
                                                src="https://x3m.umdigital.com.br/media/images/xterra/newscommerce/038-2020/https://www.psd2newsletters.com/templates/rubik/img/businessman.jpg"
                                                color="#333333"/>
                                        <v:textbox style="v-text-anchor:middle;" inset="0,0,0,0">
                                    <![endif]-->

                                    @foreach($headerBgImages as $headerBgImage)
                                        <table border="0" width="100%" align="center" cellpadding="0" cellspacing="0"
                                               class="row" style="width:100%;max-width:100%;">
                                            <tr>
                                                <td class="bg-image" align="center" valign="top" style="padding: 0;"><a
                                                        href="{{$headerBgImage['href']}}"><img
                                                            style="{{$headerBgImage['style']}}"
                                                            src="{{$headerBgImage['src']}}"/></a>

                                                </td>
                                            </tr>
                                        </table>
                                    @endforeach

                                    <!--[if (gte mso 9)|(IE)]></v:textbox></v:rect><![endif]-->
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
