<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="http://www.kpa21.info">
    <link rel="shortcut icon" href="{{ asset('/images/fbi_dark_logo.png') }}">
    <title>CooperativeOS - Be part of our organization</title>

    <!-- SEO -->
    <meta name="description" content="OUR VISION A transformed and peaceful society where there is equality, debt-free, social justice and order for everyone.

    OUR MISSION To empower the people in the Community by organizing and uniting them through raising their social consciousness in preserving peace and order, actively participate in community development and nation building and enlightening them about financial awareness thus liberating them from the bondage of poverty and turning them self-reliant and making realize that the foundation of the Community is based on trust.
    ">
    <meta name="keywords" content="fbi-ph.org, kpa21.info, ptxt4wrd.com">

    <meta property="og:description" content="OUR VISION A transformed and peaceful society where there is equality, debt-free, social justice and order for everyone.

    OUR MISSION To empower the people in the Community by organizing and uniting them through raising their social consciousness in preserving peace and order, actively participate in community development and nation building and enlightening them about financial awareness thus liberating them from the bondage of poverty and turning them self-reliant and making realize that the foundation of the Community is based on trust.
    " />
    <meta property="og:title" content="CooperativeOS - Be part of our organization" />
    <meta property="og:url" content="http://kpa.ph" />
    <meta property="og:type" content="website" />

    <meta name="twitter:title" content="CooperativeOS - Be part of our organization" />
    <meta name="twitter:site" content="http://kpa.ph" />
    <!--//END SEO -->

    <link rel="shortcut icon" type="image/png" href="{{ asset('/images/_logo.png') }}"/>

    <!-- Bootstrap -->
    <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/bootstrap-theme.css') }}" rel="stylesheet">

    <!-- siimple style -->
    <link href="{{ asset('/css/style_v0.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <img src="{{ asset('/images/_logo.png') }}" style="width: 230px;" title="FBI-PH.org" alt="FBI-PH.org">
                <h1 style="margin-top: 15px;">COOPERATIVE<span style="color: #f2d06e;">OS</span></h1>
                <h2 style="margin-top: -30px;" class="subtitle">BE PART OF US,<br />AND WITH YOUR HANDS YOUR HEARTS.</h2>
                <style>
                    a.btn_ {
                        -webkit-border-radius: 28;
                        -moz-border-radius: 28;
                        border-radius: 28px;
                        color: #ffffff;
                        font-size: 37px;
                        font-weight: 600;
                        padding: 10px 20px 10px 20px;
                        text-decoration: none;
                    }
                    a.view_account {
                        background: #3E5C94;
                        background-image: -webkit-linear-gradient(top, #3E5C94, #3E5C94);
                        background-image: -moz-linear-gradient(top, #3E5C94, #3E5C94);
                        background-image: -ms-linear-gradient(top, #3E5C94, #3E5C94);
                        background-image: -o-linear-gradient(top, #3E5C94, #3E5C94);
                        background-image: linear-gradient(to bottom, #3E5C94, #3E5C94);
                    }
                    a.view_account:hover {
                        background: #3498db;
                        text-decoration: none;
                    }

                    a.add_member {
                        background: #C8A339;
                        background-image: -webkit-linear-gradient(top, #C8A339, #C8A339);
                        background-image: -moz-linear-gradient(top, #C8A339, #C8A339);
                        background-image: -ms-linear-gradient(top, #C8A339, #C8A339);
                        background-image: -o-linear-gradient(top, #C8A339, #C8A339);
                        background-image: linear-gradient(to bottom, #C8A339, #C8A339);
                    }
                    a.add_member:hover {
                        background: #EEC95F;
                        text-decoration: none;
                    }
                </style>
                <div style="margin-top: 70px;">
                    <a href="/sign-up" class="btn_ view_account">&nbsp;Add Account!&nbsp;</a>
                </div>

                <div style="margin-top: 50px;">
                    <a href="/login" class="btn_ add_member">View Account!</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <p class="copyright">{{ date("Y") }} &copy; <a href="http://www.kpa21.info">KPA Inc.</a></p>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('/js/jquery-1.10.2.min.js') }}"></script>
<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
</body>
</html>
