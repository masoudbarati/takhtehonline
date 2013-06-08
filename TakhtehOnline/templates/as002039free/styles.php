<style type="text/css">

/***************************************************************************************/
/*
/*		Designed by 'AS Designing'
/*		Web: http://www.asdesigning.com
/*		License: ASDE Commercial
/*
/**************************************************************************************/

/**************************************************************************************/
/**************************************************************************************/
/*   Elements
/**************************************************************************************/
/**************************************************************************************/


body
{
	<?php echo $body_fontfamily; ?>;
	font-size: <?php echo $body_fontsize; ?>;
	font-style: <?php echo $body_fontstyle; ?>;
	font-weight: <?php echo $body_fontweight; ?>;
	<?php echo $body_bgcolor; ?>
	<?php echo $body_bgpattern; ?>
}

.wrapper
{
}


/**************************************************************************************/
/*   Header
/**************************************************************************************/
/**************************************************************************************/


#header
{
	font-size: <?php echo $body_fontsize; ?>;
	font-weight: <?php echo $body_fontweight; ?>;
	font-style: <?php echo $body_fontstyle; ?>;
	<?php echo $body_fontfamily; ?>; 
}

#header .content
{
	width: <?php echo $content_width; ?>px;		
}

/**************************************************************************************/
/*   Header Row 0					      											  */



#header .row0 .content
{
	width: <?php echo $page_width; ?>px;		
}


/**************************************************************************************/
/*   Header Row 1					      											  */


#header .row1
{
	<?php echo $logo_txtcolor; ?>
}

#header .row1 .content
{
	width: <?php echo $page_width; ?>px;		
}

#header .row1 #companyname
{
}

#header .row1 #companyname,
#header .row1 #companyname a
{
    font-size: <?php echo $logo_txtfontsize; ?>;
    font-style: <?php echo $logo_txtfontstyle; ?>;
    font-weight: <?php echo $logo_txtfontweight; ?>;
	<?php echo $logo_txtcolor; ?>
	<?php echo $body_hfontfamily; ?>;			
}

#header .row1 #companyname a:hover
{
	<?php echo $logo_txtcolor; ?>
}

#header .row1 .slogan
{
    font-size: <?php echo $slogan_txtfontsize; ?>;
    font-style: <?php echo $slogan_txtfontstyle; ?>;
    font-weight: <?php echo $slogan_txtfontweight; ?>;
	<?php echo $slogan_txtcolor; ?>
	<?php echo $body_hfontfamily; ?>;			
}

.companycontacts
{
	<?php echo $slogan_txtcolor; ?>
	<?php echo $body_hfontfamily; ?>;				
}

.companycontacts .callnow b
{
	<?php echo $logo_txtcolor; ?>
}


/**************************************************************************************/
/*   Header Row 3																	  */


#header .row3 .content
{
	width: <?php echo $page_width; ?>px;		
}

#header .row3col2
{
	width: <?php echo $row3col2_width; ?>;
}


/**************************************************************************************/
/*  Breadcrums				  														  */

.breadrow
{
}

.breadrow .content
{
	font-size: <?php echo $breadrow_fontsize; ?>;
	font-weight: <?php echo $breadrow_fontweight; ?>;
	width: <?php echo $content_width; ?>px;	
}

#breadcrumb
{
	text-transform: <?php echo $breadrow_texttransform; ?>;
	text-align: <?php echo $breadrow_textalign; ?>; 
	<?php echo $breadrow_fontcolor; ?>
}

#breadcrumb a
{
	<?php echo $breadrow_hoverfontcolor; ?>;
}

#breadcrumb a:hover
{
	<?php echo $breadrow_fontcolor; ?>
}

.breadrow #search input
{
	<?php echo $body_fontfamily; ?>;
	font-size: <?php echo $body_fontsize; ?>;
	font-style: <?php echo $body_fontstyle; ?>;
	font-weight: <?php echo $body_fontweight; ?>;	
	<?php echo $breadrow_fontcolor; ?>
}


/**************************************************************************************/
/**************************************************************************************/
/*   Content
/**************************************************************************************/
/**************************************************************************************/

#content
{
	width: <?php echo $content_width; ?>px;	
}


/**************************************************************************************/
/*   Column Left
/**************************************************************************************/
/**************************************************************************************/

#colleft
{
	width: <?php echo $sidebar_width; ?>px;
	margin: 0px <?php echo $padding; ?>px 0px 0px;		
}

#colleft input
{
	width: <?php echo $sidecolumn123_inputwidth; ?>px;
}


/**************************************************************************************/
/*   Column Main 
/**************************************************************************************/
/**************************************************************************************/

#colmain
{
	width: <?php echo $main_width; ?>px;
	float: <?php echo $main_location; ?>;
}

#colmain #component,
#cmp_content
{
	width: <?php echo $main_componentwidth; ?>px;
	<?php echo $body_fontfamily; ?>;
	font-size: <?php echo $body_fontsize; ?>;
	font-style: <?php echo $body_fontstyle; ?>;
	font-weight: <?php echo $body_fontweight; ?>;
}

#colmain #component .innerborder
{
	border: 1px solid none;
}

#colmain #component h1,
#colmain #component h2,
#colmain #component h3,
#colmain #adsense h1,
#colmain #adsense h2,
#colmain #adsense h3,
#cmp_colmain h1,
#cmp_colmain h2,
#cmp_colmain h3
{
	padding: 8px <?php echo $main_modulepadding; ?>px 8px <?php echo $main_modulepadding; ?>px;		
}

#colmain input,
#colmain textarea
{
	<?php echo $body_fontfamily; ?>;
}

#colmain input[type="checkbox"],
#colmain input[type="radio"]
{
	background-color: transparent !important!
}

#colmain #component .article-info,
#cmp_colmain .article-info
{
	padding: 8px <?php echo $main_modulepadding; ?>px 8px <?php echo $main_modulepadding; ?>px;		
}

#colmain #component .blog p.readmore a span
{
}

#colmain .blog-featured .items-row.row-<?php echo $featured_rows; ?> .item-separator
{
	height: 0px !important;
}

#colmain .cols-2 .column-1,
#colmain .cols-2 .column-2
{
    width: <?php echo $main_blogcols2width;  ?>px;
}

#colmain .cols-3 .column-1,
#colmain .cols-3 .column-2,
#colmain .cols-3 .column-3
{
    width: <?php echo $main_blogcols3width;  ?>px;
}

#colmain .cols-4 .column-1,
#colmain .cols-4 .column-2,
#colmain .cols-4 .column-3,
#colmain .cols-4 .column-4
{
    width: <?php echo $main_blogcols4width;  ?>px;
}

#colmain .cols-2 .column-1,
#colmain .cols-3 .column-1,
#colmain .cols-3 .column-2,
#colmain .cols-4 .column-1,
#colmain .cols-4 .column-2,
#colmain .cols-4 .column-3
{
    margin: 0px <?php echo $padding;  ?>px 0px 0px;
}

#colmain .cols-2 .column-2,
#colmain .cols-3 .column-3,
#colmain .cols-4 .column-4
{
    margin: 0px 0px 0px 0px;
}


/**************************************************************************************/
/**************************************************************************************/
/*   General Element IDs and classes
/**************************************************************************************/
/**************************************************************************************/

button, 
.button, 
.validate, 
.readmore, 
#component p.readmore
{
	<?php echo $body_hfontfamily; ?>;
}


/**************************************************************************************/
/**************************************************************************************/
/*   Custom CSS
/**************************************************************************************/
/**************************************************************************************/


<?php echo $custom_css; ?>


</style>