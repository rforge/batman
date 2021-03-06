
<!-- This is the project specific website template -->
<!-- It can be changed as liked or replaced by other content -->

<?php

$domain=ereg_replace('[^\.]*\.(.*)$','\1',$_SERVER['HTTP_HOST']);
$group_name=ereg_replace('([^\.]*)\..*$','\1',$_SERVER['HTTP_HOST']);
$themeroot='http://r-forge.r-project.org/themes/rforge/';

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en   ">

  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title><?php echo $group_name; ?></title>
	<link href="<?php echo $themeroot; ?>styles/estilo1.css" rel="stylesheet" type="text/css" />
  </head>

<body>

<!-- batman Logo -->
<table border="0" width="100%" cellspacing="0" cellpadding="0">
<tr><td>
<a href="/"><img src="batmanlogo.png" border="0" alt="batman Logo" /> </a> </td> </tr>
</table>


<!-- get project title  -->
<!-- own website starts here, the following may be changed as you like -->

<?php 
    echo "<font size='18'>Welcome to the BATMAN project!</font>";
?>


<p> BATMAN is an R package for estimating metabolite concentrations from Nuclear Magnetic Resonance spectral data using a specialised MCMC algorithm. It deconvolutes peaks from 1-dimensional NMR spectra, automatically assigns them to specific metabolites from a target list and obtains concentration estimates. The Bayesian model incorporates information on characteristic peak patterns of metabolites and is able to account for shifts in the position of peaks commonly seen in NMR spectra of biological samples. It applies a Markov Chain Monte Carlo (MCMC) algorithm to sample from a joint posterior distribution of the model parameters and obtains concentration estimates with reduced error compared with conventional numerical integration and comparable to manual deconvolution by experienced spectroscopists. </p>

<p> The <strong>project summary page</strong> you can find <a href="http://<?php echo $domain; ?>/projects/<?php echo $group_name; ?>/"><strong>here</strong></a>. </p>
<p> The <strong>project documentation page</strong> you can find <a href="https://r-forge.r-project.org/scm/viewvc.php/*checkout*/documentation and test/batman.pdf?root=batman"><strong>here</strong></a>. </p>
<p> The <strong>installation and testing instructions and Test 4 dataset </strong> you can find <a href="https://r-forge.r-project.org/scm/viewvc.php/documentation%20and%20test/?root=batman"><strong>here</strong></a>. </p>
<p> The <strong>project source code and files page</strong> you can find <a href="https://r-forge.r-project.org/scm/viewvc.php/?root=batman"><strong>here</strong></a>. </p>
<p> The <strong>SplineFitBATMAN</strong> (MATLAB code) you can find <a href="https://r-forge.r-project.org/scm/viewvc.php/SplineFitBATMAN_MATLABcode/?root=batman"><strong>here</strong></a>. </p>

<p>
<H4>
References:
</H4>
</p>

<p> Hao J., Liebeke M., Astle W., De Iorio M., Bundy J. G. & Ebbels T. M., Bayesian deconvolution and quantification of metabolites in complex 1D NMR spectra using BATMAN, Nature Protocols, 9, 1416-1427 (2014).</p>

<p> Hao J., Astle W., De Iorio M. & Ebbels T. M., BATMAN--an R package for the automated quantification of metabolites from nuclear magnetic resonance spectra using a Bayesian model. Bioinformatics 28, 2088-2090 (2012).</p>

<p> Astle W., De Iorio M., Richardson S., Stephens D. & Ebbels T. M., A Bayesian model of NMR spectra for the deconvolution and quantification of metabolites in complex biological mixtures. J Am Stat Assoc 107, 1259-1271 (2012). </p>

<p> Liebeke M., Hao J., Ebbels T. M., Bundy J. G., Combining Spectral Ordering with Peak Fitting for One-Dimensional NMR Quantitative Metabolomics., Anal Chem, 85 (9), 4605–4612 (2013). </p>

<!-- batman figure -->
<table border="0" width="100%" cellspacing="0" cellpadding="0">
<tr><td>
<a href="/"><img src="batman_Fig.png" border="0" alt="batman Result plot" /> </a> </td> </tr>
</table>

</body>
</html>
