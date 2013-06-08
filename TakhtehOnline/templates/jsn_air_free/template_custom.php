<?php
$jsnutils = JSNTplUtils::getInstance();
$doc = $this->_document;

// Count module instances
$doc->hasRight		= $jsnutils->countModules('right');
$doc->hasLeft		= $jsnutils->countModules('left');
$doc->hasPromo		= $jsnutils->countModules('promo');
$doc->hasPromoLeft	= $jsnutils->countModules('promo-left');
$doc->hasPromoRight	= $jsnutils->countModules('promo-right');
$doc->hasInnerLeft	= $jsnutils->countModules('innerleft');
$doc->hasInnerRight	= $jsnutils->countModules('innerright');

$doc->columnPromoLeft	= $doc->params->get('columnPromoLeft', 23);
$doc->columnPromoRight	= $doc->params->get('columnPromoRight', 23);
$doc->columnLeft		= $doc->params->get('columnLeft', 23);
$doc->columnRight		= $doc->params->get('columnRight', 23);
$doc->columnInnerleft	= $doc->params->get('columnInnerleft', 28);
$doc->columnInnerright	= $doc->params->get('columnInnerright', 28);
$doc->templateColors	= array('pink', 'red', 'green', 'brown', 'orange', 'cyan');

if (isset($doc->sitetoolsColorsItems)) {
	$this->_document->templateColors = $doc->sitetoolsColorsItems;
}

// apply K2 style
if ($jsnutils->checkK2()) {
	$doc->addStylesheet($doc->templateUrl . "/ext/k2/jsn_ext_k2.css");
}

$tw				= 100;
$ieOffset		= 0;

$customCss = '
	#jsn-page {
		min-width: ' . $doc->templateWidth . ';
	}
	#jsn-header-top,
	#jsn-header-bottom-inner,
	#jsn-content,
	#jsn-promo-inner,
	#jsn-pos-content-top,
	#jsn-pos-promo_inner,
	#jsn-pos-content-bottom-over,
	#jsn-content-bottom-inner,
	#jsn-footer-inner {
		width: ' . $doc->templateWidth . ';
	}
	#jsn-pos-promo-left {
		float: left;
		width: ' . $doc->columnPromoLeft . '%;
		left: -' . ($tw - $ieOffset) . '%;
	}
	#jsn-pos-promo {
		width: ' . ($tw - $ieOffset) . '%;
		left: '.($doc->hasPromoLeft ? $doc->columnPromoLeft . '%' : 0) . ';
	}
	#jsn-pos-promo-right {
		float: right;
		width: ' . $doc->columnPromoRight . '%;
	}
';

if ($doc->hasPromoRight) {
	$tw -= $doc->columnPromoRight;
	$customCss .= '
		#jsn-pos-promo {
			float: left;
			width: ' . ($tw - $ieOffset) . '%;
		}
	';
}

if ($doc->hasPromoLeft) {
	$tw -= $doc->columnPromoLeft;
	$customCss .= '
		#jsn-pos-promo {
			width: ' . ($tw - $ieOffset) . '%;
			float: right;
			left: auto;
		}
		#jsn-pos-promo-left { left: auto; }
	';
}

if ($doc->hasPromoLeft && $doc->hasPromoRight) {
	$tw -= $doc->columnPromoLeft;
	$customCss .= '
		#jsn-pos-promo {
			float: left;
			left: ' . ($doc->hasPromoLeft ? $doc->columnPromoLeft . '%' : 0) . ';
		}
		#jsn-pos-promo-left { left: -' . ($tw + $doc->columnPromoLeft) . '%; }
	';
}

if (!$doc->hasPromo) {
	$customCss .= '
		#jsn-pos-promo-left {
			left: auto;
			display: auto;
		}
	';
}

// Setup width of content area
$tw = 100;
if ($doc->hasLeft) {
	$tw -= $doc->columnLeft;
}
if ($doc->hasRight) {
	$tw -= $doc->columnRight;
}

$customCss .= '
	#jsn-leftsidecontent {
		float: left;
		width: ' . $doc->columnLeft . '%;
		left: -' . ($tw - $ieOffset) . '%;
	}
	#jsn-maincontent {
		float: left;
		width: ' . ($tw - $ieOffset) . '%;
		left: ' . ($doc->hasLeft ? $doc->columnLeft . '%' : 0) . ';
	}
	#jsn-rightsidecontent {
		float: right;
		width: ' . $doc->columnRight . '%;
	}
';

$tw = 100;
if ($doc->hasInnerLeft)
	$tw -= $doc->columnInnerleft;

if ($doc->hasInnerRight)
	$tw -= $doc->columnInnerright;

$customCss .= '
	#jsn-pos-innerleft {
		float: left;
		width: ' . $doc->columnInnerleft . '%;
		left: -' . ($tw - $ieOffset) . '%;
	}
	#mainbody-content-inner {
		float: left;
		width: ' . ($tw - $ieOffset) . '%;
		left: '.($doc->hasInnerLeft ? $doc->columnInnerleft . '%' : 0) . ';
	}
	#jsn-pos-innerright {
		float: right;
		width: ' . $doc->columnInnerright . '%;
	}
';

$doc->addStyleDeclaration($customCss);
