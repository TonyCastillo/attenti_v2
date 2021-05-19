{{-- {{ dd($user->name, $user->last_name, $title, $subject, $content) }} --}}

{{-- @php
        $user = \App\Models\User::find(2);
        $title = 'Bienvenido';
        $message = 'Tu usuario ha sido activado ya puedes disfrutar de todas las funcionalidades dentro del sistamde de Drone2Map';
        $subject = 'Tu usuarios ha sido activado';
@endphp --}}
{{-- {{ dd($user['name'].' '.$user->last_name ) }} --}}
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office"
    style="width:100%;font-family:'Open Sans', sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta name="x-apple-disable-message-reformatting">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="telephone=no" name="format-detection">
    <title>{{ $title }}-Drone2MAP</title>
    <!--[if (mso 16)]>
    <style type="text/css">
    a {text-decoration: none;}
    </style>
    <![endif]-->
    <!--[if gte mso 9]><style>sup { font-size: 100% !important; }</style><![endif]-->
    <!--[if gte mso 9]>
<xml>
    <o:OfficeDocumentSettings>
    <o:AllowPNG></o:AllowPNG>
    <o:PixelsPerInch>96</o:PixelsPerInch>
    </o:OfficeDocumentSettings>
</xml>
<![endif]-->
    <!--[if !mso]><!-- -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,700,700i" rel="stylesheet">
    <!--<![endif]-->
    <style type="text/css">
        #outlook a {
            padding: 0;
        }

        .ExternalClass {
            width: 100%;
        }

        .ExternalClass,
        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td,
        .ExternalClass div {
            line-height: 100%;
        }

        .es-button {
            mso-style-priority: 100 !important;
            text-decoration: none !important;
        }

        a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        .es-desk-hidden {
            display: none;
            float: left;
            overflow: hidden;
            width: 0;
            max-height: 0;
            line-height: 0;
            mso-hide: all;
        }

        .es-button-border:hover a.es-button,
        .es-button-border:hover button.es-button {
            background: #004ed6 !important;
            border-color: #004ed6 !important;
        }

        [data-ogsb] .es-button {
            border-width: 0 !important;
            padding: 15px 30px 15px 30px !important;
        }

        td .es-button-border:hover a.es-button-1 {
            background: #ffffff !important;
            border-color: #ffffff !important;
            color: #ff294a !important;
        }

        td .es-button-border-2:hover {
            background: #ffffff !important;
            border-color: #ffffff #ffffff #ffffff #ffffff !important;
        }

        td .es-button-border:hover a.es-button-3 {
            background: #27a76e !important;
            border-color: #27a76e !important;
        }

        td .es-button-border-4:hover {
            background: #27a76e !important;
        }

        [data-ogsb] .es-button.es-button-5 {
            padding: 15px 45px !important;
        }

        @media only screen and (max-width:600px) {

            p,
            ul li,
            ol li,
            a {
                line-height: 150% !important
            }

            h1 {
                font-size: 28px !important;
                text-align: left;
                line-height: 120%
            }

            h2 {
                font-size: 20px !important;
                text-align: left;
                line-height: 120%
            }

            h3 {
                font-size: 14px !important;
                text-align: left;
                line-height: 120%
            }

            h1 a {
                text-align: left
            }

            .es-header-body h1 a,
            .es-content-body h1 a,
            .es-footer-body h1 a {
                font-size: 28px !important
            }

            h2 a {
                text-align: left
            }

            .es-header-body h2 a,
            .es-content-body h2 a,
            .es-footer-body h2 a {
                font-size: 20px !important
            }

            h3 a {
                text-align: left
            }

            .es-header-body h3 a,
            .es-content-body h3 a,
            .es-footer-body h3 a {
                font-size: 14px !important
            }

            .es-menu td a {
                font-size: 14px !important
            }

            .es-header-body p,
            .es-header-body ul li,
            .es-header-body ol li,
            .es-header-body a {
                font-size: 14px !important
            }

            .es-content-body p,
            .es-content-body ul li,
            .es-content-body ol li,
            .es-content-body a {
                font-size: 14px !important
            }

            .es-footer-body p,
            .es-footer-body ul li,
            .es-footer-body ol li,
            .es-footer-body a {
                font-size: 14px !important
            }

            .es-infoblock p,
            .es-infoblock ul li,
            .es-infoblock ol li,
            .es-infoblock a {
                font-size: 14px !important
            }

            *[class="gmail-fix"] {
                display: none !important
            }

            .es-m-txt-c,
            .es-m-txt-c h1,
            .es-m-txt-c h2,
            .es-m-txt-c h3 {
                text-align: center !important
            }

            .es-m-txt-r,
            .es-m-txt-r h1,
            .es-m-txt-r h2,
            .es-m-txt-r h3 {
                text-align: right !important
            }

            .es-m-txt-l,
            .es-m-txt-l h1,
            .es-m-txt-l h2,
            .es-m-txt-l h3 {
                text-align: left !important
            }

            .es-m-txt-r img,
            .es-m-txt-c img,
            .es-m-txt-l img {
                display: inline !important
            }

            .es-button-border {
                display: inline-block !important
            }

            a.es-button,
            button.es-button {
                font-size: 14px !important;
                display: inline-block !important
            }

            .es-btn-fw {
                border-width: 10px 0px !important;
                text-align: center !important
            }

            .es-adaptive table,
            .es-btn-fw,
            .es-btn-fw-brdr,
            .es-left,
            .es-right {
                width: 100% !important
            }

            .es-content table,
            .es-header table,
            .es-footer table,
            .es-content,
            .es-footer,
            .es-header {
                width: 100% !important;
                max-width: 600px !important
            }

            .es-adapt-td {
                display: block !important;
                width: 100% !important
            }

            .adapt-img {
                width: 100% !important;
                height: auto !important
            }

            .es-m-p0 {
                padding: 0px !important
            }

            .es-m-p0r {
                padding-right: 0px !important
            }

            .es-m-p0l {
                padding-left: 0px !important
            }

            .es-m-p0t {
                padding-top: 0px !important
            }

            .es-m-p0b {
                padding-bottom: 0 !important
            }

            .es-m-p20b {
                padding-bottom: 20px !important
            }

            .es-mobile-hidden,
            .es-hidden {
                display: none !important
            }

            tr.es-desk-hidden,
            td.es-desk-hidden,
            table.es-desk-hidden {
                width: auto !important;
                overflow: visible !important;
                float: none !important;
                max-height: inherit !important;
                line-height: inherit !important
            }

            tr.es-desk-hidden {
                display: table-row !important
            }

            table.es-desk-hidden {
                display: table !important
            }

            td.es-desk-menu-hidden {
                display: table-cell !important
            }

            table.es-table-not-adapt,
            .esd-block-html table {
                width: auto !important
            }

            table.es-social {
                display: inline-block !important
            }

            table.es-social td {
                display: inline-block !important
            }
        }
    </style>
