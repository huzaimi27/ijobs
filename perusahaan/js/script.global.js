$(document).ready(function()
{
	window.onload = Loadberanda();
	$(" li.home").click(function(){Loadhome();});
	$(" li.profil").click(function(){Loadprofil();	});
	$(" li.produk").click(function(){Loadproduk();});
});

function loading(){
	$(".container").html('<center><img src="img/loading.gif"/><i> loading page ...</i></center>');
	 $(".container").hide();
	 $(".container").fadeIn("slow");
};
function Loadhome(){loading();$(".container").load('beranda.php');};
function Loadprofil(){loading();$(".container").load('profil.php');};
function Loadproduk(){loading();$(".container").load('produk.php');};
