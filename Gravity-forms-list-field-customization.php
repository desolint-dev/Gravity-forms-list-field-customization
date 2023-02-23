
<?php 
function wp_custom_css_form(){
?>
<style>
	#field_51_19{
	display: flex;
    width: 100%;
   flex-wrap: wrap;
    align-content: flex-start;
    justify-content: center;
    align-items: center;
	}
	
	.ginput_container_text:has(#input_51_19){
		width:50%;
		margin:10px;
	}
	#field_51_22{
		text-align:center;
	}
	
	#input_51_22 input{
		visibility:hidden;
	}
	div#input_51_22 img {
    	width: 70px;
		margin:15px;
}
	#gform_page_51_4{
		text-align:center;
	}
		#input_51_41 {
  color: transparent;
    width: 130px;
    margin: 0 auto;
}
	.gform_page .gsection_title, .gsection_description{
		text-align:center;
	}
	.gfield_list_21_cell4, 
	.gfield_list_21_cell6,
	.gfield_list_66_cell4, 
	.gfield_list_66_cell6{
		flex-grow: 0.5 !important;
    	margin-right: 7% !important;
	}
	
	.gfield_list_21_cell4 select, 
	.gfield_list_21_cell6 select,
	.gfield_list_66_cell4 select, 
	.gfield_list_66_cell6 select{
		background-color:#eee;
	}
	
	#field_51_21 .gfield_list_header > div:nth-child(4),
	#field_51_66 .gfield_list_header > div:nth-child(4),
	#field_51_21 .gfield_list_header > div:nth-child(6),
	#field_51_66 .gfield_list_header > div:nth-child(6){
		visibility:hidden;
	}
	#gform_wrapper_51 .gfield_list_cell {
    margin-left: 0% !important;
}
	#gform_wrapper_51 .gfield_list_cell input{
		border-radius:0px !important;
	}
		#gform_wrapper_51 .gfield_list_cell select{
		border-radius:0px !important;
	}
	.selectbutton button {
 width: 25%;
    height: 40px;
    display: inline-block;
    border-radius: 0px;
}
	
	.selectbutton {
  display: flex;
  justify-content: space-between;
}
	
	/* Default button styles */
.selectbutton button {
 background-color: #fffcfc;
    color: #000;
    border: 1px solid #aca8a8;
}

/* Style for selected button */
.selectbutton button.selected {
  background-color: #000;
  color: #fff;
border-radius:0px;
}
	.gfield_list_group_item.gfield_list_cell.gfield_list_47_cell1 {
    max-width: 100px;
}
.gfield_list_47_cell2 select{
		visibility:hidden;
		position:absolute;
		z-index:-3;
	}
	
.gform_wrapper.gravity-theme .gf_page_steps{
		text-align:center !important;
	}
	#field_51_47{
	width: 600px;
    margin: 0 auto;
    position: relative;
	}
	#field_51_47 > legend{
		text-align:center;
	}
	
	#field_51_66, #field_51_21{
	width: 800px;
    margin: 0 auto;
    position: relative;
	}

@media only screen and (max-width: 600px) {
 	#field_51_47{
	width: 100%;
    margin: 0 auto;
    position: relative;
	}
.gfield_list_21_cell4, .gfield_list_21_cell6, .gfield_list_66_cell4, .gfield_list_66_cell6 {
    flex-grow: 0.5 !important;
    margin-right: 0% !important;
}
.gfield_list_group_item.gfield_list_cell.gfield_list_47_cell1 {
    max-width: 100%;
}
}
</style>	
<?php	
}
add_action( 'wp_head', 'wp_custom_css_form', 101   );

