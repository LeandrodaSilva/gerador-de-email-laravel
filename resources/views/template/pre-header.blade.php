<table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:100%;">
    <tr>
        <td class="preheader" align="center" valign="top">
            <!-- body-bg-color -->
            <table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" class="row"
                   style="width:100%;max-width:100%;">
                <tr>
                    <td class="body-bg-color" align="center" valign="top" bgcolor="#F4F4F4">
                        <!-- bg-color -->
                        <table border="0" width="800" align="center" cellpadding="0" cellspacing="0" class="row"
                               style="width:800px;max-width:800px;">
                            <tr>
                                <td class="bg-color-option-a" align="center" valign="top" bgcolor="#c02b3e">
                                    <!-- container -->
                                    <table width="600" border="0" cellpadding="0" cellspacing="0" align="center"
                                           class="row" style="width:600px;max-width:600px;">
                                        <tr>
                                            <td align="center" valign="top" class="container-padding">
                                                <!-- container-2-columns -->
                                                <table width="600" border="0" cellpadding="0" cellspacing="0"
                                                       align="center" class="row" style="width:600px;max-width:600px;">
                                                    <tr>
                                                        <td align="center" valign="top">
                                                            <!--[if (gte mso 9)|(IE)]>
                                                            <table border="0" cellpadding="0" cellspacing="0">
                                                                <tr>
                                                                    <td valign="middle"><![endif]-->

                                                        @foreach($pre_headers as $index => $pre_header)
                                                            <!--[if (gte mso 9)|(IE)]></td>
                                                            <td valign="middle"><![endif]-->
                                                            <!-- gap -->
                                                            <table width="10" border="0" cellpadding="0" cellspacing="0"
                                                                   align="left" class="row"
                                                                   style="width:10px;max-width:10px;">
                                                                <tr>
                                                                    <td valign="middle" align="center" height="5"
                                                                        style="font-size:20px;line-height:20px;"></td>
                                                                </tr>
                                                            </table>
                                                            <!-- gap -->

                                                            <!--[if (gte mso 9)|(IE)]></td>
                                                            <td valign="middle"><![endif]-->

                                                            <!-- column -->
                                                            <table width="{{$pre_header['largura']}}" border="0" cellpadding="0"
                                                                   cellspacing="0" align="left" class="row"
                                                                   style="width:{{$pre_header['largura']}}px;max-width:{{$pre_header['largura']}}px;">
                                                                @if($pre_header['link'] > 0)
                                                                <tr>
                                                                    <td align="center" valign="middle">
                                                                        <!-- Socials -->
                                                                        <table border="0" width="100%" cellpadding="0"
                                                                               cellspacing="0" align="center"
                                                                               style="width:100%; max-width:100%;">
                                                                            <tr>
                                                                                <td valign="middle" align="center">
                                                                                    <table border="0" cellpadding="0"
                                                                                           cellspacing="0" align="{{$index % 2 === 0 ? 'left' : 'right'}}"
                                                                                           class="center-float">
                                                                                        <tr>
                                                                                            <td valign="middle"
                                                                                                align="center"
                                                                                                height="26">
                                                                                                <table border="0"
                                                                                                       cellpadding="0"
                                                                                                       cellspacing="0"
                                                                                                       align="center"
                                                                                                       style="display:inline-block;vertical-align:middle;">
                                                                                                    <tr>
                                                                                                        <td valign="middle"
                                                                                                            height="16"
                                                                                                            align="left"
                                                                                                            style="font-family:'Roboto',Arial,Helvetica,sans-serif;font-size:12px;line-height:12px;font-weight:normal;font-style:normal;color:#fff;text-decoration:none;letter-spacing:0px;">
                                                                                                                <a class="phone-number"
                                                                                                                   href="{{$pre_header['link']}}"
                                                                                                                   style="color:#fff;">{{$pre_header['text']}}</a>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </table>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                        <!-- Socials -->
                                                                    </td>
                                                                </tr>
                                                                @else
                                                                <tr>
                                                                    <td align="center" valign="middle">
                                                                        <!-- Socials -->
                                                                        <table border="0" width="100%" cellpadding="0"
                                                                               cellspacing="0" align="center"
                                                                               style="width:100%; max-width:100%;">
                                                                            <tr>
                                                                                <td valign="middle" align="center">

                                                                                    <table border="0" cellpadding="0"
                                                                                           cellspacing="0" align="{{$index % 2 === 0 ? 'left' : 'right'}}"
                                                                                           class="center-float">
                                                                                        <tr>
                                                                                            <td valign="middle"
                                                                                                align="center"
                                                                                                height="26"
                                                                                                style="font-family:'Roboto',Arial,Helvetica,sans-serif;font-size:12px;line-height:12px;font-weight:normal;font-style:normal;color:#fff;text-decoration:none;letter-spacing:0px;">
                                                                                                {{$pre_header['text']}}
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>

                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                        <!-- Socials -->
                                                                    </td>
                                                                </tr>
                                                                @endif
                                                            </table>
                                                            <!-- column -->

                                                            @endforeach
                                                            <!--[if (gte mso 9)|(IE)]></td></tr></table>
                                                            <![endif]-->
                                                        </td>
                                                    </tr>
                                                </table>
                                                <!-- container-2-columns -->
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
