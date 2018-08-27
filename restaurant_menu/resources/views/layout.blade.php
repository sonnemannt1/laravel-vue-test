<!doctype html>
<html lang="{{ app()->getLocale() }}">
	<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TSonnemann Pizza CO.</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>

			html, body {
				background-color: #eaeaed;
				color: #000000;
				font-family: 'Raleway', sans-serif;
				font-weight: 100;
				height: 100vh;
				margin: 0;
			}

			.main-logo {
				font-size: 20px !important;
				font-style: italic;
				margin-top: 10px !important;
			}

			.full-height {
				height: 75vh;
			}

			.justify-content {
				justify-content: center;
			}

			.position-ref {
				position: relative;
			}
			.margin-top {
				margin-top: 15px;
			}
			.font-weight-bold {
				font-weight: bold;
			}
			.small-buffer {
				padding-top: 15px;
			}
			.menu {
				text-align: center;
				margin: 0px 10px 10px 10px;
				border-radius: 12px;
				background-color: #ffadad;
			}

			.title {
				font-size: 84px;
			}
			
			.top-header {
				margin-top: 20px;
			}

			#menu-header {
				font-size: 36px;
				margin-top: 10px;
				font-weight: bold;
				text-decoration: underline;
				border-top: 0px !important;
			}
			
			.links > a {
				color: #000000;
				padding: 0 25px;
				font-size: 12px;
				font-weight: 600;
				letter-spacing: .1rem;
				text-decoration: none;
				text-transform: uppercase;
			}

			.nav-bar {
				height: 5vh;
				width: 100%;
				border-bottom: 1px solid black;
				text-align: center;
				display: flex;
				justify-content: center;
			}
			.nav-bar > a {
				margin-top: 15px;
			}
			
			.menu-div {
				width: 49%;
				justify-content: center;
				text-align: center;
				font-size: 14px;
				border-top: 1px dotted black;
				border-left: 1px dotted black;
				min-height: 20%;
				float:left;
			}
			
			.section-header {
				font-size: 24px;
				font-weight: bold;
				text-decoration: underline;
				margin: 5px 0px 5px 0px;
			}

			.section-footer {
				width: 100%;
				font-size: 16px;
				font-weight: italic;
				position:absolute;
				bottom: 0;
			}
			
			.menu_item_list {
				font-size: 16px;
				text-align: left;
				padding-left: 5px;
				font-weight: bold;
				width: 30%;
			}
			
			.div_float_left {
				float: left;
			}
			.div_description {
				width: 100%;
				margin-left: 20px;
				font-size: 10px;
				font-weight: bold;
				text-align: left;
			}
			.div_price {
				text-align: right;
				width: 50%;
			}
			
			.section {
				width: 100%;
				color: #000000;
				font-style: italic;
			}
			
			.modal-mask {
				position: fixed;
				z-index: 9998;
				top: 0;
				left: 0;
				width: 100%;
				height: 100%;
				background-color: rgba(0, 0, 0, .5);
				display: table;
				transition: opacity .3s ease;
			}

			.modal-wrapper {
				display: table-cell;
				vertical-align: middle;
			}

			.modal-container {
				width: 400px;
				margin: 0px auto;
				padding: 20px 30px;
				background-color: #fff;
				border-radius: 2px;
				box-shadow: 0 2px 8px rgba(0, 0, 0, .33);
				transition: all .3s ease;
				font-family: Helvetica, Arial, sans-serif;
			}

			.modal-header h3 {
				margin-top: 0;
				color: #42b983;
			}

			.modal-body {
				margin: 10px 0;
			}

			.modal-footer {
				margin-bottom: 20px;
			}
			
			.modal-default-button {
				float: right;
			}

			/*
			 * The following styles are auto-applied to elements with
			 * transition="modal" when their visibility is toggled
			 * by Vue.js.
			 *
			 * You can easily play with the modal transition by editing
			 * these styles.
			 */

			.modal-enter {
				opacity: 0;
			}

			.modal-leave-active {
				opacity: 0;
			}

			.modal-enter .modal-container,
			.modal-leave-active .modal-container {
				-webkit-transform: scale(1.1);
				transform: scale(1.1);
			}
			
			a {
				cursor: pointer;
			}
			
			.form-separator {
				width: 100%;
				text-align:left;
				
			}
			.form-input {
				width: 100%;
			}
			.main-content {
				background-color: #e3e3e3;
			}
		</style>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.15/vue.js"></script>
		<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
	</head>
    <body>
		<div id="main-content">
			@yield('nav-bar')
		
			@yield('content')
			
			@yield('modal-form')
		</div>
    </body>
</html>