function wp_custom_js_form(){
?>	
<script>
	jQuery(document).ready(function($) {
    jQuery(document).on('gform_post_render', function(event, form_id, current_page) {
	 
	  
	  
jQuery(document).delegate('.selectbutton button', 'click', function() {
    jQuery(this).siblings().removeClass('selected');
    jQuery(this).addClass('selected');
});
	  	  
	  
function texttonumbertype(){
jQuery(".gfield_list_group .gfield_list_47_cell1 input").each(function(){
	jQuery(this).attr('type', 'number');
})
}
texttonumbertype()
		
function createbuttons(){
	
jQuery(".gfield_list_group .gfield_list_47_cell2").each(function(a,b){
	jQuery(this).find('.selectbutton').remove();
	jQuery(this).append("<div class='selectbutton'>")
	
	var select = jQuery(this).find('select');
	jQuery('.selectbutton').html("");
   	select.find('option').each(function(){
	   var button = jQuery('<button>').text(jQuery(this).text());
	   jQuery(this).parents().find('.selectbutton').append(button);
   })
})	
}
createbuttons()
	  
	  
function add_new_row(){
jQuery('select[name="input_47[]"]').each(function(){
 var selectedValue = jQuery(this).val();
	jQuery(this).parent('.gfield_list_47_cell2').find('.selectbutton button').each(function(){
		var buttonvalue = jQuery(this).text();
// 		console.log(selectedValue, buttonvalue)
		if(selectedValue == buttonvalue){
      jQuery(this).addClass('selected');
    }
})
})
}
add_new_row()	
	  
	  
	  
function buttonclick(){
	jQuery('.gfield_list_47_cell2 button').on('click', function(e){
	e.preventDefault();
	jQuery(this).parent().siblings('select').val(jQuery(this).text());
})
}
buttonclick()
jQuery(document).on('click', '.add_list_item', function(event) {
	texttonumbertype()
	createbuttons()
	buttonclick()
	add_new_row()
})
		
    });
});
</script>
<?php
}

add_action( 'wp_footer', 'wp_custom_js_form', 101   );





add_filter( 'gform_column_input_51_21_4', 'set_column_51_21_4', 10, 5 );
function set_column_51_21_4( $input_info, $field, $column, $value, $form_id ) {
    return array( 
		'type' => 'select', 
		'choices' => array(
        array( 'text' => 'IN', 'value' => 'IN' ),
        array( 'text' => 'CM', 'value' => 'CM' )
    )
	);
}


add_filter( 'gform_column_input_51_21_6', 'set_column_51_21_6', 10, 5 );
function set_column_51_21_6( $input_info, $field, $column, $value, $form_id ) {
	    return array( 
		'type' => 'select', 
		'choices' => array(
        array( 'text' => 'KG', 'value' => 'KG' ),
        array( 'text' => 'LB', 'value' => 'LB' )
    )
	);
}


add_filter( 'gform_column_input_51_66_4', 'set_column_51_66_4', 10, 5 );
function set_column_51_66_4( $input_info, $field, $column, $value, $form_id ) {
    return array( 
		'type' => 'select', 
		'choices' => array(
        array( 'text' => 'IN', 'value' => 'IN' ),
        array( 'text' => 'CM', 'value' => 'CM' )
    )
	);
}


add_filter( 'gform_column_input_51_66_6', 'set_column_51_66_6', 10, 5 );
function set_column_51_66_6( $input_info, $field, $column, $value, $form_id ) {
	   return array( 
		'type' => 'select', 
		'choices' => array(
        array( 'text' => 'KG', 'value' => 'KG' ),
        array( 'text' => 'LB', 'value' => 'LB' )
    )
	);
}


add_filter( 'gform_column_input_51_47_2', 'set_column_51_47_2', 10, 5 );

function set_column_51_47_2($input_info, $field, $column, $value, $form_id ){
		   return array( 
		'type' => 'select', 
		'choices' => array(
        array( 'text' => '20GP', 'value' => '20GP' ),
		array( 'text' => '40GP', 'value' => '40GP' ),
		array( 'text' => '40HC', 'value' => '40HC' ),
        array( 'text' => '40RF', 'value' => '40RF' ),
		array( 'text' => '45HC', 'value' => '45HC' )
    )
	);
}

?>