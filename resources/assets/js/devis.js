$( document ).ready(function() {
    var ligne = 1;
	var ligneCalcul = 1;

	function ligneEnCours(e){
		ligneCalcul = e.attr('id');
	}

	function totalDevis(){
		let sousTot = 0;
		let total = 0;

		for (let i=1; i<=ligne; i++){

			sousTot = parseInt($("#montant"+i).text().slice(0,-4));

			if (!isNaN(sousTot)){
				total += sousTot;
			}
		}

		$("#montantTot").html(total + " frs");
	}

	$(document).on("click","input[type='image']", function(e){

		ligneEnCours($(this));

		if ($(this).attr('class').indexOf("plus") >= 0){
			ligne++;

		    $('<tr id = ligne'+ligne+'>'+
			  '<td id = code_input'+ligne+' class = petit><input id='+ligne+' type=text></td>'+
			  '<td id = texte'+ligne+'><input id='+ligne+' type=text></td>'+
	          '<td id = quantite'+ligne+'><input id='+ligne+' type=number value=0></td>'+
			  '<td id = unite'+ligne+' class = petit><input id='+ligne+' type=text></td>'+
			  '<td id = prix_unit'+ligne+'><input id='+ligne+' type=number value=0></td>'+
			  '<td id = montant'+ligne+'>0 frs</td>'+
			  '<td><input class = plus id='+ligne+' type=image src=http://cdmpeinture.dev/images/plus.png width=24 height=24>'+
			  '<input class = minus id='+ligne+' type=image src=http://cdmpeinture.dev/images/minus.png width=24 height=24/></td>'+
			  '</tr>').insertAfter('#ligne'+ligneCalcul);
		}else{
			$('#ligne'+ligneCalcul).remove();
		}

		totalDevis();

		event.preventDefault();
      	return false;
		   	 
	});

	$(document).keypress(function(e) {
	    if(e.which == 13) {

			let code = $("#code_input"+ligneCalcul+" input").val();
			let texte = $("#texte"+ligneCalcul+" input").val();


			$("#code_input"+ligneCalcul).empty();
			$("#texte"+ligneCalcul).empty();
			$("#quantite"+ligneCalcul).empty();
			$("#unite"+ligneCalcul).empty();
			$("#prix_unit"+ligneCalcul).empty();
			$("#montant"+ligneCalcul).empty();

			if(isNaN(code) || code == ""){
				    			// TODO : interpréter le code entré
				    // let script = "{{ path('public/php/script.php') }}";

				    // 			$.post(script, {
								// 	code_input : code
								// }).done(function(data) {
								// 	code = "";
								// 	texte = data;
								// });
				$("#code_input"+ligneCalcul).append('<input id='+ligneCalcul+' type=text value = '+code+'>');
				$("#texte"+ligneCalcul).append('<input id='+ligneCalcul+' type=text value = '+texte+'>');
				$("#quantite"+ligneCalcul).append('<input id='+ligneCalcul+' type=number value = 0>');
				$("#unite"+ligneCalcul).append('<input id='+ligneCalcul+' type=text>');
				$("#prix_unit"+ligneCalcul).append('<input id='+ligneCalcul+' type=number value = 0>');
			  	$("#montant"+ligneCalcul).append('0 frs');
			}else{
			    $("#code_input"+ligneCalcul).append('<input id='+ligneCalcul+' type=text style=font-weight:bold; value = '+code+'>');
			    $("#texte"+ligneCalcul).append('<input id='+ligneCalcul+' type=text style=font-weight:bold; value = '+texte+'>');
			}
			totalDevis();     
		}
	});

	$(document).on("click","input", function(){
	    ligneEnCours($(this));

	    $('#quantite'+ligneCalcul+' input').each(function() {
		   let elem = $(this);

		   elem.data('oldVal', elem.val());

		   elem.bind("propertychange change click keyup input paste", function(event){
		      
		      if (elem.data('oldVal') != elem.val()) {
		       
		       elem.data('oldVal', elem.val());

		       $("#montant"+ligneCalcul).html($("#quantite"+ligneCalcul+" input").val() * $("#prix_unit"+ligneCalcul+" input").val() +" frs");
		       totalDevis();
		     }
		   });
		 });

		$('#prix_unit'+ligneCalcul+' input').each(function() {
		   let elem = $(this);

		   elem.data('oldVal', elem.val());

		   elem.bind("propertychange change click keyup input paste", function(event){
		      
		      if (elem.data('oldVal') != elem.val()) {
		       
		       elem.data('oldVal', elem.val());

		       $("#montant"+ligneCalcul).html($("#quantite"+ligneCalcul+" input").val() * $("#prix_unit"+ligneCalcul+" input").val() +" frs");
		       totalDevis();
		     }
		   });
		 });
	});

	$('#form').submit(function(e){

		let position = 1;
		let texte = "";
		let quantite = 0;
		let unite = "";
		let prixUnit = 0;
		let montant = 0;

		let jsonString = '{';

		let code = "";

		let titre = 1;
		let sous_titre = 1;

		for(let i = 1; i <= ligne; i++){

			code = $("#code_input"+i+" input").val();
			texte = $("#texte"+i+" input").val();
			quantite = $('#quantite'+i+" input").val();
			unite = $('#unite'+i+' input').val();
			prixUnit = $('#prix_unit'+i+' input').val();
			montant = parseInt($("#montant"+i).text().slice(0,-4));

			console.log(texte);

			if (typeof texte !== "undefined" ){
				if (!isNaN(code) && code != ""){
					position = code;
					titre = code
					sous_titre = 1;
				}else{
					position = titre+'.'+sous_titre;
					sous_titre++;
				}
				
				if (!isNaN(code) && code != ""){
					jsonString += '"'+position+'" : { "texte" : "'+texte+'"}, ';
				}else if(texte != ""){
					jsonString += '"'+position+'" : { "texte" : "'+texte+'", "quantite" : "'+quantite+'",'+
							  '"unite" : "'+unite+'", "prixUnit" : "'+prixUnit+'", "montant" : "'+montant+'" }, ';
				}
			}
		}  

		let montantTotal = parseInt($("#montantTot").text().slice(0,-4));

		jsonString += '"montantTotal" : "'+montantTotal+'"}';

		$('<input />').attr('type', 'hidden')
        .attr('name', "jsonObject")
	    .attr('value', jsonString)
        .appendTo('#form');
	});
	
});
