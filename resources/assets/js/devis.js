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

			total += sousTot;
		}

		$("#montantTot").html(total + " frs");
	}

	$(document).keypress(function(e) {
	    if(e.which == 13) {

	    	if ($("#code_input"+ligneCalcul+" input").val().length !== 0 || $("#texte"+ligneCalcul+" input").val().length !== 0){

	    		let code = $("#code_input"+ligneCalcul+" input").val();
		    	let texte = $("#texte"+ligneCalcul+" input").val();
		    	$("#code_input"+ligneCalcul).empty();
		    	$("#texte"+ligneCalcul).empty();

	    		if(isNaN(code) || code == ""){
	    			//TODO : interpréter le code entré
		    		$("#code_input"+ligneCalcul).append('<input id='+ligneCalcul+' type=text value = '+code+'>');
		    		$("#texte"+ligneCalcul).append('<input id='+ligneCalcul+' type=text value = '+texte+'>');
		    	}else{
		    		$("#code_input"+ligneCalcul).append('<input id='+ligneCalcul+' type=text style=font-weight:bold; value = '+code+'>');
		    		$("#texte"+ligneCalcul).append('<input id='+ligneCalcul+' type=text style=font-weight:bold; value = '+texte+'>');
		    	}
	    	}

	    	if ($("#code_input"+ligne+" input").val().length !== 0 || $("#texte"+ligne+" input").val().length !== 0)
	    	{
	    		ligne++;

	    		$("tbody").append('<tr>'+
				        		  '<td id = code_input'+ligne+' class = petit><input id='+ligne+' type=text></td>'+
				                  '<td id = texte'+ligne+'><input id='+ligne+' type=text></td>'+
				                  '<td id = quantite'+ligne+'><input id='+ligne+' type=number value=0></td>'+
				                  '<td id = unite'+ligne+' class = petit><input id='+ligne+' type=text></td>'+
				                  '<td id = prix_unit'+ligne+'><input id='+ligne+' type=number value=0></td>'+
				                  '<td id = montant'+ligne+'>0 frs</td>'+
				                  '</tr>');
	    	}
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

	$('#sauvegarder').submit(function(e){
		let idDevis = $('#num_devis').val();
		let objDevis = $('#obj_devis').val();

		let position = 1;
		let texte = "";
		let quantite = 0;
		let unite = "";
		let prixUnit = 0;
		let montant = 0;

		let jsonString = '{ "idDevis" : "'+idDevis+'", "objDevis" : "'+objDevis+'",';

		let code = "";

		for(let i = 0; i <= ligne; i++){
			code = $("#code_input"+i+" input").val();

			if (!isNaN(code) && code != ""){
				position = code;
			}
			
			texte = $("#texte"+i+" input").val();
			quantite = $('#quantite'+i+" input").val();
			unite = $('#unite'+i+' input').val();
			prixUnit = $('#prix_unit'+i+' input').val();
			montant = parseInt($("#montant"+i).text().slice(0,-4));

			jsonString += '"'+position+'" : { "texte" : "'+texte+'", "quantite" : "'+quantite+'",'+
						  '"unite" : "'+unite+'", "prixUnit" : "'+prixUnit+'", "montant" : "'+montant+'" }, ';
		}

		let montantTotal = parseInt($("#montantTot"+i).text().slice(0,-4));

		jsonString += '"montantTotal" : "'+montantTotal+'"}';

		let jsonObject = jQuery.parseJSON(jsonString);

		let script = 'https://cdmpeinture.dev/administration/devis';
		
		$.post(script, {
			json : jsonObject
		});
	});
	
});
