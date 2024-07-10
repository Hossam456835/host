<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.png">
    <title>Servers Status - Web Hosting & WHMCS Template</title>

    <!-- bootstrap css -->
    <link rel="stylesheet preload" href="assets/css/vendor/bootstrap.min.css" as="style">
    <!-- fontawesome css -->
    <link rel="stylesheet preload" href="assets/css/plugins/fontawesome.min.css" as="style">
    <!-- swiper css -->
    <link rel="stylesheet preload" href="assets/css/plugins/swiper.min.css" as="style">
    <!-- magnific popup css -->
    <link rel="stylesheet preload" href="assets/css/plugins/magnific-popup.css" as="style">
    <!-- aos css -->
    <!-- <link  rel="stylesheet preload" href="assets/css/plugins/aos.min.css" as="style"> -->
    <link rel="stylesheet preload" href="assets/css/plugins/sal.min.css" as="style">
    <!-- nice select css -->
    <link rel="stylesheet preload" href="assets/css/plugins/nice-select.css" as="style">
    <!-- metismenu css -->
    <link rel="stylesheet preload" href="assets/css/plugins/metismenu.css" as="style">
    <!-- Custom css -->
    <link rel="stylesheet preload" href="assets/css/style.css" as="style">
    <style>
        table.supertable {
            margin-bottom: 0;
        }
    
        .affected {
            font-size: 1.3rem;
            margin-bottom: 2rem;
        }
    
        .affected span {
            margin-right: 5px;
            padding: 3px 6px;
            background: #333;
            border-radius: 2px;
            color: #fff;
            font-size: 1.2rem;
            font-weight: 500;
        }
    
    
        .oranges {
            color: #ff981d !important;
        }
    
        .yellow {
            color: #f9d300 !important;
        }
    
        i.fa.fa-cloud.fa-fw.specialalign {
            font-size: 0.9rem;
            position: absolute;
            top: 0px;
            width: 100%;
            color: #333; //979797;
            text-align: center;
            left: 0;
            right: 0;
        }
    
        .show-ir-container {
            position: relative;
        }
    
        .show-ir-container .fa-cloud {
            top: -5px !important;
        }
    
    
        .box {
            padding: 5rem 1rem;
            margin: auto;
            max-width: 760px;
        }
    
        .monitor td {
            background: #FFF;
        }
    
        .monitor {
            padding: 2rem;
            margin-bottom: 1rem;
            border-radius: 3px;
            border: 1px solid #eee;
        }
    
        .orange:before {
            background: orange;
        }
    
        .overview > div:before {
            width: 2rem;
            height: 2rem;
            content: '';
            float: left;
            display: inline-block;
            border-radius: 10px;
            vertical-align: middle;
            margin-top: 16px;
            margin-left: 1rem;
            margin-right: 2rem;
        }
    
    
        .unresolved {
            background: #eee;
    	margin-bottom:1rem;     
       padding: .5rem 1rem;
        }
    
    
        .nomobile {
            display: none;
        }
    
        @media only screen and (min-width: 500px) {
    
            .nomobile {
                display: table-cell;
            }
    
            .overview > div:before {
                width: 2rem;
                height: 2rem;
                content: '';
                float: left;
                display: inline-block;
                border-radius: 10px;
                vertical-align: middle;
                margin-top: 4px;
                margin-left: 0;
                margin-right: 2rem;
            }
    
            .monitor {
                padding: 2rem;
                background: #FFF;
                margin-bottom: 1rem;
                border-radius: 3px;
                border: 1px solid #eee;
            }
    
            .box {
                padding: 5rem 5rem;
                margin: auto;
                max-width: 760px;
            }
        }
    
        .supertable th, .supertable td {
        }
    
        .monitor strong {
    
            line-height: 2.5rem;
        }
    
        .uptime-pct {
            float: right;
            font-weight: 400;
            color: #666;
            font-size: 1.3rem;
        }
    
        .online:before {
            background: #3dc151 !important;
        }
    
        .offline:before {
            background: #ff513c !important;
        }
    
        .monitor-title {
            font-weight: 500;
        }
    
        .monitor-title:before {
            content: '';
            width: 7px;
            display: inline-block;
            background: #333;
            border-radius: 10px;
            margin-right: 4px;
            vertical-align: middle;
            line-height: 2.5rem;
            height: 7px;
        }
    
        .monitor .footer {
            font-weight: 300;
            font-size: 1.2rem !important;
            color: #999;
            margin-top: 1rem;
            padding-top: 1rem;
            margin-bottom: -.5rem;
            margin-left: -2rem;
            margin-right: -2rem;
            padding-right: 2rem;
            padding-left: 2rem;
            border-top: 1px solid #f1f1f1;
        }
    
        .monitor .footer strong {
            font-weight: 500;
            color: #666;
        }
    
        .box h1 {
            font-size: 1.8rem;
            font-weight: 400;
        }
    
        .overview {
            padding: 2rem;
            background: #fff;
            margin-bottom: 2rem;
            border: 1px solid #eee;
            border-radius: 3px;
            font-size: 2rem;
            font-weight: 300;
        }
    
        .overview .green:before {
            background: #3dc151;
        }
    
        .overview .red:before {
            background: #333; //ff513c;
        }
    
        .overview small {
            display: block;
            margin-left: 5rem;
            font-size: 1.3rem;
            color: #666;
        }
    
        strong {
            font-weight: 500;
        }
    
        .powered-by {
            float: right;
            font-size: 1.4rem;
            margin-right: 1rem
        }
    
        .powered-by img {
            width: 63px;
        }
    
        .logo {
            text-align: center;
            margin-bottom: 4rem;
        }
    
        .logo img {
            max-height: 100px;
            max-width: 600px;
        }
    
        .graph {
            margin-left: -2rem;
            margin-top: -1rem;
            margin-right: -2rem;
            margin-bottom: -10px;
        }
    
        .bar {
            display: block;
            height: 8px;
            overflow: hidden;
            margin-top: 2px;
            border-radius: 2px;
            background: #f1f1f1;
            /*width: 25%;*/
        }
    
        .bars > span {
            font-weight: 500;
            color: #333;
            font-size: 1.1rem;
        }
    
        .pct-used {
            background: #3ece9f;
            height: 8px;
        }
    
        .bars > div {
            float: left;
            box-sizing: border-box;
            width: 25%;
            padding-left: 2rem;
        }
    
    
        .bars div:first-child {
            padding-left: 0 !important;
        }
    
        .bars > div > span {
            text-transform: uppercase;
            font-weight: 500;
            font-size: 1.1rem;
        }
    
        .seperator {
            margin-top: 3rem;
            font-weight: 500;
            background: #eee;
            padding: 1rem;
            margin-bottom: 1rem;
            border-radius: 4px;
        }
    
        table.supertable {
            width: 100%;
            border: none;
        }
    
        table.supertable tr, table.supertable th, table.supertable td {
            border: none;
            padding: .5rem 1rem;
            font-size: 1.35rem;
        }
    
        table.supertable tr th {
            font-size: 1.1rem;
            text-transform: uppercase;
            text-align: center;
        }
    
        tr.sep td {
            padding: 0;
        }
    
    
        .uptime {
            text-align: right;
        }
    
        .date {
            font-size: 0rem;
            padding: 0px;
            background: rgba(89, 214, 135, 0.75);
            margin: 6px 1px 6px 1px;
            display: inline-block;
            width: 12px;
            border-radius: 10px;
            text-align: center;
            height: 12px;
        }
    
        table.calendar_table_small tr td {
            width: 14.2857%;
            margin: 0;
            line-height: 19px;
            text-align: center;
        }
    
        table.calendar_table_small tr th {
            font-size: 1rem;
            text-align: center;
            font-weight: 500;
            color: #999;
            text-transform: uppercase;
        }
    
        .outside-range .date {
            background: #aaa;
            opacity: .25;
        }
    
        table.calendar_table_small {
            width: 32%;
            float: left;
            margin-right: 2%;
        }
    
        .cals .calendar_table_small:nth-child(3n) {
            margin-right: 0;
        }
    
        .calendar_table_small tr th.month_name .pull-right {
            color: #666;
            font-size: 1.2rem;
            font-weight: 400;
        }
    
        .calendar_table_small tr th.month_name {
            text-align: left;
            padding: 0.7rem;
            color: #333;
            font-size: 1.2rem;
        }
    
        .uptime {
            display: none;
        }
    
        .lessthan100 .date {
            background: rgb(249, 110, 110);
        }
    
        .future-range .date {
            background: #aaa;
            opacity: .25;
        }
    
        .today-date .date {
            box-shadow: 0px 0px 0px 1px #fff;
            border: 1px solid rgba(0, 0, 0, 0.55);
            height: 11px;
            width: 11px;
        }
    
        .tooltipster-content {
            text-align: center;
            line-height: 2rem !important;
            font-size: 1.3rem !important;
        }
    
        i.fa.red {
    //        background: #fff; //#ec4444;
            padding: 4px 2px;
            color: #333;
            border-radius: 3px;
        }
    
        i.fa.green {
            padding: 4px 2px;
            color: #2daf2d;
        }
    
        .day {
            text-align: center;
        }
    
        .day {
            font-size: 1.3rem;
        }
    
        i.fa.fa-fire.red.fa-fw {
            background: #ff981d;
            box-shadow: inset 0px -10px 0px rgba(0, 0, 0, 0.02);
        }
    
        tfoot th {
            text-align: left !important;
        }
    
        tfoot span {
            margin-right: 1.5rem;
        }
    
        tfoot span small {
            color: #555;
            font-weight: 500;
        }
    
        tfoot tr th {
            padding-top: 1rem !important;
        }
    
        .day {
            position: relative;
        }
    
        h2 {
            font-size: 2.5rem;
        }
    
        h4 {
            font-size: 1.7rem;
            font-weight: 300;
            color: #aaa;
        }
    
        .incident h5 {
            font-size: 2rem;
            font-weight: 400;
            margin-bottom: 1rem;
        }
    
        .incident-left {
            float: left;
            font-size: 1.25rem;
            font-weight: 500;
            text-transform: uppercase;
            vertical-align: middle;
            color: #666;
            padding-top: 2px;
        }
    
        .incident-right {
            margin-left: 10rem;
            font-size: 1.45rem;
        }
    
        .ic-footer {
            color: #aaa;
            font-size: 1.25rem;
        }
    
        .ic-row {
            margin-bottom: 2rem;
        }
    
        .ic-row p {
            margin: 0;
        }
    
        p.empty-ic {
            font-size: 1.3rem;
            margin-top: -2rem;
            color: #bbb;
            font-weight: 300;
        }
    
        .seperator {
            overflow: auto;
        }
    </style>
    <style>
        body {
            }
    
        body {
        color: #adadad;
        background: #0D034A !important;
        background-image: url(assets/images/support-map.png) !important;
        background-position: center !important;
        background-size: contain !important;
    }
    
    .box h1 {
        font-size: 1.8rem;
        font-weight: 400;
        padding: 0 20px;
        margin: 0 0 10px 0;
    }
    
    .logo img {
        max-width: 100%!important;
    }
    
    
    
    .overview {
        background: #ECF2FE;
        border: 1px solid #ECF2FE;
        color: #000;
    }
    .overview small {
        color: #000;
    }
    
    
    table.supertable tr th {
        font-size: 1.4rem !important;
        text-align: center !important;
        line-height: 3rem !important;
        font-weight: 500 !important;
        letter-spacing: 2px !important;
    }
    
    
    
    
    
    .monitor td {
       padding: 10px 12px !important;
    }
    .monitor td h3{margin-bottom: 0px;font-size:18px;color:#0D034A;   margin-left: 30px;}
    .monitor td .btn{
        background: #b9ffa1;
        color: #1ca300;
       padding: 5px;
       font-size: 12px;
        font-weight: 600;
            border-radius: 15px;
    }
    
    .column.monitor {
        background: transparent !important;
    }
    .monitor-title {
        font-weight: 300 !important;
        padding: 20px 0px 20px 0;
        letter-spacing: 0.4px;
    }
    .monitor-title:before {
        margin-right: 10px;
        width: 12px;
    }
    
    
    tfoot tr th {
        padding-top: 3rem !important;
    }
    
    /*p {
        font-family: arial !important;
    }*/
    
    tfoot span small {
        color: #9f9f9f;
        font-size: 1.1rem;
        letter-spacing: 2.2px !important;
        font-weight: 400 !important;
        /* text-align: left !important; */
    }
    .fa {
        display: inline-block;
        font-size: 1rem !important;
        margin: 0 3px 0 0px !important;
    }
    i.fa.red {
        border-radius: 2px !important;
        color: #7d7d7d !important;
    }
    .monitors tr.monitor .fa {
        font-size: 1.6rem !important;
    }
    
    
    table.supertable.item-list-table tbody, .overview, .incident {
        box-shadow: 0 0 2px rgb(0 0 0 / 30%), 0 20px 55px rgb(0 0 0 / 38%);
    }
    table.supertable.item-list-table{
        border-collapse: separate;
        border-spacing: 0 1em;
    }
    
    .incident {
        background: #3a3a3a !important;
        padding: 20px 20px !important;
        border-radius: 5px !important;
        margin-bottom: 30px !important;
        color: #a7a7a7;
    }
    .incident h5 {
        font-weight: 400;
        border: 1px solid #4f5d63;
        padding: 10px 20px;
        border-radius: 4px;
        background: #39454a;
        color: #8099a5;
        letter-spacing: 0.4px;
    }
    .incident-right {
        border: 1px solid #535353;
        padding: 20px;
        border-radius: 5px;
    }
    .incident-right:hover {
        background: rgba(221, 221, 221, 0.05);
    }
    .incident-right p {
        padding: 7px 0;
        font-weight: 300 !important;
        letter-spacing: 0.5px;
    }
    
    .affected {
        margin: 2rem 0;
    }
    .affected span {
        margin: 10px;
        padding: 4px 9px;
        background: #262626;
        border-radius: 3px;
        color: #2cbe2c;
        font-size: 1.5rem;
        font-weight: 500;
    }
    
    h2 {
        margin-top: 30px !important;
    }
    
    .seperator {
        font-size: 1.7rem !important;
        background: #ECF2FE;
        font-weight: 400 !important;
            color: #000;
    }
    
    
    
    
    .ic-footer {
        background: #4c4c4c !important;
        padding: 10px 15px;
        margin: 20px 0 0;
        border-radius: 3px;
        color: #8e8e8e !important;
        font-weight: 300;
    }
    
    tr.monitor td:first-child { border-top-left-radius: 10px; border-bottom-left-radius: 10px;}
    tr.monitor td:last-child { border-top-right-radius: 10px; border-bottom-right-radius: 10px; text-align:right; }
    tr.monitor td svg {
        width: 20px;
        height: 20px;
        flex: 0 0 auto;
        float: left;
    }
    
   .section-timeline .timeline .content-wrapper {
        margin-top: 40px;
        margin-bottom: 40px;
    }
    .section-timeline .panel-message{
        box-shadow: 0 2px 20px rgb(0 0 0 / 5%);
    border: none;
        background-color: #ffffff;
        margin-bottom: 20px;
            border-radius: 3px;
            color: #333333;
    }
    .section-timeline .panel-body {
        padding: 15px;
    }
    .section-timeline .panel-body:after, .section-timeline .panel-body:before {
    display: table;
    content: " ";
}
.section-timeline .panel-body:after {
    clear: both;
}
.section-timeline .incident-empty-wrapper {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    align-items: center;
}
.section-timeline  .incident-empty-wrapper > * {
    margin: 10px 0px !important;
}
.section-timeline .incident-empty-wrapper .incident-date{
        color: #1b69ff;
    font-weight: 500;
    display: flex;
    align-items: center;
        margin-bottom: 10px !important;
            font-size: 1.4em;
}
    .section-timeline .incident-date::before,.section-timeline .incident-head-wrapper .incident-title:before {
    content: " ";
    background-image: url("data:image/svg+xml,%3Csvg id='Layer_1' data-name='Layer 1' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill:none;stroke:%231B69FF;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5px;%7D%3C/style%3E%3C/defs%3E%3Cg id='Iconly_Light_Calendar' data-name='Iconly Light Calendar'%3E%3Cg id='Calendar-4'%3E%3Cpath id='Line_200' data-name='Line 200' class='cls-1' d='M3.31,9H21.13'/%3E%3Cpath id='Line_201' data-name='Line 201' class='cls-1' d='M16.66,12.86h0'/%3E%3Cpath id='Line_202' data-name='Line 202' class='cls-1' d='M12.22,12.86h0'/%3E%3Cpath id='Line_203' data-name='Line 203' class='cls-1' d='M7.78,12.86h0'/%3E%3Cpath id='Line_204' data-name='Line 204' class='cls-1' d='M16.66,16.75h0'/%3E%3Cpath id='Line_205' data-name='Line 205' class='cls-1' d='M12.22,16.75h0'/%3E%3Cpath id='Line_206' data-name='Line 206' class='cls-1' d='M7.78,16.75h0'/%3E%3Cpath id='Line_207' data-name='Line 207' class='cls-1' d='M16.26,1.55V4.84'/%3E%3Cpath id='Line_208' data-name='Line 208' class='cls-1' d='M8.18,1.55V4.84'/%3E%3Cpath id='Path-15' class='cls-1' d='M16.46,3.13H8c-2.94,0-4.77,1.64-4.77,4.64v9.05c0,3.06,1.83,4.73,4.77,4.73h8.46c2.94,0,4.77-1.64,4.77-4.65V7.77C21.23,4.77,19.4,3.13,16.46,3.13Z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
    display: inline-block;
    height: 18px;
    min-width: 18px;
    margin-right: 12px;
    color: #1b69ff;
}
.section-timeline .incident-empty-wrapper p {
    background-color: #f3f3f3;
    padding: 4px 12px;
    border-radius: 10px;
    cursor: default;
}
    </style>
</head>

<body>
    <div class="servers-status-page">
        <div class="row">
            <div class="box">
                <div class="monitors">
                    <div class="logo text-center">
                        <img src="assets/images/web-solutions.png">
                    </div>
                    <div class="row">
                        <div class="column" style="margin-bottom:2rem">
                        </div>
                    </div>
                    <div class="overview">
                        <div class="green">All services are online.</div>
                    </div>
                    <table class="supertable">
                        <tbody>
                            <tr class="sep">
                                <td colspan="9">
                                    <div class="seperator">HOSTING SERVERS</div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="supertable item-list-table">
                        <tbody>
                            <tr class="monitor">
                                <td>
                                    <svg enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                        <path d="m15.923 345.043c36.171 97.484 130.006 166.957 240.077 166.957s203.906-69.473 240.077-166.957l-240.077-22.26z" fill="#ffda44"></path>
                                        <path d="m256 0c-110.071 0-203.906 69.472-240.077 166.957l240.077 22.26 240.077-22.261c-36.171-97.484-130.006-166.956-240.077-166.956z"></path>
                                        <path d="m15.923 166.957c-10.29 27.733-15.923 57.729-15.923 89.043s5.633 61.31 15.923 89.043h480.155c10.29-27.733 15.922-57.729 15.922-89.043s-5.632-61.31-15.923-89.043z" fill="#d80027"></path>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                    </svg>
                                    <h3>Germany  panel  (Frankfurt)</h3></td>
                                <td>
                                    <div class="btn" title="last update three minutes and 38 seconds ago">Working now</div>
                                </td>
                            </tr>
                            <tr class="monitor">
                                <td>
                                    <svg enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                        <path d="m15.923 345.043c36.171 97.484 130.006 166.957 240.077 166.957s203.906-69.473 240.077-166.957l-240.077-22.26z" fill="#ffda44"></path>
                                        <path d="m256 0c-110.071 0-203.906 69.472-240.077 166.957l240.077 22.26 240.077-22.261c-36.171-97.484-130.006-166.956-240.077-166.956z"></path>
                                        <path d="m15.923 166.957c-10.29 27.733-15.923 57.729-15.923 89.043s5.633 61.31 15.923 89.043h480.155c10.29-27.733 15.922-57.729 15.922-89.043s-5.632-61.31-15.923-89.043z" fill="#d80027"></path>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                    </svg>
                                    <h3>Germany panel2 (Frankfurt)</h3></td>
                                <td>
                                    <div class="btn" title="last update three minutes and 38 seconds ago">Working now</div>
                                </td>
                            </tr>
                            <tr class="monitor">
                                <td>
                                    <svg enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="256" cy="256" fill="#f0f0f0" r="256"></circle>
                                <path d="m509.833 222.609h-309.484-.001v-216.524c-23.658 5.246-46.087 13.749-66.783 25.042v191.48.001h-131.398c-1.425 10.931-2.167 22.075-2.167 33.392s.742 22.461 2.167 33.391h131.397.001v191.481c20.696 11.292 43.125 19.797 66.783 25.042v-216.52-.002h309.485c1.423-10.931 2.167-22.075 2.167-33.392s-.744-22.461-2.167-33.391z" fill="#0052b4"></path>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                            </svg>
                                    <h3>Finland panel3 (Helenki)</h3></td>
                                <td>
                                    <div class="btn" title="last update three minutes and 38 seconds ago">Working now</div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="supertable">
                        <tbody>
                            <tr class="sep">
                                <td colspan="9">
                                    <div class="seperator">PRIVATE SERVERS</div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="supertable item-list-table">
                        <tbody>
                            <tr class="monitor">
                                <td>
                                    <svg enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                <path d="m15.923 345.043c36.171 97.484 130.006 166.957 240.077 166.957s203.906-69.473 240.077-166.957l-240.077-22.26z" fill="#ffda44"></path>
                                <path d="m256 0c-110.071 0-203.906 69.472-240.077 166.957l240.077 22.26 240.077-22.261c-36.171-97.484-130.006-166.956-240.077-166.956z"></path>
                                <path d="m15.923 166.957c-10.29 27.733-15.923 57.729-15.923 89.043s5.633 61.31 15.923 89.043h480.155c10.29-27.733 15.922-57.729 15.922-89.043s-5.632-61.31-15.923-89.043z" fill="#d80027"></path>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                            </svg>
                                    <h3>Germany M1</h3></td>
                                <td>
                                    <div class="btn" title="last update three minutes and 38 seconds ago">Working now</div>
                                </td>
                            </tr>
                            <tr class="monitor">
                                <td>
                                    <svg enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="256" cy="256" fill="#f0f0f0" r="256"></circle>
                                <circle cx="256" cy="256" fill="#d80027" r="111.304"></circle>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                            </svg>
                                    <h3>Japan M2</h3></td>
                                <td>
                                    <div class="btn" title="last update three minutes and 38 seconds ago">Working now</div>
                                </td>
                            </tr>
                            <tr class="monitor">
                                <td>
                                    <svg enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="256" cy="256" r="256" fill="#f0f0f0"></circle>
                                <g fill="#0052b4">
                                    <path d="m52.92 100.14c-20.109 26.163-35.272 56.318-44.101 89.077h133.18z"></path>
                                    <path d="m503.18 189.22c-8.829-32.758-23.993-62.913-44.101-89.076l-89.075 89.076z"></path>
                                    <path d="m8.819 322.78c8.83 32.758 23.993 62.913 44.101 89.075l89.074-89.075z"></path>
                                    <path d="m411.86 52.921c-26.163-20.109-56.317-35.272-89.076-44.102v133.18z"></path>
                                    <path d="m100.14 459.08c26.163 20.109 56.318 35.272 89.076 44.102v-133.18z"></path>
                                    <path d="m189.22 8.819c-32.758 8.83-62.913 23.993-89.075 44.101l89.075 89.075z"></path>
                                    <path d="m322.78 503.18c32.758-8.83 62.913-23.993 89.075-44.101l-89.075-89.075z"></path>
                                    <path d="m370 322.78 89.075 89.076c20.108-26.162 35.272-56.318 44.101-89.076z"></path>
                                </g>
                                <g fill="#d80027">
                                    <path d="m509.83 222.61h-220.44v-220.44c-10.931-1.423-22.075-2.167-33.392-2.167-11.319 0-22.461 0.744-33.391 2.167v220.44h-220.44c-1.423 10.931-2.167 22.075-2.167 33.392 0 11.319 0.744 22.461 2.167 33.391h220.44v220.44c10.931 1.423 22.073 2.167 33.392 2.167 11.317 0 22.461-0.743 33.391-2.167v-220.44h220.44c1.423-10.931 2.167-22.073 2.167-33.392 0-11.317-0.744-22.461-2.167-33.391z"></path>
                                    <path d="m322.78 322.78 114.24 114.24c5.254-5.252 10.266-10.743 15.048-16.435l-97.802-97.802h-31.482z"></path>
                                    <path d="m189.22 322.78h-2e-3l-114.24 114.24c5.252 5.254 10.743 10.266 16.435 15.048l97.802-97.804z"></path>
                                    <path d="m189.22 189.22v-2e-3l-114.24-114.24c-5.254 5.252-10.266 10.743-15.048 16.435l97.803 97.803h31.481z"></path>
                                    <path d="m322.78 189.22 114.24-114.24c-5.252-5.254-10.743-10.266-16.435-15.047l-97.802 97.803z"></path>
                                </g>
                            </svg>
                                    <h3>England M3</h3></td>
                                <td>
                                    <div class="btn" title="last update three minutes and 38 seconds ago">Working now</div>
                                </td>
                            </tr>
                            <tr class="monitor">
                                <td>
                                    <svg enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="256" cy="256" fill="#d80027" r="256"></circle>
                                <g fill="#f0f0f0">
                                    <path d="m245.518 209.186 21.005 28.945 34.017-11.03-21.038 28.92 21.002 28.944-34.005-11.072-21.037 28.92.022-35.761-34.006-11.072 34.018-11.03z"></path>
                                    <path d="m188.194 328.348c-39.956 0-72.348-32.392-72.348-72.348s32.392-72.348 72.348-72.348c12.458 0 24.18 3.151 34.414 8.696-16.055-15.702-38.012-25.392-62.24-25.392-49.178 0-89.043 39.866-89.043 89.043s39.866 89.043 89.043 89.043c24.23 0 46.186-9.691 62.24-25.392-10.234 5.547-21.956 8.698-34.414 8.698z"></path>
                                </g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                            </svg>
                                    <h3>Türkiye M4</h3></td>
                                <td>
                                    <div class="btn" title="last update three minutes and 38 seconds ago">Working now</div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="supertable">
                        <tbody>
                            <tr class="sep">
                                <td colspan="9">
                                    <div class="seperator">CUSTOMERS SERVICES</div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="supertable item-list-table">
                        <tbody>
                            <tr class="monitor">
                                <td>
                                    <h3>Customer area</h3></td>
                                <td>
                                    <div class="btn" title="last update three minutes and 38 seconds ago">Working now</div>
                                </td>
                            </tr>
                            <tr class="monitor">
                                <td>
                                    <h3>Login to cpanel</h3></td>
                                <td>
                                    <div class="btn" title="last update three minutes and 38 seconds ago">Working now</div>
                                </td>
                            </tr>
                            <tr class="monitor">
                                <td>
                                    <h3>Payments</h3></td>
                                <td>
                                    <div class="btn" title="last update three minutes and 38 seconds ago">Working now</div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <table class="supertable">
                    <tbody>
                        <tr class="sep">
                            <td colspan="9">
                                <div class="seperator">Past Incidents</div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div id="section-timeline" class="section-timeline">
                    <!--<div class="timeline">-->
                    <!--    <div class="content-wrapper">-->
                    <!--        <div class="panel panel-message">-->
                    <!--            <div class="panel-body">-->
                    <!--                <div class="incident-empty-wrapper">-->
                    <!--                    <h4 class="incident-date">11th June 2024</h4>-->
                    <!--                    <p>No incidents reported</p>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--<div class="timeline">-->
                    <!--    <div class="content-wrapper">-->
                    <!--        <div class="panel panel-message">-->
                    <!--            <div class="panel-body">-->
                    <!--                <div class="incident-empty-wrapper">-->
                    <!--                    <h4 class="incident-date">10th June 2024</h4>-->
                    <!--                    <p>No incidents reported</p>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--<div class="timeline">-->
                    <!--    <div class="content-wrapper">-->
                    <!--        <div class="panel panel-message">-->
                    <!--            <div class="panel-body">-->
                    <!--                <div class="incident-empty-wrapper">-->
                    <!--                    <h4 class="incident-date">9th June 2024</h4>-->
                    <!--                    <p>No incidents reported</p>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--<div class="timeline">-->
                    <!--    <div class="content-wrapper">-->
                    <!--        <div class="panel panel-message">-->
                    <!--            <div class="panel-body">-->
                    <!--                <div class="incident-empty-wrapper">-->
                    <!--                    <h4 class="incident-date">8th June 2024</h4>-->
                    <!--                    <p>No incidents reported</p>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--<div class="timeline">-->
                    <!--    <div class="content-wrapper">-->
                    <!--        <div class="panel panel-message">-->
                    <!--            <div class="panel-body">-->
                    <!--                <div class="incident-empty-wrapper">-->
                    <!--                    <h4 class="incident-date">7th June 2024</h4>-->
                    <!--                    <p>No incidents reported</p>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--<div class="timeline">-->
                    <!--    <div class="content-wrapper">-->
                    <!--        <div class="panel panel-message">-->
                    <!--            <div class="panel-body">-->
                    <!--                <div class="incident-empty-wrapper">-->
                    <!--                    <h4 class="incident-date">6th June 2024</h4>-->
                    <!--                    <p>No incidents reported</p>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--<div class="timeline">-->
                    <!--    <div class="content-wrapper">-->
                    <!--        <div class="panel panel-message">-->
                    <!--            <div class="panel-body">-->
                    <!--                <div class="incident-empty-wrapper">-->
                    <!--                    <h4 class="incident-date">5th June 2024</h4>-->
                    <!--                    <p>No incidents reported</p>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                </div>
            </div>

        </div>
    </div>
    <style>
        .tooltipster-default {
            border-radius: 5px;
            border: 0px solid #000;
            background: #4c4c4c;
            color: #fff
        }
    
        .tooltipster-default .tooltipster-content {
            font-family: Arial, sans-serif;
            font-size: 14px;
            line-height: 16px;
            padding: 8px 10px;
            overflow: hidden
        }
    
        .tooltipster-icon {
            cursor: help;
            margin-left: 4px
        }
    
        .tooltipster-base {
            padding: 0;
            font-size: 0;
            line-height: 0;
            position: absolute;
            left: 0;
            top: 0;
            z-index: 9999999;
            pointer-events: none;
            width: auto;
            overflow: visible
        }
    
        .tooltipster-base .tooltipster-content {
            overflow: hidden
        }
    
        .tooltipster-arrow {
            display: block;
            text-align: center;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1
        }
    
        .tooltipster-arrow span, .tooltipster-arrow-border {
            display: block;
            width: 0;
            height: 0;
            position: absolute
        }
    
        .tooltipster-arrow-top span, .tooltipster-arrow-top-right span, .tooltipster-arrow-top-left span {
            border-left: 8px solid transparent !important;
            border-right: 8px solid transparent !important;
            border-top: 8px solid;
            bottom: -7px
        }
    
        .tooltipster-arrow-top .tooltipster-arrow-border, .tooltipster-arrow-top-right .tooltipster-arrow-border, .tooltipster-arrow-top-left .tooltipster-arrow-border {
            border-left: 9px solid transparent !important;
            border-right: 9px solid transparent !important;
            border-top: 9px solid;
            bottom: -7px
        }
    
        .tooltipster-arrow-bottom span, .tooltipster-arrow-bottom-right span, .tooltipster-arrow-bottom-left span {
            border-left: 8px solid transparent !important;
            border-right: 8px solid transparent !important;
            border-bottom: 8px solid;
            top: -7px
        }
    
        .tooltipster-arrow-bottom .tooltipster-arrow-border, .tooltipster-arrow-bottom-right .tooltipster-arrow-border, .tooltipster-arrow-bottom-left .tooltipster-arrow-border {
            border-left: 9px solid transparent !important;
            border-right: 9px solid transparent !important;
            border-bottom: 9px solid;
            top: -7px
        }
    
        .tooltipster-arrow-top span, .tooltipster-arrow-top .tooltipster-arrow-border, .tooltipster-arrow-bottom span, .tooltipster-arrow-bottom .tooltipster-arrow-border {
            left: 0;
            right: 0;
            margin: 0 auto
        }
    
        .tooltipster-arrow-top-left span, .tooltipster-arrow-bottom-left span {
            left: 6px
        }
    
        .tooltipster-arrow-top-left .tooltipster-arrow-border, .tooltipster-arrow-bottom-left .tooltipster-arrow-border {
            left: 5px
        }
    
        .tooltipster-arrow-top-right span, .tooltipster-arrow-bottom-right span {
            right: 6px
        }
    
        .tooltipster-arrow-top-right .tooltipster-arrow-border, .tooltipster-arrow-bottom-right .tooltipster-arrow-border {
            right: 5px
        }
    
        .tooltipster-arrow-left span, .tooltipster-arrow-left .tooltipster-arrow-border {
            border-top: 8px solid transparent !important;
            border-bottom: 8px solid transparent !important;
            border-left: 8px solid;
            top: 50%;
            margin-top: -7px;
            right: -7px
        }
    
        .tooltipster-arrow-left .tooltipster-arrow-border {
            border-top: 9px solid transparent !important;
            border-bottom: 9px solid transparent !important;
            border-left: 9px solid;
            margin-top: -8px
        }
    
        .tooltipster-arrow-right span, .tooltipster-arrow-right .tooltipster-arrow-border {
            border-top: 8px solid transparent !important;
            border-bottom: 8px solid transparent !important;
            border-right: 8px solid;
            top: 50%;
            margin-top: -7px;
            left: -7px
        }
    
        .tooltipster-arrow-right .tooltipster-arrow-border {
            border-top: 9px solid transparent !important;
            border-bottom: 9px solid transparent !important;
            border-right: 9px solid;
            margin-top: -8px
        }
    
        .tooltipster-fade {
            opacity: 0;
            -webkit-transition-property: opacity;
            -moz-transition-property: opacity;
            -o-transition-property: opacity;
            -ms-transition-property: opacity;
            transition-property: opacity
        }
    
        .tooltipster-fade-show {
            opacity: 1
        }
    
        .tooltipster-grow {
            -webkit-transform: scale(0, 0);
            -moz-transform: scale(0, 0);
            -o-transform: scale(0, 0);
            -ms-transform: scale(0, 0);
            transform: scale(0, 0);
            -webkit-transition-property: -webkit-transform;
            -moz-transition-property: -moz-transform;
            -o-transition-property: -o-transform;
            -ms-transition-property: -ms-transform;
            transition-property: transform;
            -webkit-backface-visibility: hidden
        }
    
        .tooltipster-grow-show {
            -webkit-transform: scale(1, 1);
            -moz-transform: scale(1, 1);
            -o-transform: scale(1, 1);
            -ms-transform: scale(1, 1);
            transform: scale(1, 1);
            -webkit-transition-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
            -webkit-transition-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1.15);
            -moz-transition-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1.15);
            -ms-transition-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1.15);
            -o-transition-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1.15);
            transition-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1.15)
        }
    
        .tooltipster-swing {
            opacity: 0;
            -webkit-transform: rotateZ(4deg);
            -moz-transform: rotateZ(4deg);
            -o-transform: rotateZ(4deg);
            -ms-transform: rotateZ(4deg);
            transform: rotateZ(4deg);
            -webkit-transition-property: -webkit-transform, opacity;
            -moz-transition-property: -moz-transform;
            -o-transition-property: -o-transform;
            -ms-transition-property: -ms-transform;
            transition-property: transform
        }
    
        .tooltipster-swing-show {
            opacity: 1;
            -webkit-transform: rotateZ(0);
            -moz-transform: rotateZ(0);
            -o-transform: rotateZ(0);
            -ms-transform: rotateZ(0);
            transform: rotateZ(0);
            -webkit-transition-timing-function: cubic-bezier(0.230, 0.635, 0.495, 1);
            -webkit-transition-timing-function: cubic-bezier(0.230, 0.635, 0.495, 2.4);
            -moz-transition-timing-function: cubic-bezier(0.230, 0.635, 0.495, 2.4);
            -ms-transition-timing-function: cubic-bezier(0.230, 0.635, 0.495, 2.4);
            -o-transition-timing-function: cubic-bezier(0.230, 0.635, 0.495, 2.4);
            transition-timing-function: cubic-bezier(0.230, 0.635, 0.495, 2.4)
        }
    
        .tooltipster-fall {
            top: 0;
            -webkit-transition-property: top;
            -moz-transition-property: top;
            -o-transition-property: top;
            -ms-transition-property: top;
            transition-property: top;
            -webkit-transition-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
            -webkit-transition-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1.15);
            -moz-transition-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1.15);
            -ms-transition-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1.15);
            -o-transition-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1.15);
            transition-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1.15)
        }
    
        .tooltipster-fall.tooltipster-dying {
            -webkit-transition-property: all;
            -moz-transition-property: all;
            -o-transition-property: all;
            -ms-transition-property: all;
            transition-property: all;
            top: 0 !important;
            opacity: 0
        }
    
        .tooltipster-slide {
            left: -40px;
            -webkit-transition-property: left;
            -moz-transition-property: left;
            -o-transition-property: left;
            -ms-transition-property: left;
            transition-property: left;
            -webkit-transition-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
            -webkit-transition-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1.15);
            -moz-transition-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1.15);
            -ms-transition-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1.15);
            -o-transition-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1.15);
            transition-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1.15)
        }
    
        .tooltipster-slide.tooltipster-dying {
            -webkit-transition-property: all;
            -moz-transition-property: all;
            -o-transition-property: all;
            -ms-transition-property: all;
            transition-property: all;
            left: 0 !important;
            opacity: 0
        }
    
        .tooltipster-content-changing {
            opacity: .5;
            -webkit-transform: scale(1.1, 1.1);
            -moz-transform: scale(1.1, 1.1);
            -o-transform: scale(1.1, 1.1);
            -ms-transform: scale(1.1, 1.1);
            transform: scale(1.1, 1.1)
        }
    </style>


    <div id="anywhere-home" class="">
    </div>

    <!-- THEME PRELOADER START -->
    <div class="loader-wrapper">
        <div class="loader">
        </div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!-- THEME PRELOADER END -->
    <!-- BACK TO TOP AREA START -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>
    <!-- BACK TO TOP AREA EDN -->

    <!-- jquery js -->
    <script defer src="assets/js/plugins/jquery.min.js"></script>
    <script defer src="assets/js/plugins/popper.js"></script>
    <script defer src="assets/js/plugins/bootstrap.min.js"></script>
    <script defer src="assets/js/plugins/metismenu.js"></script>
    <script defer src="assets/js/vendor/jqueryui.js"></script>
    <script defer src="assets/js/vendor/waypoint.js"></script>
    <script defer src="assets/js/plugins/swiper.js"></script>
    <script defer src="assets/js/plugins/theia-sticky-sidebar.min.js"></script>
    <script defer src="assets/js/plugins/jquery.nice-select.min.js"></script>
    <script defer src="assets/js/plugins/sal.js"></script>
    <script defer src="assets/js/vendor/waw.js"></script>
    <script defer src="assets/js/plugins/counter-up.js"></script>
    <script defer src="assets/js/plugins/magnific-popup.js"></script>
    <!-- contact form js -->
    <script defer src="assets/js/plugins/contact-form.js"></script>
    <script defer src="assets/js/main.js"></script>
</body>

</html>