
	
	/*  
		Share Product
	*/
	function share(type, url,title=""){
    
	    // var url = "https://www.goodsleephealth.ca/demo//articles/single/115";
	    
	    if(type== "facebook"){
	        window.open('https://www.facebook.com/sharer/sharer.php?u='+url,'facebook-share-dialog',"width=626, height=436")
	    }
	    if(type== "twitter"){
	        // url = "Sleep Disorder Information URL:  https://www.goodsleephealth.ca/demo//articles/single/115";
	        window.open('https://twitter.com/intent/tweet?text='+title+" "+url,'twitter-share-dialog',"width=626, height=436")
	        
	    }
	    if(type=="linkedin"){
	        
	        source = "{{url('')}}";
	        window.open('http://www.linkedin.com/shareArticle?mini=true&url='+url+'&title='+title+'&source='+source,'linkedin-share-dialog',"width=626, height=436")
	    }
	    if(type=="tumblr"){
	         // http://www.tumblr.com/share/link?url=%5BURL%5D&amp;name=%5Btitle%5D&amp;description=%5Bcontent%5D     
	        window.open('http://www.tumblr.com/share/link?url='+url+'&name='+title,'tumblr-share-dialog',"width=626, height=436")
	     }
	     if(type=="email"){
	        
	         window.open('mailto:?subject='+title+'&body= Please check out this: '+title+',  URL:'+url,'email-share-dialog',"width=626, height=436")
	    }
	}

	/*  
		Redirect Product To Store
	*/
	function redirectProduct(id,is_redirect){
	  
	  	if(is_redirect == "yes"){
	    
	    	Object.assign(document.createElement('a'), {
		      target: '_blank',
		      href: '/redirect_to/'+id,
		    }).click();
	  	}

	   	let _token   = $('meta[name="csrf-token"]').attr('content');

	   $.ajax({
	        url: "/get_product_details_modal_content",
	        type:"GET",
	        data:{
	          _token: _token,  id:id
	        },
	        success:function(response){
	         
	          if(response && response !="") {
	     
	            $("#content-div-product").html(response);
	            $("#modal_product_details").modal('show');
	          }
	        },
	    });
	}


	/*  
		Compare Product
	*/
	function compareProduct(id){

		let _token   = $('meta[name="csrf-token"]').attr('content');

	   $.ajax({
	        url: "/get_product_comparison_modal_content",
	        type:"GET",
	        data:{
	          _token: _token,  id:id
	        },
	        success:function(response){
	         
	          if(response && response !="") {
	     
	            $("#content-div-comparison").html(response);
	            $("#modal_product_comparison").modal('show');
	          }
	        },
	    });
	}

	/*  
		Set Store Alert
	*/
	function setStoreAlert(id){

		let _token   = $('meta[name="csrf-token"]').attr('content');

	   $.ajax({
	        url: "/get_alert_modal_content",
	        type:"GET",
	        data:{
	          _token: _token,  id:id, type:'3'
	        },
	        success:function(response){
	         
	          if(response && response !="") {
	     
	            $("#content-div-alert").html(response);
	            $("#modal_product_alert").modal('show');
	          }
	        },
	    });
	}


	/*  
		Get Price History
	*/
	function getPriceHistory(id){

		let _token   = $('meta[name="csrf-token"]').attr('content');

	   $.ajax({
	        url: "/get_price_history_content",
	        type:"GET",
	        data:{
	          _token: _token,  product_id:id
	        },
	        success:function(response){
	         
	          if(response && response !="") {
	     
	            $("#content-div-history").html(response);
	            $("#modal_product_price_history").modal('show');
	          }
	        },
	    });
	}
	

	/*  
		Set Catagory Alert
	*/
	function setCategoryAlert(id,nature){

		let _token   = $('meta[name="csrf-token"]').attr('content');

	   $.ajax({
	        url: "/get_alert_modal_content",
	        type:"GET",
	        data:{
	          _token: _token,  id:id, type:'2', nature:nature
	        },
	        success:function(response){
	         
	          if(response && response !="") {
	     
	            $("#content-div-alert").html(response);
	            $("#modal_product_alert").modal('show');
	          }
	        },
	    });
	}
	
	/*  
		Set Product Alert
	*/
	function setProductAlert(id){

		let _token   = $('meta[name="csrf-token"]').attr('content');

	   $.ajax({
	        url: "/get_alert_modal_content",
	        type:"GET",
	        data:{
	          _token: _token,  id:id, type:'1'
	        },
	        success:function(response){
	         
	          if(response && response !="") {
	     
	            $("#content-div-alert").html(response);
	            $("#modal_product_alert").modal('show');
	          }
	        },
	    });
	}


	/*

		Save Product Alert
	*/

	function save_alert(id){

		if($("#alert_email").val() !=""){
			
			if(document.getElementById('alert_email_message')){
				$("#alert_email_message").hide();
			}

			let _token   = $('meta[name="csrf-token"]').attr('content');
		   	
		   	$.ajax({
		        url: "/save_alert",
		        type:"get",
		        data:$(id).serialize(),
		        success:function(response){

		          if(response && response !="") {
		     		if(response == "already"){
		         		$("#modal_product_alert").modal('hide');

		         		$("#modal_product_message").modal('show');
		         		$("#modal_message").html('<h3>Alert already exists!</h3>');

		         	}else if(response == "true"){

		         		$("#modal_product_alert").modal('hide');
		         		$("#modal_product_message").modal('show');
		         		$("#modal_message").html('<h3>Product alert saved!</h3>');
		       
		         	}else if(response == "registered"){

		         		$("#modal_product_alert").modal('hide');
		         		$("#modal_product_message").modal('show');
		         		$("#modal_message").html('<h3>Product alert saved!<br/> An account has been created, check your email for details.</h3>');
		         	
		         	}else if(response == "not-registered"){

		         		$("#modal_product_alert").modal('hide');
		         		$("#modal_product_message").modal('show');
		         		$("#modal_message").html('<h3>Product alert saved! <br/>If you want to manage these alerts <a href="/register">Register Now</a> using same email.</h3>');
		         	
		         	}else {
		         	
		         		$("#modal_product_alert").modal('hide');
		         		$("#modal_product_message").modal('show');
		         		$("#modal_message").html('<h3 >Unable to set alert!</h3>');
		         	}
		           	
		          }else{

		          	$("#modal_product_alert").modal('hide');
		          	$("#modal_product_message").modal('show');
		         	$("#modal_message").html('<h3>Unable to set alert!</h3>');
		          }
		        },
		    });
		
		}else{

			$("#alert_email_message").show();
		}
	}



	/*  
		Add Product To Favourite
	*/
	function addFavourite(id){

		let _token   = $('meta[name="csrf-token"]').attr('content');

	   $.ajax({
	        url: "/add_favourite",
	        type:"GET",
	        data:{
	          _token: _token,  product_id:id
	        },
	        success:function(response){
	         	
	          if(response && response !="") {
	     		if(response == "unauthorized"){
	         		
	         		window.location.href="/login";
	         	}else{

	         		if(response){
	         			$(".icon-"+id+" > i").css('color','red');
	         			$(".icon-"+id).removeAttr('title');
	         			
	         			$(".icon-"+id+" > i").removeClass('far');
	         			$(".icon-"+id+" > i").addClass('fa');

	         			// $(".icon-"+id).attr('title', 'Remove from favourite');
	         			$(".icon-"+id).attr('title', 'Remove from favourite')
				          .tooltip('fixTitle')
				          .tooltip('show');
	         			$(".icon-"+id).attr('onclick','removeFavourite('+id+')');
	         			$("#modal_product_message").modal('show');
	         			$("#modal_message").html('<h3 >Added to favourite!</h3>');
	         		
	         		}else{

	         			$("#modal_product_message").modal('show');
	         			$("#modal_message").html('<h3 >Unable to add to favourite!</h3>');
	         		}
	         	}
	           	
	          }
	        },
	    });
	}


	/*  
		Remove Product From Favourite
	*/
	function removeFavourite(id){

		let _token   = $('meta[name="csrf-token"]').attr('content');

	   $.ajax({
	        url: "/remove_favourite",
	        type:"GET",
	        data:{
	          _token: _token,  product_id:id
	        },
	        success:function(response){
	         	
	          if(response && response !="") {
	     		if(response == "unauthorized"){
	         		
	         		window.location.href="/login";
	         	}else{

	         		if(response){
	         			$(".icon-"+id+" > i").css('color','#777');
	         			$(".icon-"+id).removeAttr('title');
	         			// $(".icon-"+id).attr('title', 'Remove from favourite');
	         			$(".icon-"+id).attr('title', 'Add to favourite')
				          .tooltip('fixTitle')
				          .tooltip('show');
	         			$(".icon-"+id).attr('onclick','addFavourite('+id+')');
	         			
	         			$(".icon-"+id+" > i").removeClass('fa');
	         			$(".icon-"+id+" > i").addClass('far');
	         			
	         			$("#modal_product_message").modal('show');
	         			$("#modal_message").html('<h3 >Removed from favourite!</h3>');
	         		}else{
	         			
	         			$("#modal_product_message").modal('show');
	         			$("#modal_message").html('<h3 >Unable to remove from favourite!</h3>');
	         		}
	         	}
	           	
	          }
	        },
	    });
	}


	/*
		Hide a Modal
	*/

	function  hideModalById(id){

	    $("#"+id).modal('hide');
	}

	
	/*
		Register Submit
	*/
	function submitRegister(){

		
	}


