<style type="text/css">
	body{
		background:white;
		color: black;
	}
	.big{
		width: 1060px; height: 550px; margin-left: 2%; 
		background-image: url('<?= base_url("images/3.jpg") ?>'); background-size: cover;
	}
	.header{
		width: 1045px; height: 150px; margin-top: 5px; 
		margin-left: 2%; border-radius: 5%; 
		margin-bottom: -10px;
	}
	.header img{width: 100%; height: 100%; border-radius: 5%;}
	.sidebar{margin-top: 2%;}
	.bigContent{
		border-radius: 5%;
		background-color:rgb(57,167,141);
		margin-left: 30px; width: 855px; height: 360px;
	}
	.boxes{
		width: 120px; height: 30px; margin-bottom: -4%;
		border-radius: 10%; font-size: 14px;  text-align: center; color: black;
		font-weight: bolder;
		background-color: rgb(102, 204, 0);
	}
	.content{
		margin-left: 130px; width: 650px; height: 320px; margin: 0 auto;
	}
	ol li{font-size: 14px;}
	h3{text-align: center;}
	.footer{text-align: center; margin-top: -35px;}
	.kalender{
		height: 280px; width: 170px; margin-left: 870px;
		margin-top: -250px;
	}
	.jam{
		margin-top: -370px; margin-left: 900px; border-radius: 50%;
	}
	#clock {
        position: absolute;
       	height: 120px; width: 140px;
       	margin-bottom: 10px;
    }
   .aclock_container {
        position: absolute;
        width: 98%;
        height: 98%;
        top: 1%;
        left: 1%;   
    }
   .aclock_clock_container {
        position: absolute;
        width: 100%;
        height: 100%;
        top: -10px;
        left: -10px;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
    }
   .aclock_dial {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0%;
        left: 0%;
        background: -moz-linear-gradient(left, rgba(30,87,153,1) 0%, rgba(133,247,239,0) 100%); /* FF3.6+ */
        background: -webkit-gradient(linear, left top, right top, color-stop(0%,rgba(30,87,153,1)), color-stop(100%,rgba(133,247,239,0))); /* Chrome,Safari4+ */
        background: -webkit-linear-gradient(left, rgba(30,87,153,1) 0%,rgba(133,247,239,0) 100%); /* Chrome10+,Safari5.1+ */
        background: -o-linear-gradient(left, rgba(30,87,153,1) 0%,rgba(133,247,239,0) 100%); /* Opera11.10+ */
        background: -ms-linear-gradient(left, rgba(30,87,153,1) 0%,rgba(133,247,239,0) 100%); /* IE10+ */
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1e5799', endColorstr='#0085f7ef',GradientType=1 ); /* IE6-9 */
        background: linear-gradient(left, rgba(30,87,153,1) 0%,rgba(133,247,239,0) 100%); /* W3C */
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
    }
   .aclock_small_mark {
        position: absolute;
        width: 1%;
        height: 2%;
        top: 0%;
        left: 49.5%;
        background: black; 
    }
   .aclock_big_mark {
        position: absolute;
        width: 2%;
        height: 3%;
        top: 0%;
        left: 49%;
        background: red; 
    }
   .aclock_hand_container {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0%;
        left: 0%;
    }
   .aclock_hour_hand {
        position: absolute;
        width: 3%;
        height: 35%;
        bottom: 45%;
        left: 48.5%;
        background: #222;
    }
   .aclock_minute_hand {
        position: absolute;
        width: 2%;
        height: 45%;
        bottom: 45%;
        left: 49%;
        background: #111; 
    }
   .aclock_second_hand {
        position: absolute;
        width: 1%;
        height: 55%;
        bottom: 40%;
        left: 49.5%;
        background: red; 
    }
   .aclock_milli_hand {
        position: absolute;
        width: 1%;
        height: 25%;
        bottom: 45%;
        left: 49.5%;
        background: red; 
    }
   .aclock_screw {
        position: absolute;
        width: 5%;
        height: 5%;
        bottom: 47.5%;
        left: 47.5%;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        background: red;
    }
</style>