</head>

<body
    style="width:100%;font-family:'Open Sans', sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0">
    <div class="es-wrapper-color" style="background-color:#EFF2F7">
        <!--[if gte mso 9]>
			<v:background xmlns:v="urn:schemas-microsoft-com:vml" fill="t">
				<v:fill type="tile" color="#eff2f7"></v:fill>
			</v:background>
		<![endif]-->
        <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0"
            style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;padding:0;Margin:0;width:100%;height:100%;background-repeat:repeat;background-position:center top">
            <tr style="border-collapse:collapse">
                <td valign="top" style="padding:0;Margin:0">
                    <table class="es-header" cellspacing="0" cellpadding="0" align="center"
                        style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:#0050D8;background-repeat:repeat;background-position:center top">
                        <tr style="border-collapse:collapse">
                            <td align="center" bgcolor="transparent"
                                style="padding:0;Margin:0;background-color:transparent">
                                <table class="es-header-body" cellspacing="0" cellpadding="0" bgcolor="#0c66ff"
                                    align="center"
                                    style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#0C66FF;width:600px">
                                    <tr style="border-collapse:collapse">
                                        <td align="left"
                                            style="Margin:0;padding-left:15px;padding-right:15px;padding-top:20px;padding-bottom:20px">
                                            <table cellspacing="0" cellpadding="0" width="100%"
                                                style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                <tr style="border-collapse:collapse">
                                                    <td class="es-m-p0r" valign="top" align="center"
                                                        style="padding:0;Margin:0;width:570px">
                                                        <table width="100%" cellspacing="0" cellpadding="0"
                                                            role="presentation"
                                                            style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                            <tr style="border-collapse:collapse">
                                                                <td align="center" class="es-m-txt-c"
                                                                    style="padding:0;Margin:0;font-size:0px"><a
                                                                        target="_blank" href="https://viewstripo.email/"
                                                                        style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:none;color:#FFFFFF;font-size:12px"><img
                                                                            src="https://pbielv.stripocdn.email/content/guids/CABINET_4504a8f92b82d826086eb5ab7f0b2e92/images/90031594206937727.png"
                                                                            alt
                                                                            style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic"
                                                                            width="150"></a></td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr style="border-collapse:collapse">
                                        <td align="left" bgcolor="#ffffff"
                                            style="Margin:0;padding-left:15px;padding-right:15px;padding-top:30px;padding-bottom:30px;background-color:#FFFFFF">
                                            <!--[if mso]><table style="width:570px" cellpadding="0" cellspacing="0"><tr><td style="width:320px" valign="top"><![endif]-->
                                            <table cellpadding="0" cellspacing="0" class="es-left" align="left"
                                                style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left">
                                                <tr style="border-collapse:collapse">
                                                    <td align="left" style="padding:0;Margin:0;width:320px">
                                                        <table cellpadding="0" cellspacing="0" width="100%"
                                                            role="presentation"
                                                            style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                            <tr style="border-collapse:collapse">
                                                                <td align="center"
                                                                    style="padding:0;Margin:0;font-size:0px"><img
                                                                        class="adapt-img"
                                                                        src="https://pbielv.stripocdn.email/content/guids/CABINET_4504a8f92b82d826086eb5ab7f0b2e92/images/26731594205492106.png"
                                                                        alt
                                                                        style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic"
                                                                        width="320"></td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                            <table cellpadding="0" cellspacing="0" class="es-right" align="right"
                                                style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:right">
                                                <tr style="border-collapse:collapse">
                                                    <td align="left" style="padding:0;Margin:0;width:230px">
                                                        <table cellpadding="0" cellspacing="0" width="100%"
                                                            role="presentation"
                                                            style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                            <tr class="es-mobile-hidden"
                                                                style="border-collapse:collapse">
                                                                <td align="center" height="40"
                                                                    style="padding:0;Margin:0"></td>
                                                            </tr>
                                                            <tr style="border-collapse:collapse">
                                                                <td align="left" style="padding:0;Margin:0">
                                                                    <h3 style="Margin:0;line-height:19px;mso-line-height-rule:exactly;font-family:roboto, 'helvetica neue', helvetica, arial, sans-serif;font-size:16px;font-style:normal;font-weight:bold;color:#888888;letter-spacing:0px">{{ $title }}</h3>
                                                                </td>
                                                            </tr>
                                                            <tr style="border-collapse:collapse">
                                                                <td align="left" style="padding:0;Margin:0">
                                                                    <h1 style="Margin:0;line-height:31px;mso-line-height-rule:exactly;font-family:roboto, 'helvetica neue', helvetica, arial, sans-serif;font-size:26px;font-style:normal;font-weight:bold;color:#3C4858"> {{$user->name}} {{$user->last_name}}</h1>
                                                                </td>
                                                            </tr>
                                                            <tr style="border-collapse:collapse">
                                                                <td align="left" style="padding:0;Margin:0;padding-top:10px">
                                                                    <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'Open Sans', sans-serif;line-height:18px;color:#8492A6;font-size:12px"><span
                                                                            style="font-size:14px">{{ $content }}</span><span
                                                                            data-cke-bookmark="1"
                                                                            style="display:none">&nbsp;</span></p>
                                                                </td>
                                                            </tr>
                                                            <tr style="border-collapse:collapse">
                                                                <td align="left" class="es-m-txt-l"
                                                                    style="padding:0;Margin:0;padding-top:20px;padding-bottom:20px"><span
                                                                        class="msohide es-button-border"
                                                                        style="border-style:solid;border-color:#0C66FF;background:#0C66FF;border-width:0px;display:inline-block;border-radius:8px;width:auto;mso-hide:all"><a
                                                                            href="{{ Request::fullUrl() }}"
                                                                            class="es-button" target="_blank" style="mso-style-priority:100 !important;text-decoration:none;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;color:#FFFFFF;font-size:14px;border-style:solid;border-color:#0C66FF;border-width:15px 30px 15px 30px;display:inline-block;background:#0C66FF;border-radius:8px;font-family:'Open Sans', sans-serif;font-weight:bold;font-style:normal;line-height:17px;width:auto;text-align:center">INGRESAR</a></span>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                    <table cellpadding="0" cellspacing="0" class="es-content" align="center"
                        style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%">
                        <tr style="border-collapse:collapse">
                            <td align="center" bgcolor="#52d8a3" style="padding:0;Margin:0;background-color:#52D8A3">
                                <table bgcolor="#2dca8c" class="es-content-body" align="center" cellpadding="0"
                                    cellspacing="0"
                                    style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#2DCA8C;width:600px">
                                    <tr style="border-collapse:collapse">
                                        <td align="left" style="padding:0;Margin:0;padding-left:5px;padding-right:5px">
                                            <!--[if mso]><table style="width:590px" cellpadding="0" cellspacing="0"><tr><td style="width:199px" valign="top"><![endif]-->
                                            <table cellpadding="0" cellspacing="0" class="es-left" align="left"
                                                style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left">
                                                <tr style="border-collapse:collapse">
                                                    <td align="left" class="es-m-p20b"
                                                        style="padding:0;Margin:0;width:194px">
                                                        <table cellpadding="0" cellspacing="0" width="100%"
                                                            role="presentation"
                                                            style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                            <tr style="border-collapse:collapse">
                                                                <td align="center"
                                                                    style="padding:0;Margin:0;padding-bottom:20px;padding-top:40px;font-size:0">
                                                                    <img src="https://pbielv.stripocdn.email/content/guids/CABINET_4504a8f92b82d826086eb5ab7f0b2e92/images/21671573466877223.png"
                                                                        alt
                                                                        style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic"
                                                                        width="64"></td>
                                                            </tr>
                                                            <tr style="border-collapse:collapse">
                                                                <td align="center" class="es-m-txt-c"
                                                                    style="padding:0;Margin:0;padding-bottom:40px">
                                                                    <h2
                                                                        style="Margin:0;line-height:22px;mso-line-height-rule:exactly;font-family:roboto, 'helvetica neue', helvetica, arial, sans-serif;font-size:18px;font-style:normal;font-weight:normal;color:#FFFFFF">
                                                                        ...</h2>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                    <td class="es-hidden" style="padding:0;Margin:0;width:5px"></td>
                                                </tr>
                                            </table>
                                            <!--[if mso]></td><td style="width:193px" valign="top"><![endif]-->
                                            <table cellpadding="0" cellspacing="0" class="es-left" align="left"
                                                style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left">
                                                <tr style="border-collapse:collapse">
                                                    <td align="left" class="es-m-p20b"
                                                        style="padding:0;Margin:0;width:193px">
                                                        <table cellpadding="0" cellspacing="0" width="100%"
                                                            bgcolor="#24a06f"
                                                            style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#24A06F"
                                                            role="presentation">
                                                            <tr style="border-collapse:collapse">
                                                                <td align="center"
                                                                    style="padding:0;Margin:0;padding-bottom:20px;padding-top:40px;font-size:0">
                                                                    <img src="https://pbielv.stripocdn.email/content/guids/CABINET_4504a8f92b82d826086eb5ab7f0b2e92/images/87151573466611596.png"
                                                                        alt
                                                                        style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic"
                                                                        width="64"></td>
                                                            </tr>
                                                            <tr style="border-collapse:collapse">
                                                                <td align="center" class="es-m-txt-c"
                                                                    style="padding:0;Margin:0;padding-bottom:40px">
                                                                    <h2
                                                                        style="Margin:0;line-height:22px;mso-line-height-rule:exactly;font-family:roboto, 'helvetica neue', helvetica, arial, sans-serif;font-size:18px;font-style:normal;font-weight:normal;color:#FFFFFF">
                                                                        ...</h2>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                            <!--[if mso]></td><td style="width:5px"></td><td style="width:193px" valign="top"><![endif]-->
                                            <table cellpadding="0" cellspacing="0" class="es-right" align="right"
                                                style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:right">
                                                <tr style="border-collapse:collapse">
                                                    <td align="left" class="es-m-p20b"
                                                        style="padding:0;Margin:0;width:193px">
                                                        <table cellpadding="0" cellspacing="0" width="100%"
                                                            role="presentation"
                                                            style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                            <tr style="border-collapse:collapse">
                                                                <td align="center"
                                                                    style="padding:0;Margin:0;padding-bottom:20px;padding-top:40px;font-size:0">
                                                                    <img src="https://pbielv.stripocdn.email/content/guids/CABINET_4504a8f92b82d826086eb5ab7f0b2e92/images/63821573466764525.png"
                                                                        alt
                                                                        style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic"
                                                                        width="64"></td>
                                                            </tr>
                                                            <tr style="border-collapse:collapse">
                                                                <td align="center" class="es-m-txt-c"
                                                                    style="padding:0;Margin:0;padding-bottom:40px">
                                                                    <h2
                                                                        style="Margin:0;line-height:22px;mso-line-height-rule:exactly;font-family:roboto, 'helvetica neue', helvetica, arial, sans-serif;font-size:18px;font-style:normal;font-weight:normal;color:#FFFFFF">
                                                                        ...</h2>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                            <!--[if mso]></td></tr></table><![endif]-->
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                    <table class="es-footer" cellspacing="0" cellpadding="0" align="center"
                        style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:#141B24;background-repeat:repeat;background-position:center top">
                        <tr style="border-collapse:collapse">
                            <td align="center" style="padding:0;Margin:0">
                                <table class="es-footer-body" cellspacing="0" cellpadding="0" bgcolor="#ffffff"
                                    align="center"
                                    style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#273444;width:600px">
                                    <tr style="border-collapse:collapse">
                                        <td align="left"
                                            style="Margin:0;padding-left:15px;padding-right:15px;padding-top:40px;padding-bottom:40px">
                                            <!--[if mso]><table style="width:570px" cellpadding="0"
                        cellspacing="0"><tr><td style="width:180px" valign="top"><![endif]-->
                                            <table class="es-left" cellspacing="0" cellpadding="0" align="left"
                                                style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left">
                                                <tr style="border-collapse:collapse">
                                                    <td class="es-m-p20b" align="left"
                                                        style="padding:0;Margin:0;width:180px">
                                                        <table width="100%" cellspacing="0" cellpadding="0"
                                                            role="presentation"
                                                            style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                            <tr style="border-collapse:collapse">
                                                                <td align="center" class="es-m-txt-c"
                                                                    style="padding:0;Margin:0;font-size:0px"><a
                                                                        target="_blank" href="https://viewstripo.email/"
                                                                        style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:none;color:#FFFFFF;font-size:12px"><img
                                                                            src="https://pbielv.stripocdn.email/content/guids/CABINET_4504a8f92b82d826086eb5ab7f0b2e92/images/76471594206948666.png"
                                                                            alt
                                                                            style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic"
                                                                            width="150"></a></td>
                                                            </tr>
                                                            <tr style="border-collapse:collapse">
                                                                <td align="center" class="es-m-txt-c"
                                                                    style="padding:0;Margin:0;padding-top:20px;font-size:0">
                                                                    <table cellpadding="0" cellspacing="0"
                                                                        class="es-table-not-adapt es-social"
                                                                        role="presentation"
                                                                        style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                                        <tr style="border-collapse:collapse">
                                                                            <td align="center" valign="top"
                                                                                style="padding:0;Margin:0;padding-right:10px">
                                                                                <img src="https://pbielv.stripocdn.email/content/assets/img/social-icons/logo-white/facebook-logo-white.png"
                                                                                    alt="Fb" title="Facebook" width="32"
                                                                                    style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic">
                                                                            </td>
                                                                            <td align="center" valign="top"
                                                                                style="padding:0;Margin:0;padding-right:10px">
                                                                                <img src="https://pbielv.stripocdn.email/content/assets/img/social-icons/logo-white/youtube-logo-white.png"
                                                                                    alt="Yt" title="Youtube" width="32"
                                                                                    style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic">
                                                                            </td>
                                                                            <td align="center" valign="top"
                                                                                style="padding:0;Margin:0"><img
                                                                                    src="https://pbielv.stripocdn.email/content/assets/img/social-icons/logo-white/instagram-logo-white.png"
                                                                                    alt="Ig" title="Instagram"
                                                                                    width="32"
                                                                                    style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic">
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                            <!--[if mso]></td><td style="width:20px"></td><td style="width:370px" valign="top"><![endif]-->
                                            <table class="es-right" cellspacing="0" cellpadding="0" align="right"
                                                style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:right">
                                                <tr style="border-collapse:collapse">
                                                    <td align="left" style="padding:0;Margin:0;width:370px">
                                                        <table width="100%" cellspacing="0" cellpadding="0"
                                                            role="presentation"
                                                            style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                            <tr style="border-collapse:collapse">
                                                                <td align="left" class="es-m-txt-c"
                                                                    style="padding:0;Margin:0;padding-top:20px;padding-bottom:20px">
                                                                    <p
                                                                        style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'Open Sans', sans-serif;line-height:18px;color:#8492A6;font-size:12px">
                                                                        Lorem Ipsum is simply dummy text of the printing
                                                                        and typesetting industry. Lorem Ipsum has been
                                                                        the industry's standard dummy text ever since
                                                                        the 1500s.</p>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                            <!--[if mso]></td></tr></table><![endif]-->
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>
