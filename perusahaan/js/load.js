$(document).ready(function()
{
	window.onload = Loadhome();
	$(" li.home").click(function(){Loadhome();});
	$(" li.inputloker").click(function(){Loadinputloker();	});
	$(" li.produk").click(function(){Loadproduk();});
});

function loading(){
	$("#ilham").html('<center><img src="img/loading.gif"/><i> loading page ...</i></center>');
	 $("#ilham").hide();
	 $("#ilham").fadeIn("slow");
};
// function Loadindex(){loading();$(".container").load('#');};
function Loadhome(){loading();$("#ilham").load('beranda.php');};
function Loadinputloker(){loading();$("#ilham").load('inputloker.php');};
function Loadproduk(){loading();$("#ilham").load('produk.php');};
