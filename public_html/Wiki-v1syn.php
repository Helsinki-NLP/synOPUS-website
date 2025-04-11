<?php include("count.php"); ?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	 "http://www.w3.org/TR/html4/loose.dtd">
<html><head><title>Wiki</title>
<link rev="made" href="mailto:opus-project">

<meta name="robots" content="NOFOLLOW">
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<div class="header"><?php include("header.php"); ?></div><script>
function toggleSection(c) {
  var d = ["samples","download-xml","download-tmx","download-moses"];
  for (var i = 0; i < d.length; i++) {
    if ( d[i] != c) {
      var y = document.getElementById(d[i]);
      if (y.style.display != "none"){
        y.style.display = "none";
      }
    }
  }
  var x = document.getElementById(c);
  if (x.style.display != "block"){
     x.style.display = "block";
  }
}
</script><h1>Wiki v1syn</h1><a href="https://github.com/Helsinki-NLP/Tatoeba-Challenge/blob/master/data/Backtranslations.md">Automatically translated data sets</a> that can be used for data augmentation Translations have been done with models trained on the Tatoeba MT challenge data. We include translations of Wikipedia, WikiSource, WikiBooks, WikiNews and WikiQuote (if available for the source language we translate from). Translations are done on shuffled, de-duplicated data sets and they come in blocks of at most one million sentences per file. The original datasets are taken from <a href="https://dumps.wikimedia.org/other/cirrussearch/">cirrussearch wiki dumps</a>. The original back-translations have been checked with the <a href="https://pypi.org/project/heliport/">heliport language identification tool</a> and mismatched sentence pairs are excluded from this distribution.<p>165 languages, 172 bitexts</br>
total number of files: 601</br>
total number of tokens: 13.0G</br>
total number of sentences: 706.4M</br></p>
Please, acknowledge the Wikimedia Foundation for the data and cite the following paper if you use data from this distribution: <pre> @inproceedings{tiedemann-2020-ttc,<br/> title = "The {T}atoeba {T}ranslation {C}hallenge -- {R}ealistic Data Sets for Low Resource and Multilingual {MT}",<br/> author = {Tiedemann, J{"o}rg},<br/> booktitle = "Proceedings of the Fifth Conference on Machine Translation (Volume 1: Research Papers)", year = "2020",<br/> publisher = "Association for Computational Linguistics",<br/> url = {https://arxiv.org/abs/2010.06354}<br/> } </pre><h3>Download</h3><p>Below you can download data files for all language pairs in different formats and with different kind of annotation (if available). You can click on the various links as explained below.</p><p><b>License:</b> <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC-BY-SA 4.0</a><br/></p><ul><li><a onclick="toggleSection('samples')">Corpus sample files (click to show)</a></li><li><a onclick="toggleSection('download-xml')">Download corpus in their native XML format (click to show)</a></li>
<li><a onclick="toggleSection('download-moses')">Download corpus in plain text format (click to show)</a></li>
</ul><div id='samples' style='display: none;'>
<p>Links to sample files from monolingual corpus files (language-ID links) and bitexts (click on 'view')</p><p><div class="sample"><table border="0" cellpadding="0">
<tr><th></th>
<th><a rel="nofollow" href="Wiki/v1syn/de_sample.html">de</a></th>
<th><a rel="nofollow" href="Wiki/v1syn/en_sample.html">en</a></th>
<th><a rel="nofollow" href="Wiki/v1syn/et_sample.html">et</a></th>
<th><a rel="nofollow" href="Wiki/v1syn/fi_sample.html">fi</a></th>
<th><a rel="nofollow" href="Wiki/v1syn/ru_sample.html">ru</a></th>
<th><a rel="nofollow" href="Wiki/v1syn/sv_sample.html">sv</a></th>
<th></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/ab_sample.html">ab</a></th>
<td></td><td><a rel="nofollow" title="Abkhazian-English (sample file)" href="Wiki/v1syn/ab-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/ab_sample.html">ab</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/ady_sample.html">ady</a></th>
<td></td><td><a rel="nofollow" title="Adyghe-English (sample file)" href="Wiki/v1syn/ady-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/ady_sample.html">ady</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/af_sample.html">af</a></th>
<td></td><td><a rel="nofollow" title="Afrikaans-English (sample file)" href="Wiki/v1syn/af-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/af_sample.html">af</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/am_sample.html">am</a></th>
<td></td><td><a rel="nofollow" title="Amharic-English (sample file)" href="Wiki/v1syn/am-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/am_sample.html">am</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/an_sample.html">an</a></th>
<td></td><td><a rel="nofollow" title="Aragonese-English (sample file)" href="Wiki/v1syn/an-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/an_sample.html">an</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/ang_sample.html">ang</a></th>
<td></td><td><a rel="nofollow" title="English, Old (ca.450-1100)-English (sample file)" href="Wiki/v1syn/ang-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/ang_sample.html">ang</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/ar_sample.html">ar</a></th>
<td></td><td><a rel="nofollow" title="Arabic-English (sample file)" href="Wiki/v1syn/ar-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/ar_sample.html">ar</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/as_sample.html">as</a></th>
<td></td><td><a rel="nofollow" title="Assamese-English (sample file)" href="Wiki/v1syn/as-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/as_sample.html">as</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/ast_sample.html">ast</a></th>
<td></td><td><a rel="nofollow" title="Asturian-English (sample file)" href="Wiki/v1syn/ast-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/ast_sample.html">ast</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/awa_sample.html">awa</a></th>
<td></td><td><a rel="nofollow" title="Awadhi-English (sample file)" href="Wiki/v1syn/awa-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/awa_sample.html">awa</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/az_sample.html">az</a></th>
<td></td><td><a rel="nofollow" title="Azerbaijani-English (sample file)" href="Wiki/v1syn/az-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/az_sample.html">az</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/ba_sample.html">ba</a></th>
<td></td><td><a rel="nofollow" title="Bashkir-English (sample file)" href="Wiki/v1syn/ba-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/ba_sample.html">ba</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/bar_sample.html">bar</a></th>
<td></td><td><a rel="nofollow" title="bar-English (sample file)" href="Wiki/v1syn/bar-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/bar_sample.html">bar</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/be_sample.html">be</a></th>
<td></td><td><a rel="nofollow" title="Belarusian-English (sample file)" href="Wiki/v1syn/be-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/be_sample.html">be</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/bg_sample.html">bg</a></th>
<td></td><td><a rel="nofollow" title="Bulgarian-English (sample file)" href="Wiki/v1syn/bg-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/bg_sample.html">bg</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/bm_sample.html">bm</a></th>
<td></td><td><a rel="nofollow" title="Bambara-English (sample file)" href="Wiki/v1syn/bm-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/bm_sample.html">bm</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/bn_sample.html">bn</a></th>
<td></td><td><a rel="nofollow" title="Bengali-English (sample file)" href="Wiki/v1syn/bn-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/bn_sample.html">bn</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/bo_sample.html">bo</a></th>
<td></td><td><a rel="nofollow" title="Tibetan-English (sample file)" href="Wiki/v1syn/bo-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/bo_sample.html">bo</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/br_sample.html">br</a></th>
<td></td><td><a rel="nofollow" title="Breton-English (sample file)" href="Wiki/v1syn/br-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/br_sample.html">br</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/ca_sample.html">ca</a></th>
<td></td><td><a rel="nofollow" title="Catalan-English (sample file)" href="Wiki/v1syn/ca-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/ca_sample.html">ca</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/ce_sample.html">ce</a></th>
<td></td><td><a rel="nofollow" title="Chechen-English (sample file)" href="Wiki/v1syn/ce-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/ce_sample.html">ce</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/chr_sample.html">chr</a></th>
<td></td><td><a rel="nofollow" title="Cherokee-English (sample file)" href="Wiki/v1syn/chr-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/chr_sample.html">chr</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/co_sample.html">co</a></th>
<td></td><td><a rel="nofollow" title="Corsican-English (sample file)" href="Wiki/v1syn/co-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/co_sample.html">co</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/crh_sample.html">crh</a></th>
<td></td><td><a rel="nofollow" title="Crimean Tatar-English (sample file)" href="Wiki/v1syn/crh-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/crh_sample.html">crh</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/cs_sample.html">cs</a></th>
<td></td><td><a rel="nofollow" title="Czech-English (sample file)" href="Wiki/v1syn/cs-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/cs_sample.html">cs</a></th></tr>
<tr><th></th>
<th>de</th>
<th>en</th>
<th>et</th>
<th>fi</th>
<th>ru</th>
<th>sv</th>
<th></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/csb_sample.html">csb</a></th>
<td></td><td><a rel="nofollow" title="Kashubian-English (sample file)" href="Wiki/v1syn/csb-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/csb_sample.html">csb</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/cy_sample.html">cy</a></th>
<td></td><td><a rel="nofollow" title="Welsh-English (sample file)" href="Wiki/v1syn/cy-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/cy_sample.html">cy</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/da_sample.html">da</a></th>
<td></td><td><a rel="nofollow" title="Danish-English (sample file)" href="Wiki/v1syn/da-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/da_sample.html">da</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/de_sample.html">de</a></th>
<td></td><td><a rel="nofollow" title="German-English (sample file)" href="Wiki/v1syn/de-en_sample.html">view</a></td><td></td><td><a rel="nofollow" title="German-Finnish (sample file)" href="Wiki/v1syn/de-fi_sample.html">view</a></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/de_sample.html">de</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/dsb_sample.html">dsb</a></th>
<td></td><td><a rel="nofollow" title="Lower Sorbian-English (sample file)" href="Wiki/v1syn/dsb-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/dsb_sample.html">dsb</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/el_sample.html">el</a></th>
<td></td><td><a rel="nofollow" title="Greek-English (sample file)" href="Wiki/v1syn/el-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/el_sample.html">el</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/eo_sample.html">eo</a></th>
<td></td><td><a rel="nofollow" title="Esperanto-English (sample file)" href="Wiki/v1syn/eo-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/eo_sample.html">eo</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/es_sample.html">es</a></th>
<td></td><td><a rel="nofollow" title="Spanish-English (sample file)" href="Wiki/v1syn/es-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/es_sample.html">es</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/et_sample.html">et</a></th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Estonian-Finnish (sample file)" href="Wiki/v1syn/et-fi_sample.html">view</a></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/et_sample.html">et</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/eu_sample.html">eu</a></th>
<td></td><td><a rel="nofollow" title="Basque-English (sample file)" href="Wiki/v1syn/eu-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/eu_sample.html">eu</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/ext_sample.html">ext</a></th>
<td></td><td><a rel="nofollow" title="ext-English (sample file)" href="Wiki/v1syn/ext-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/ext_sample.html">ext</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/fa_sample.html">fa</a></th>
<td></td><td><a rel="nofollow" title="Persian-English (sample file)" href="Wiki/v1syn/fa-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/fa_sample.html">fa</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/ff_sample.html">ff</a></th>
<td></td><td><a rel="nofollow" title="Fulah-English (sample file)" href="Wiki/v1syn/ff-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/ff_sample.html">ff</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/fi_sample.html">fi</a></th>
<td><a rel="nofollow" title="Finnish-German (sample file)" href="Wiki/v1syn/fi-de_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-English (sample file)" href="Wiki/v1syn/fi-en_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Estonian (sample file)" href="Wiki/v1syn/fi-et_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Finnish-Russian (sample file)" href="Wiki/v1syn/fi-ru_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Swedish (sample file)" href="Wiki/v1syn/fi-sv_sample.html">view</a></td><th><a rel="nofollow" href="Wiki/v1syn/fi_sample.html">fi</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/fj_sample.html">fj</a></th>
<td></td><td><a rel="nofollow" title="Fijian-English (sample file)" href="Wiki/v1syn/fj-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/fj_sample.html">fj</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/fo_sample.html">fo</a></th>
<td></td><td><a rel="nofollow" title="Faroese-English (sample file)" href="Wiki/v1syn/fo-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/fo_sample.html">fo</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/fr_sample.html">fr</a></th>
<td></td><td><a rel="nofollow" title="French-English (sample file)" href="Wiki/v1syn/fr-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/fr_sample.html">fr</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/frr_sample.html">frr</a></th>
<td></td><td><a rel="nofollow" title="Northern Frisian-English (sample file)" href="Wiki/v1syn/frr-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/frr_sample.html">frr</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/fy_sample.html">fy</a></th>
<td></td><td><a rel="nofollow" title="Western Frisian-English (sample file)" href="Wiki/v1syn/fy-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/fy_sample.html">fy</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/ga_sample.html">ga</a></th>
<td></td><td><a rel="nofollow" title="Irish-English (sample file)" href="Wiki/v1syn/ga-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/ga_sample.html">ga</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/gl_sample.html">gl</a></th>
<td></td><td><a rel="nofollow" title="Galician-English (sample file)" href="Wiki/v1syn/gl-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/gl_sample.html">gl</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/gn_sample.html">gn</a></th>
<td></td><td><a rel="nofollow" title="Guarani-English (sample file)" href="Wiki/v1syn/gn-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/gn_sample.html">gn</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/got_sample.html">got</a></th>
<td></td><td><a rel="nofollow" title="Gothic-English (sample file)" href="Wiki/v1syn/got-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/got_sample.html">got</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/gu_sample.html">gu</a></th>
<td></td><td><a rel="nofollow" title="Gujarati-English (sample file)" href="Wiki/v1syn/gu-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/gu_sample.html">gu</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/gv_sample.html">gv</a></th>
<td></td><td><a rel="nofollow" title="Manx-English (sample file)" href="Wiki/v1syn/gv-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/gv_sample.html">gv</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/haw_sample.html">haw</a></th>
<td></td><td><a rel="nofollow" title="Hawaiian-English (sample file)" href="Wiki/v1syn/haw-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/haw_sample.html">haw</a></th></tr>
<tr><th></th>
<th>de</th>
<th>en</th>
<th>et</th>
<th>fi</th>
<th>ru</th>
<th>sv</th>
<th></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/hif_sample.html">hif</a></th>
<td></td><td><a rel="nofollow" title="hif-English (sample file)" href="Wiki/v1syn/hif-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/hif_sample.html">hif</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/hsb_sample.html">hsb</a></th>
<td></td><td><a rel="nofollow" title="Upper Sorbian-English (sample file)" href="Wiki/v1syn/hsb-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/hsb_sample.html">hsb</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/ht_sample.html">ht</a></th>
<td></td><td><a rel="nofollow" title="Haitian-English (sample file)" href="Wiki/v1syn/ht-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/ht_sample.html">ht</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/hu_sample.html">hu</a></th>
<td></td><td><a rel="nofollow" title="Hungarian-English (sample file)" href="Wiki/v1syn/hu-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/hu_sample.html">hu</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/hy_sample.html">hy</a></th>
<td></td><td><a rel="nofollow" title="Armenian-English (sample file)" href="Wiki/v1syn/hy-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/hy_sample.html">hy</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/ia_sample.html">ia</a></th>
<td></td><td><a rel="nofollow" title="Interlingua (International Auxiliary Language Association)-English (sample file)" href="Wiki/v1syn/ia-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/ia_sample.html">ia</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/ie_sample.html">ie</a></th>
<td></td><td><a rel="nofollow" title="Interlingue-English (sample file)" href="Wiki/v1syn/ie-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/ie_sample.html">ie</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/ig_sample.html">ig</a></th>
<td></td><td><a rel="nofollow" title="Igbo-English (sample file)" href="Wiki/v1syn/ig-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/ig_sample.html">ig</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/ilo_sample.html">ilo</a></th>
<td></td><td><a rel="nofollow" title="Iloko-English (sample file)" href="Wiki/v1syn/ilo-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/ilo_sample.html">ilo</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/io_sample.html">io</a></th>
<td></td><td><a rel="nofollow" title="Ido-English (sample file)" href="Wiki/v1syn/io-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/io_sample.html">io</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/it_sample.html">it</a></th>
<td></td><td><a rel="nofollow" title="Italian-English (sample file)" href="Wiki/v1syn/it-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/it_sample.html">it</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/iu_sample.html">iu</a></th>
<td></td><td><a rel="nofollow" title="Inuktitut-English (sample file)" href="Wiki/v1syn/iu-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/iu_sample.html">iu</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/jam_sample.html">jam</a></th>
<td></td><td><a rel="nofollow" title="jam-English (sample file)" href="Wiki/v1syn/jam-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/jam_sample.html">jam</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/jbo_sample.html">jbo</a></th>
<td></td><td><a rel="nofollow" title="Lojban-English (sample file)" href="Wiki/v1syn/jbo-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/jbo_sample.html">jbo</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/jv_sample.html">jv</a></th>
<td></td><td><a rel="nofollow" title="Javanese-English (sample file)" href="Wiki/v1syn/jv-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/jv_sample.html">jv</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/ka_sample.html">ka</a></th>
<td></td><td><a rel="nofollow" title="Georgian-English (sample file)" href="Wiki/v1syn/ka-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/ka_sample.html">ka</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/kab_sample.html">kab</a></th>
<td></td><td><a rel="nofollow" title="Kabyle-English (sample file)" href="Wiki/v1syn/kab-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/kab_sample.html">kab</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/kk_sample.html">kk</a></th>
<td></td><td><a rel="nofollow" title="Kazakh-English (sample file)" href="Wiki/v1syn/kk-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/kk_sample.html">kk</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/kl_sample.html">kl</a></th>
<td></td><td><a rel="nofollow" title="Kalaallisut-English (sample file)" href="Wiki/v1syn/kl-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/kl_sample.html">kl</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/km_sample.html">km</a></th>
<td></td><td><a rel="nofollow" title="Central Khmer-English (sample file)" href="Wiki/v1syn/km-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/km_sample.html">km</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/kn_sample.html">kn</a></th>
<td></td><td><a rel="nofollow" title="Kannada-English (sample file)" href="Wiki/v1syn/kn-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/kn_sample.html">kn</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/ko_sample.html">ko</a></th>
<td></td><td><a rel="nofollow" title="Korean-English (sample file)" href="Wiki/v1syn/ko-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/ko_sample.html">ko</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/ku_sample.html">ku</a></th>
<td></td><td><a rel="nofollow" title="Kurdish-English (sample file)" href="Wiki/v1syn/ku-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/ku_sample.html">ku</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/kv_sample.html">kv</a></th>
<td></td><td><a rel="nofollow" title="Komi-English (sample file)" href="Wiki/v1syn/kv-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/kv_sample.html">kv</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/kw_sample.html">kw</a></th>
<td></td><td><a rel="nofollow" title="Cornish-English (sample file)" href="Wiki/v1syn/kw-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/kw_sample.html">kw</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/lad_sample.html">lad</a></th>
<td></td><td><a rel="nofollow" title="Ladino-English (sample file)" href="Wiki/v1syn/lad-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/lad_sample.html">lad</a></th></tr>
<tr><th></th>
<th>de</th>
<th>en</th>
<th>et</th>
<th>fi</th>
<th>ru</th>
<th>sv</th>
<th></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/lb_sample.html">lb</a></th>
<td></td><td><a rel="nofollow" title="Luxembourgish-English (sample file)" href="Wiki/v1syn/lb-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/lb_sample.html">lb</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/lfn_sample.html">lfn</a></th>
<td></td><td><a rel="nofollow" title="lfn-English (sample file)" href="Wiki/v1syn/lfn-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/lfn_sample.html">lfn</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/lg_sample.html">lg</a></th>
<td></td><td><a rel="nofollow" title="Ganda-English (sample file)" href="Wiki/v1syn/lg-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/lg_sample.html">lg</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/lij_sample.html">lij</a></th>
<td></td><td><a rel="nofollow" title="lij-English (sample file)" href="Wiki/v1syn/lij-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/lij_sample.html">lij</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/lmo_sample.html">lmo</a></th>
<td></td><td><a rel="nofollow" title="lmo-English (sample file)" href="Wiki/v1syn/lmo-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/lmo_sample.html">lmo</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/ln_sample.html">ln</a></th>
<td></td><td><a rel="nofollow" title="Lingala-English (sample file)" href="Wiki/v1syn/ln-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/ln_sample.html">ln</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/lo_sample.html">lo</a></th>
<td></td><td><a rel="nofollow" title="Lao-English (sample file)" href="Wiki/v1syn/lo-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/lo_sample.html">lo</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/lt_sample.html">lt</a></th>
<td></td><td><a rel="nofollow" title="Lithuanian-English (sample file)" href="Wiki/v1syn/lt-en_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Lithuanian-Finnish (sample file)" href="Wiki/v1syn/lt-fi_sample.html">view</a></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/lt_sample.html">lt</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/lv_sample.html">lv</a></th>
<td></td><td><a rel="nofollow" title="Latvian-English (sample file)" href="Wiki/v1syn/lv-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/lv_sample.html">lv</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/mai_sample.html">mai</a></th>
<td></td><td><a rel="nofollow" title="Maithili-English (sample file)" href="Wiki/v1syn/mai-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/mai_sample.html">mai</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/mdf_sample.html">mdf</a></th>
<td></td><td><a rel="nofollow" title="Moksha-English (sample file)" href="Wiki/v1syn/mdf-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/mdf_sample.html">mdf</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/mg_sample.html">mg</a></th>
<td></td><td><a rel="nofollow" title="Malagasy-English (sample file)" href="Wiki/v1syn/mg-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/mg_sample.html">mg</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/mh_sample.html">mh</a></th>
<td></td><td><a rel="nofollow" title="Marshallese-English (sample file)" href="Wiki/v1syn/mh-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/mh_sample.html">mh</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/mk_sample.html">mk</a></th>
<td></td><td><a rel="nofollow" title="Macedonian-English (sample file)" href="Wiki/v1syn/mk-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/mk_sample.html">mk</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/ml_sample.html">ml</a></th>
<td></td><td><a rel="nofollow" title="Malayalam-English (sample file)" href="Wiki/v1syn/ml-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/ml_sample.html">ml</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/mn_sample.html">mn</a></th>
<td></td><td><a rel="nofollow" title="Mongolian-English (sample file)" href="Wiki/v1syn/mn-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/mn_sample.html">mn</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/mnw_sample.html">mnw</a></th>
<td></td><td><a rel="nofollow" title="mnw-English (sample file)" href="Wiki/v1syn/mnw-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/mnw_sample.html">mnw</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/mr_sample.html">mr</a></th>
<td></td><td><a rel="nofollow" title="Marathi-English (sample file)" href="Wiki/v1syn/mr-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/mr_sample.html">mr</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/ms_sample.html">ms</a></th>
<td></td><td><a rel="nofollow" title="Malay-English (sample file)" href="Wiki/v1syn/ms-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/ms_sample.html">ms</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/mt_sample.html">mt</a></th>
<td></td><td><a rel="nofollow" title="Maltese-English (sample file)" href="Wiki/v1syn/mt-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/mt_sample.html">mt</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/mwl_sample.html">mwl</a></th>
<td></td><td><a rel="nofollow" title="Mirandese-English (sample file)" href="Wiki/v1syn/mwl-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/mwl_sample.html">mwl</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/my_sample.html">my</a></th>
<td></td><td><a rel="nofollow" title="Burmese-English (sample file)" href="Wiki/v1syn/my-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/my_sample.html">my</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/myv_sample.html">myv</a></th>
<td></td><td><a rel="nofollow" title="Erzya-English (sample file)" href="Wiki/v1syn/myv-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/myv_sample.html">myv</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/na_sample.html">na</a></th>
<td></td><td><a rel="nofollow" title="Nauru-English (sample file)" href="Wiki/v1syn/na-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/na_sample.html">na</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/nds_sample.html">nds</a></th>
<td></td><td><a rel="nofollow" title="Low German-English (sample file)" href="Wiki/v1syn/nds-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/nds_sample.html">nds</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/nl_sample.html">nl</a></th>
<td></td><td><a rel="nofollow" title="Dutch-English (sample file)" href="Wiki/v1syn/nl-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/nl_sample.html">nl</a></th></tr>
<tr><th></th>
<th>de</th>
<th>en</th>
<th>et</th>
<th>fi</th>
<th>ru</th>
<th>sv</th>
<th></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/no_sample.html">no</a></th>
<td></td><td><a rel="nofollow" title="Norwegian-English (sample file)" href="Wiki/v1syn/no-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/no_sample.html">no</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/nov_sample.html">nov</a></th>
<td></td><td><a rel="nofollow" title="nov-English (sample file)" href="Wiki/v1syn/nov-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/nov_sample.html">nov</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/ny_sample.html">ny</a></th>
<td></td><td><a rel="nofollow" title="Chichewa-English (sample file)" href="Wiki/v1syn/ny-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/ny_sample.html">ny</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/oc_sample.html">oc</a></th>
<td></td><td><a rel="nofollow" title="Occitan (post 1500)-English (sample file)" href="Wiki/v1syn/oc-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/oc_sample.html">oc</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/or_sample.html">or</a></th>
<td></td><td><a rel="nofollow" title="Oriya-English (sample file)" href="Wiki/v1syn/or-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/or_sample.html">or</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/pa_sample.html">pa</a></th>
<td></td><td><a rel="nofollow" title="Panjabi-English (sample file)" href="Wiki/v1syn/pa-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/pa_sample.html">pa</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/pag_sample.html">pag</a></th>
<td></td><td><a rel="nofollow" title="Pangasinan-English (sample file)" href="Wiki/v1syn/pag-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/pag_sample.html">pag</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/pap_sample.html">pap</a></th>
<td></td><td><a rel="nofollow" title="Papiamento-English (sample file)" href="Wiki/v1syn/pap-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/pap_sample.html">pap</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/pdc_sample.html">pdc</a></th>
<td></td><td><a rel="nofollow" title="pdc-English (sample file)" href="Wiki/v1syn/pdc-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/pdc_sample.html">pdc</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/pl_sample.html">pl</a></th>
<td></td><td><a rel="nofollow" title="Polish-English (sample file)" href="Wiki/v1syn/pl-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/pl_sample.html">pl</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/pms_sample.html">pms</a></th>
<td></td><td><a rel="nofollow" title="pms-English (sample file)" href="Wiki/v1syn/pms-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/pms_sample.html">pms</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/ps_sample.html">ps</a></th>
<td></td><td><a rel="nofollow" title="Pushto-English (sample file)" href="Wiki/v1syn/ps-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/ps_sample.html">ps</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/pt_sample.html">pt</a></th>
<td></td><td><a rel="nofollow" title="Portuguese-English (sample file)" href="Wiki/v1syn/pt-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/pt_sample.html">pt</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/rm_sample.html">rm</a></th>
<td></td><td><a rel="nofollow" title="Romansh-English (sample file)" href="Wiki/v1syn/rm-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/rm_sample.html">rm</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/rn_sample.html">rn</a></th>
<td></td><td><a rel="nofollow" title="Rundi-English (sample file)" href="Wiki/v1syn/rn-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/rn_sample.html">rn</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/ro_sample.html">ro</a></th>
<td></td><td><a rel="nofollow" title="Romanian-English (sample file)" href="Wiki/v1syn/ro-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/ro_sample.html">ro</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/ru_sample.html">ru</a></th>
<td></td><td><a rel="nofollow" title="Russian-English (sample file)" href="Wiki/v1syn/ru-en_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Russian-Finnish (sample file)" href="Wiki/v1syn/ru-fi_sample.html">view</a></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/ru_sample.html">ru</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/rw_sample.html">rw</a></th>
<td></td><td><a rel="nofollow" title="Kinyarwanda-English (sample file)" href="Wiki/v1syn/rw-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/rw_sample.html">rw</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/sa_sample.html">sa</a></th>
<td></td><td><a rel="nofollow" title="Sanskrit-English (sample file)" href="Wiki/v1syn/sa-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/sa_sample.html">sa</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/sah_sample.html">sah</a></th>
<td></td><td><a rel="nofollow" title="Yakut-English (sample file)" href="Wiki/v1syn/sah-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/sah_sample.html">sah</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/scn_sample.html">scn</a></th>
<td></td><td><a rel="nofollow" title="Sicilian-English (sample file)" href="Wiki/v1syn/scn-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/scn_sample.html">scn</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/sco_sample.html">sco</a></th>
<td></td><td><a rel="nofollow" title="Scots-English (sample file)" href="Wiki/v1syn/sco-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/sco_sample.html">sco</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/sd_sample.html">sd</a></th>
<td></td><td><a rel="nofollow" title="Sindhi-English (sample file)" href="Wiki/v1syn/sd-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/sd_sample.html">sd</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/se_sample.html">se</a></th>
<td></td><td><a rel="nofollow" title="Northern Sami-English (sample file)" href="Wiki/v1syn/se-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/se_sample.html">se</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/sg_sample.html">sg</a></th>
<td></td><td><a rel="nofollow" title="Sango-English (sample file)" href="Wiki/v1syn/sg-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/sg_sample.html">sg</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/si_sample.html">si</a></th>
<td></td><td><a rel="nofollow" title="Sinhala-English (sample file)" href="Wiki/v1syn/si-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/si_sample.html">si</a></th></tr>
<tr><th></th>
<th>de</th>
<th>en</th>
<th>et</th>
<th>fi</th>
<th>ru</th>
<th>sv</th>
<th></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/sl_sample.html">sl</a></th>
<td></td><td><a rel="nofollow" title="Slovenian-English (sample file)" href="Wiki/v1syn/sl-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/sl_sample.html">sl</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/sq_sample.html">sq</a></th>
<td></td><td><a rel="nofollow" title="Albanian-English (sample file)" href="Wiki/v1syn/sq-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/sq_sample.html">sq</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/stq_sample.html">stq</a></th>
<td></td><td><a rel="nofollow" title="stq-English (sample file)" href="Wiki/v1syn/stq-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/stq_sample.html">stq</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/sv_sample.html">sv</a></th>
<td></td><td><a rel="nofollow" title="Swedish-English (sample file)" href="Wiki/v1syn/sv-en_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Swedish-Finnish (sample file)" href="Wiki/v1syn/sv-fi_sample.html">view</a></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/sv_sample.html">sv</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/sw_sample.html">sw</a></th>
<td></td><td><a rel="nofollow" title="Swahili-English (sample file)" href="Wiki/v1syn/sw-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/sw_sample.html">sw</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/ta_sample.html">ta</a></th>
<td></td><td><a rel="nofollow" title="Tamil-English (sample file)" href="Wiki/v1syn/ta-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/ta_sample.html">ta</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/te_sample.html">te</a></th>
<td></td><td><a rel="nofollow" title="Telugu-English (sample file)" href="Wiki/v1syn/te-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/te_sample.html">te</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/tet_sample.html">tet</a></th>
<td></td><td><a rel="nofollow" title="Tetum-English (sample file)" href="Wiki/v1syn/tet-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/tet_sample.html">tet</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/tg_sample.html">tg</a></th>
<td></td><td><a rel="nofollow" title="Tajik-English (sample file)" href="Wiki/v1syn/tg-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/tg_sample.html">tg</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/th_sample.html">th</a></th>
<td></td><td><a rel="nofollow" title="Thai-English (sample file)" href="Wiki/v1syn/th-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/th_sample.html">th</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/ti_sample.html">ti</a></th>
<td></td><td><a rel="nofollow" title="Tigrinya-English (sample file)" href="Wiki/v1syn/ti-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/ti_sample.html">ti</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/tk_sample.html">tk</a></th>
<td></td><td><a rel="nofollow" title="Turkmen-English (sample file)" href="Wiki/v1syn/tk-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/tk_sample.html">tk</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/tl_sample.html">tl</a></th>
<td></td><td><a rel="nofollow" title="Tagalog-English (sample file)" href="Wiki/v1syn/tl-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/tl_sample.html">tl</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/to_sample.html">to</a></th>
<td></td><td><a rel="nofollow" title="Tonga (Tonga Islands)-English (sample file)" href="Wiki/v1syn/to-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/to_sample.html">to</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/tpi_sample.html">tpi</a></th>
<td></td><td><a rel="nofollow" title="Tok Pisin-English (sample file)" href="Wiki/v1syn/tpi-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/tpi_sample.html">tpi</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/tr_sample.html">tr</a></th>
<td></td><td><a rel="nofollow" title="Turkish-English (sample file)" href="Wiki/v1syn/tr-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/tr_sample.html">tr</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/ts_sample.html">ts</a></th>
<td></td><td><a rel="nofollow" title="Tsonga-English (sample file)" href="Wiki/v1syn/ts-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/ts_sample.html">ts</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/tt_sample.html">tt</a></th>
<td></td><td><a rel="nofollow" title="Tatar-English (sample file)" href="Wiki/v1syn/tt-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/tt_sample.html">tt</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/ty_sample.html">ty</a></th>
<td></td><td><a rel="nofollow" title="Tahitian-English (sample file)" href="Wiki/v1syn/ty-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/ty_sample.html">ty</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/tyv_sample.html">tyv</a></th>
<td></td><td><a rel="nofollow" title="Tuvinian-English (sample file)" href="Wiki/v1syn/tyv-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/tyv_sample.html">tyv</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/udm_sample.html">udm</a></th>
<td></td><td><a rel="nofollow" title="Udmurt-English (sample file)" href="Wiki/v1syn/udm-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/udm_sample.html">udm</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/uk_sample.html">uk</a></th>
<td></td><td><a rel="nofollow" title="Ukrainian-English (sample file)" href="Wiki/v1syn/uk-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/uk_sample.html">uk</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/ur_sample.html">ur</a></th>
<td></td><td><a rel="nofollow" title="Urdu-English (sample file)" href="Wiki/v1syn/ur-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/ur_sample.html">ur</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/uz_sample.html">uz</a></th>
<td></td><td><a rel="nofollow" title="Uzbek-English (sample file)" href="Wiki/v1syn/uz-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/uz_sample.html">uz</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/vec_sample.html">vec</a></th>
<td></td><td><a rel="nofollow" title="vec-English (sample file)" href="Wiki/v1syn/vec-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/vec_sample.html">vec</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/vi_sample.html">vi</a></th>
<td></td><td><a rel="nofollow" title="Vietnamese-English (sample file)" href="Wiki/v1syn/vi-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/vi_sample.html">vi</a></th></tr>
<tr><th></th>
<th>de</th>
<th>en</th>
<th>et</th>
<th>fi</th>
<th>ru</th>
<th>sv</th>
<th></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/vo_sample.html">vo</a></th>
<td></td><td><a rel="nofollow" title="VolapÃ¼k-English (sample file)" href="Wiki/v1syn/vo-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/vo_sample.html">vo</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/wa_sample.html">wa</a></th>
<td></td><td><a rel="nofollow" title="Walloon-English (sample file)" href="Wiki/v1syn/wa-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/wa_sample.html">wa</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/wo_sample.html">wo</a></th>
<td></td><td><a rel="nofollow" title="Wolof-English (sample file)" href="Wiki/v1syn/wo-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/wo_sample.html">wo</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/xal_sample.html">xal</a></th>
<td></td><td><a rel="nofollow" title="Kalmyk-English (sample file)" href="Wiki/v1syn/xal-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/xal_sample.html">xal</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/xh_sample.html">xh</a></th>
<td></td><td><a rel="nofollow" title="Xhosa-English (sample file)" href="Wiki/v1syn/xh-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/xh_sample.html">xh</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/yi_sample.html">yi</a></th>
<td></td><td><a rel="nofollow" title="Yiddish-English (sample file)" href="Wiki/v1syn/yi-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/yi_sample.html">yi</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/yo_sample.html">yo</a></th>
<td></td><td><a rel="nofollow" title="Yoruba-English (sample file)" href="Wiki/v1syn/yo-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/yo_sample.html">yo</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/zh_sample.html">zh</a></th>
<td></td><td><a rel="nofollow" title="Chinese-English (sample file)" href="Wiki/v1syn/zh-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/zh_sample.html">zh</a></th></tr>
<tr><th><a rel="nofollow" href="Wiki/v1syn/zu_sample.html">zu</a></th>
<td></td><td><a rel="nofollow" title="Zulu-English (sample file)" href="Wiki/v1syn/zu-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wiki/v1syn/zu_sample.html">zu</a></th></tr>
<tr><th></th>
<th><a rel="nofollow" href="Wiki/v1syn/de_sample.html">de</a></th>
<th><a rel="nofollow" href="Wiki/v1syn/en_sample.html">en</a></th>
<th><a rel="nofollow" href="Wiki/v1syn/et_sample.html">et</a></th>
<th><a rel="nofollow" href="Wiki/v1syn/fi_sample.html">fi</a></th>
<th><a rel="nofollow" href="Wiki/v1syn/ru_sample.html">ru</a></th>
<th><a rel="nofollow" href="Wiki/v1syn/sv_sample.html">sv</a></th>
<th></th></tr>
</table>
</div></p></div><div id='download-xml'><p>You need to download the monolingual corpus files and the standoff alignment files between them:
<ul><li>Links on the language IDs of the top row and first column: zip-files of untokenized monolingual XML files</li>
<li>Links on the language IDs of the bottom row and last column: zip-files of tokenized monolingual XML files (if they exist)</li>
<li>Links in the table: Sentence alignment files in XCES Align format (standoff annotation)</li>
</ul>
</p><p>
<div class="sample"><table border="0" cellpadding="0">
<tr><th></th>
<th><a rel="nofollow" title="de.zip: untokenized XML documents (57 files, 51.3M sentences, 917.4M tokens)" href="download.php?f=Wiki/v1syn/raw/de.zip">de</a></th>
<th><a rel="nofollow" title="en.zip: untokenized XML documents (50 files, 302.4M sentences, 6.0G tokens)" href="download.php?f=Wiki/v1syn/raw/en.zip">en</a></th>
<th><a rel="nofollow" title="et.zip: untokenized XML documents (11 files, 9.1M sentences, 109.5M tokens)" href="download.php?f=Wiki/v1syn/raw/et.zip">et</a></th>
<th><a rel="nofollow" title="fi.zip: untokenized XML documents (55 files, 76.3M sentences, 979.7M tokens)" href="download.php?f=Wiki/v1syn/raw/fi.zip">fi</a></th>
<th><a rel="nofollow" title="ru.zip: untokenized XML documents (32 files, 27.9M sentences, 426.0M tokens)" href="download.php?f=Wiki/v1syn/raw/ru.zip">ru</a></th>
<th><a rel="nofollow" title="sv.zip: untokenized XML documents (24 files, 21.5M sentences, 310.1M tokens)" href="download.php?f=Wiki/v1syn/raw/sv.zip">sv</a></th>
<th></th></tr>
<th><a rel="nofollow" title="ab.zip: untokenized XML documents (1 files, 11.3k sentences, 99.0k tokens)" href="download.php?f=Wiki/v1syn/raw/ab.zip">ab</a></th>
<td></td>
<td bgcolor='#ffdedd'><a rel="nofollow" title="Abkhazian-English (11.3k links 0.3M tokens )" href="download.php?f=Wiki/v1syn/xml/ab-en.xml.gz">11.3k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ab</th>
</tr><th><a rel="nofollow" title="ady.zip: untokenized XML documents (1 files, 2.6k sentences, 19.4k tokens)" href="download.php?f=Wiki/v1syn/raw/ady.zip">ady</a></th>
<td></td>
<td bgcolor='#ffd3d3'><a rel="nofollow" title="Adyghe-English (2.6k links 54.4k tokens )" href="download.php?f=Wiki/v1syn/xml/ady-en.xml.gz">2.6k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ady</th>
</tr><th><a rel="nofollow" title="af.zip: untokenized XML documents (2 files, 1.0M sentences, 18.9M tokens)" href="download.php?f=Wiki/v1syn/raw/af.zip">af</a></th>
<td></td>
<td bgcolor='#dfffc6'><a rel="nofollow" title="Afrikaans-English (2 aligned documents 1.0M links 37.9M tokens )" href="download.php?f=Wiki/v1syn/xml/af-en.xml.gz">1.0M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>af</th>
</tr><th><a rel="nofollow" title="am.zip: untokenized XML documents (1 files, 0.3k sentences, 7.0k tokens)" href="download.php?f=Wiki/v1syn/raw/am.zip">am</a></th>
<td></td>
<td bgcolor='#ffd0d0'><a rel="nofollow" title="Amharic-English (0.3k links 13.7k tokens )" href="download.php?f=Wiki/v1syn/xml/am-en.xml.gz">0.3k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>am</th>
</tr><th><a rel="nofollow" title="an.zip: untokenized XML documents (1 files, 0.1M sentences, 2.9M tokens)" href="download.php?f=Wiki/v1syn/raw/an.zip">an</a></th>
<td></td>
<td bgcolor='#ffffe9'><a rel="nofollow" title="Aragonese-English (0.1M links 5.7M tokens )" href="download.php?f=Wiki/v1syn/xml/an-en.xml.gz">0.1M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>an</th>
</tr><th><a rel="nofollow" title="ang.zip: untokenized XML documents (1 files, 2.3k sentences, 25.9k tokens)" href="download.php?f=Wiki/v1syn/raw/ang.zip">ang</a></th>
<td></td>
<td bgcolor='#ffd3d3'><a rel="nofollow" title="English, Old (ca.450-1100)-English (2.3k links 58.8k tokens )" href="download.php?f=Wiki/v1syn/xml/ang-en.xml.gz">2.3k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ang</th>
</tr><th><a rel="nofollow" title="ar.zip: untokenized XML documents (9 files, 6.7M sentences, 139.0M tokens)" href="download.php?f=Wiki/v1syn/raw/ar.zip">ar</a></th>
<td></td>
<td bgcolor='#c9ffc9'><a rel="nofollow" title="Arabic-English (9 aligned documents 6.7M links 296.5M tokens )" href="download.php?f=Wiki/v1syn/xml/ar-en.xml.gz">6.7M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ar</th>
</tr><th><a rel="nofollow" title="as.zip: untokenized XML documents (1 files, 0.7k sentences, 6.2k tokens)" href="download.php?f=Wiki/v1syn/raw/as.zip">as</a></th>
<td></td>
<td bgcolor='#ffd0d0'><a rel="nofollow" title="Assamese-English (0.7k links 11.6k tokens )" href="download.php?f=Wiki/v1syn/xml/as-en.xml.gz">0.7k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>as</th>
</tr><th><a rel="nofollow" title="ast.zip: untokenized XML documents (3 files, 1.7M sentences, 34.2M tokens)" href="download.php?f=Wiki/v1syn/raw/ast.zip">ast</a></th>
<td></td>
<td bgcolor='#daffc6'><a rel="nofollow" title="Asturian-English (3 aligned documents 1.7M links 68.8M tokens )" href="download.php?f=Wiki/v1syn/xml/ast-en.xml.gz">1.7M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ast</th>
</tr><th><a rel="nofollow" title="awa.zip: untokenized XML documents (1 files, 3 sentences, 27 tokens)" href="download.php?f=Wiki/v1syn/raw/awa.zip">awa</a></th>
<td></td>
<td bgcolor='#ffd0d0'><a rel="nofollow" title="Awadhi-English (2 links 53 tokens )" href="download.php?f=Wiki/v1syn/xml/awa-en.xml.gz">2</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>awa</th>
</tr><th><a rel="nofollow" title="az.zip: untokenized XML documents (2 files, 1.7M sentences, 21.7M tokens)" href="download.php?f=Wiki/v1syn/raw/az.zip">az</a></th>
<td></td>
<td bgcolor='#daffc7'><a rel="nofollow" title="Azerbaijani-English (2 aligned documents 1.7M links 50.2M tokens )" href="download.php?f=Wiki/v1syn/xml/az-en.xml.gz">1.7M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>az</th>
</tr><th><a rel="nofollow" title="ba.zip: untokenized XML documents (1 files, 0.5M sentences, 6.1M tokens)" href="download.php?f=Wiki/v1syn/raw/ba.zip">ba</a></th>
<td></td>
<td bgcolor='#e7ffca'><a rel="nofollow" title="Bashkir-English (0.5M links 13.5M tokens )" href="download.php?f=Wiki/v1syn/xml/ba-en.xml.gz">0.5M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ba</th>
</tr><th><a rel="nofollow" title="bar.zip: untokenized XML documents (1 files, 0.1M sentences, 1.9M tokens)" href="download.php?f=Wiki/v1syn/raw/bar.zip">bar</a></th>
<td></td>
<td bgcolor='#ffffec'><a rel="nofollow" title="bar-English (0.1M links 3.9M tokens )" href="download.php?f=Wiki/v1syn/xml/bar-en.xml.gz">0.1M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>bar</th>
</tr><th><a rel="nofollow" title="be.zip: untokenized XML documents (2 files, 1.7M sentences, 21.6M tokens)" href="download.php?f=Wiki/v1syn/raw/be.zip">be</a></th>
<td></td>
<td bgcolor='#daffc6'><a rel="nofollow" title="Belarusian-English (2 aligned documents 1.7M links 48.2M tokens )" href="download.php?f=Wiki/v1syn/xml/be-en.xml.gz">1.7M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>be</th>
</tr><th><a rel="nofollow" title="bg.zip: untokenized XML documents (4 files, 3.3M sentences, 58.4M tokens)" href="download.php?f=Wiki/v1syn/raw/bg.zip">bg</a></th>
<td></td>
<td bgcolor='#d2ffcb'><a rel="nofollow" title="Bulgarian-English (4 aligned documents 3.3M links 121.5M tokens )" href="download.php?f=Wiki/v1syn/xml/bg-en.xml.gz">3.3M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>bg</th>
</tr><th><a rel="nofollow" title="bm.zip: untokenized XML documents (1 files, 1.8k sentences, 28.1k tokens)" href="download.php?f=Wiki/v1syn/raw/bm.zip">bm</a></th>
<td></td>
<td bgcolor='#ffd2d2'><a rel="nofollow" title="Bambara-English (1.8k links 54.2k tokens )" href="download.php?f=Wiki/v1syn/xml/bm-en.xml.gz">1.8k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>bm</th>
</tr><th><a rel="nofollow" title="bn.zip: untokenized XML documents (1 files, 5.3k sentences, 99.3k tokens)" href="download.php?f=Wiki/v1syn/raw/bn.zip">bn</a></th>
<td></td>
<td bgcolor='#ffd7d7'><a rel="nofollow" title="Bengali-English (5.3k links 0.2M tokens )" href="download.php?f=Wiki/v1syn/xml/bn-en.xml.gz">5.3k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>bn</th>
</tr><th><a rel="nofollow" title="bo.zip: untokenized XML documents (1 files, 28 sentences, 0.2k tokens)" href="download.php?f=Wiki/v1syn/raw/bo.zip">bo</a></th>
<td></td>
<td bgcolor='#ffd0d0'><a rel="nofollow" title="Tibetan-English (27 links 0.6k tokens )" href="download.php?f=Wiki/v1syn/xml/bo-en.xml.gz">27</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>bo</th>
</tr><th><a rel="nofollow" title="br.zip: untokenized XML documents (1 files, 0.4M sentences, 6.5M tokens)" href="download.php?f=Wiki/v1syn/raw/br.zip">br</a></th>
<td></td>
<td bgcolor='#eaffcc'><a rel="nofollow" title="Breton-English (0.4M links 12.5M tokens )" href="download.php?f=Wiki/v1syn/xml/br-en.xml.gz">0.4M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>br</th>
</tr><th><a rel="nofollow" title="ca.zip: untokenized XML documents (8 files, 7.0M sentences, 158.2M tokens)" href="download.php?f=Wiki/v1syn/raw/ca.zip">ca</a></th>
<td></td>
<td bgcolor='#c9ffc9'><a rel="nofollow" title="Catalan-English (8 aligned documents 7.0M links 307.0M tokens )" href="download.php?f=Wiki/v1syn/xml/ca-en.xml.gz">7.0M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ca</th>
</tr><th><a rel="nofollow" title="ce.zip: untokenized XML documents (1 files, 0.4M sentences, 3.7M tokens)" href="download.php?f=Wiki/v1syn/raw/ce.zip">ce</a></th>
<td></td>
<td bgcolor='#eaffcc'><a rel="nofollow" title="Chechen-English (0.4M links 8.8M tokens )" href="download.php?f=Wiki/v1syn/xml/ce-en.xml.gz">0.4M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ce</th>
</tr><th><a rel="nofollow" title="chr.zip: untokenized XML documents (1 files, 2.2k sentences, 21.8k tokens)" href="download.php?f=Wiki/v1syn/raw/chr.zip">chr</a></th>
<td></td>
<td bgcolor='#ffd3d3'><a rel="nofollow" title="Cherokee-English (2.2k links 63.6k tokens )" href="download.php?f=Wiki/v1syn/xml/chr-en.xml.gz">2.2k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>chr</th>
</tr><th><a rel="nofollow" title="co.zip: untokenized XML documents (1 files, 22.3k sentences, 0.4M tokens)" href="download.php?f=Wiki/v1syn/raw/co.zip">co</a></th>
<td></td>
<td bgcolor='#ffe8e5'><a rel="nofollow" title="Corsican-English (22.3k links 0.8M tokens )" href="download.php?f=Wiki/v1syn/xml/co-en.xml.gz">22.3k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>co</th>
</tr><th><a rel="nofollow" title="crh.zip: untokenized XML documents (1 files, 14.8k sentences, 0.2M tokens)" href="download.php?f=Wiki/v1syn/raw/crh.zip">crh</a></th>
<td></td>
<td bgcolor='#ffe1df'><a rel="nofollow" title="Crimean Tatar-English (14.8k links 0.4M tokens )" href="download.php?f=Wiki/v1syn/xml/crh-en.xml.gz">14.8k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>crh</th>
</tr><th><a rel="nofollow" title="cs.zip: untokenized XML documents (8 files, 7.0M sentences, 114.2M tokens)" href="download.php?f=Wiki/v1syn/raw/cs.zip">cs</a></th>
<td></td>
<td bgcolor='#c9ffc9'><a rel="nofollow" title="Czech-English (8 aligned documents 7.0M links 249.1M tokens )" href="download.php?f=Wiki/v1syn/xml/cs-en.xml.gz">7.0M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>cs</th>
</tr><tr><th></th>
<th>de</th>
<th>en</th>
<th>et</th>
<th>fi</th>
<th>ru</th>
<th>sv</th>
<th></th></tr>
<th><a rel="nofollow" title="csb.zip: untokenized XML documents (1 files, 18.7k sentences, 0.2M tokens)" href="download.php?f=Wiki/v1syn/raw/csb.zip">csb</a></th>
<td></td>
<td bgcolor='#ffe5e3'><a rel="nofollow" title="Kashubian-English (18.7k links 0.5M tokens )" href="download.php?f=Wiki/v1syn/xml/csb-en.xml.gz">18.7k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>csb</th>
</tr><th><a rel="nofollow" title="cy.zip: untokenized XML documents (1 files, 0.5M sentences, 9.0M tokens)" href="download.php?f=Wiki/v1syn/raw/cy.zip">cy</a></th>
<td></td>
<td bgcolor='#e6ffc9'><a rel="nofollow" title="Welsh-English (0.5M links 18.3M tokens )" href="download.php?f=Wiki/v1syn/xml/cy-en.xml.gz">0.5M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>cy</th>
</tr><th><a rel="nofollow" title="da.zip: untokenized XML documents (4 files, 2.9M sentences, 52.9M tokens)" href="download.php?f=Wiki/v1syn/raw/da.zip">da</a></th>
<td></td>
<td bgcolor='#d4ffca'><a rel="nofollow" title="Danish-English (4 aligned documents 2.9M links 111.5M tokens )" href="download.php?f=Wiki/v1syn/xml/da-en.xml.gz">2.9M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>da</th>
</tr><th><a rel="nofollow" title="de.zip: untokenized XML documents (57 files, 51.3M sentences, 917.4M tokens)" href="download.php?f=Wiki/v1syn/raw/de.zip">de</a></th>
<td></td>
<td bgcolor='#bfffbf'><a rel="nofollow" title="German-English (50 aligned documents 44.4M links 1.7G tokens )" href="download.php?f=Wiki/v1syn/xml/de-en.xml.gz">44.4M</a></td>
<td></td>
<td bgcolor='#bfffbf'><a rel="nofollow" title="German-Finnish (41 aligned documents 36.0M links 1.1G tokens )" href="download.php?f=Wiki/v1syn/xml/de-fi.xml.gz">36.0M</a></td>
<td></td>
<td></td>
<th>de</th>
</tr><th><a rel="nofollow" title="dsb.zip: untokenized XML documents (1 files, 13.5k sentences, 0.2M tokens)" href="download.php?f=Wiki/v1syn/raw/dsb.zip">dsb</a></th>
<td></td>
<td bgcolor='#ffe0de'><a rel="nofollow" title="Lower Sorbian-English (13.5k links 0.4M tokens )" href="download.php?f=Wiki/v1syn/xml/dsb-en.xml.gz">13.5k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>dsb</th>
</tr><th><a rel="nofollow" title="el.zip: untokenized XML documents (4 files, 3.0M sentences, 62.3M tokens)" href="download.php?f=Wiki/v1syn/raw/el.zip">el</a></th>
<td></td>
<td bgcolor='#d3ffca'><a rel="nofollow" title="Greek-English (4 aligned documents 3.0M links 124.3M tokens )" href="download.php?f=Wiki/v1syn/xml/el-en.xml.gz">3.0M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>el</th>
</tr><th><a rel="nofollow" title="eo.zip: untokenized XML documents (3 files, 2.0M sentences, 33.5M tokens)" href="download.php?f=Wiki/v1syn/raw/eo.zip">eo</a></th>
<td></td>
<td bgcolor='#d8ffc7'><a rel="nofollow" title="Esperanto-English (3 aligned documents 2.0M links 68.5M tokens )" href="download.php?f=Wiki/v1syn/xml/eo-en.xml.gz">2.0M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>eo</th>
</tr><th><a rel="nofollow" title="es.zip: untokenized XML documents (25 files, 20.7M sentences, 500.2M tokens)" href="download.php?f=Wiki/v1syn/raw/es.zip">es</a></th>
<td></td>
<td bgcolor='#bfffbf'><a rel="nofollow" title="Spanish-English (25 aligned documents 20.7M links 967.8M tokens )" href="download.php?f=Wiki/v1syn/xml/es-en.xml.gz">20.7M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>es</th>
</tr><th><a rel="nofollow" title="et.zip: untokenized XML documents (11 files, 9.1M sentences, 109.5M tokens)" href="download.php?f=Wiki/v1syn/raw/et.zip">et</a></th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#d6ffc8'><a rel="nofollow" title="Estonian-Finnish (3 aligned documents 2.3M links 58.3M tokens )" href="download.php?f=Wiki/v1syn/xml/et-fi.xml.gz">2.3M</a></td>
<td></td>
<td></td>
<th>et</th>
</tr><th><a rel="nofollow" title="eu.zip: untokenized XML documents (3 files, 2.3M sentences, 35.1M tokens)" href="download.php?f=Wiki/v1syn/raw/eu.zip">eu</a></th>
<td></td>
<td bgcolor='#d6ffc8'><a rel="nofollow" title="Basque-English (3 aligned documents 2.3M links 77.0M tokens )" href="download.php?f=Wiki/v1syn/xml/eu-en.xml.gz">2.3M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>eu</th>
</tr><th><a rel="nofollow" title="ext.zip: untokenized XML documents (1 files, 18.3k sentences, 0.3M tokens)" href="download.php?f=Wiki/v1syn/raw/ext.zip">ext</a></th>
<td></td>
<td bgcolor='#ffe5e3'><a rel="nofollow" title="ext-English (18.3k links 0.7M tokens )" href="download.php?f=Wiki/v1syn/xml/ext-en.xml.gz">18.3k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ext</th>
</tr><th><a rel="nofollow" title="fa.zip: untokenized XML documents (5 files, 3.9M sentences, 83.4M tokens)" href="download.php?f=Wiki/v1syn/raw/fa.zip">fa</a></th>
<td></td>
<td bgcolor='#d1ffcf'><a rel="nofollow" title="Persian-English (5 aligned documents 3.9M links 157.8M tokens )" href="download.php?f=Wiki/v1syn/xml/fa-en.xml.gz">3.9M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>fa</th>
</tr><th><a rel="nofollow" title="ff.zip: untokenized XML documents (1 files, 1.9k sentences, 28.4k tokens)" href="download.php?f=Wiki/v1syn/raw/ff.zip">ff</a></th>
<td></td>
<td bgcolor='#ffd2d2'><a rel="nofollow" title="Fulah-English (1.9k links 60.5k tokens )" href="download.php?f=Wiki/v1syn/xml/ff-en.xml.gz">1.9k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ff</th>
</tr><th><a rel="nofollow" title="fi.zip: untokenized XML documents (55 files, 76.3M sentences, 979.7M tokens)" href="download.php?f=Wiki/v1syn/raw/fi.zip">fi</a></th>
<td bgcolor='#cbffcb'><a rel="nofollow" title="Finnish-German (7 aligned documents 5.8M links 160.4M tokens )" href="download.php?f=Wiki/v1syn/xml/fi-de.xml.gz">5.8M</a></td>
<td bgcolor='#c8ffc8'><a rel="nofollow" title="Finnish-English (8 aligned documents 7.1M links 201.9M tokens )" href="download.php?f=Wiki/v1syn/xml/fi-en.xml.gz">7.1M</a></td>
<td bgcolor='#c9ffc9'><a rel="nofollow" title="Finnish-Estonian (8 aligned documents 6.7M links 158.1M tokens )" href="download.php?f=Wiki/v1syn/xml/fi-et.xml.gz">6.7M</a></td>
<td></td>
<td bgcolor='#c9ffc9'><a rel="nofollow" title="Finnish-Russian (8 aligned documents 6.8M links 171.2M tokens )" href="download.php?f=Wiki/v1syn/xml/fi-ru.xml.gz">6.8M</a></td>
<td bgcolor='#c8ffc8'><a rel="nofollow" title="Finnish-Swedish (8 aligned documents 7.2M links 184.1M tokens )" href="download.php?f=Wiki/v1syn/xml/fi-sv.xml.gz">7.2M</a></td>
<th>fi</th>
</tr><th><a rel="nofollow" title="fj.zip: untokenized XML documents (1 files, 2.3k sentences, 52.2k tokens)" href="download.php?f=Wiki/v1syn/raw/fj.zip">fj</a></th>
<td></td>
<td bgcolor='#ffd3d3'><a rel="nofollow" title="Fijian-English (2.3k links 94.4k tokens )" href="download.php?f=Wiki/v1syn/xml/fj-en.xml.gz">2.3k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>fj</th>
</tr><th><a rel="nofollow" title="fo.zip: untokenized XML documents (1 files, 95.5k sentences, 1.3M tokens)" href="download.php?f=Wiki/v1syn/raw/fo.zip">fo</a></th>
<td></td>
<td bgcolor='#fffff0'><a rel="nofollow" title="Faroese-English (95.5k links 2.9M tokens )" href="download.php?f=Wiki/v1syn/xml/fo-en.xml.gz">95.5k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>fo</th>
</tr><th><a rel="nofollow" title="fr.zip: untokenized XML documents (33 files, 28.7M sentences, 652.6M tokens)" href="download.php?f=Wiki/v1syn/raw/fr.zip">fr</a></th>
<td></td>
<td bgcolor='#bfffbf'><a rel="nofollow" title="French-English (33 aligned documents 28.7M links 1.3G tokens )" href="download.php?f=Wiki/v1syn/xml/fr-en.xml.gz">28.7M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>fr</th>
</tr><th><a rel="nofollow" title="frr.zip: untokenized XML documents (1 files, 21.7k sentences, 0.3M tokens)" href="download.php?f=Wiki/v1syn/raw/frr.zip">frr</a></th>
<td></td>
<td bgcolor='#ffe7e4'><a rel="nofollow" title="Northern Frisian-English (21.7k links 0.6M tokens )" href="download.php?f=Wiki/v1syn/xml/frr-en.xml.gz">21.7k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>frr</th>
</tr><th><a rel="nofollow" title="fy.zip: untokenized XML documents (1 files, 0.5M sentences, 9.7M tokens)" href="download.php?f=Wiki/v1syn/raw/fy.zip">fy</a></th>
<td></td>
<td bgcolor='#e6ffc9'><a rel="nofollow" title="Western Frisian-English (0.5M links 19.3M tokens )" href="download.php?f=Wiki/v1syn/xml/fy-en.xml.gz">0.5M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>fy</th>
</tr><th><a rel="nofollow" title="ga.zip: untokenized XML documents (1 files, 0.2M sentences, 4.2M tokens)" href="download.php?f=Wiki/v1syn/raw/ga.zip">ga</a></th>
<td></td>
<td bgcolor='#f0ffd1'><a rel="nofollow" title="Irish-English (0.2M links 8.3M tokens )" href="download.php?f=Wiki/v1syn/xml/ga-en.xml.gz">0.2M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ga</th>
</tr><th><a rel="nofollow" title="gl.zip: untokenized XML documents (2 files, 1.9M sentences, 40.8M tokens)" href="download.php?f=Wiki/v1syn/raw/gl.zip">gl</a></th>
<td></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="Galician-English (2 aligned documents 1.9M links 81.6M tokens )" href="download.php?f=Wiki/v1syn/xml/gl-en.xml.gz">1.9M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>gl</th>
</tr><th><a rel="nofollow" title="gn.zip: untokenized XML documents (1 files, 29.3k sentences, 0.4M tokens)" href="download.php?f=Wiki/v1syn/raw/gn.zip">gn</a></th>
<td></td>
<td bgcolor='#ffede9'><a rel="nofollow" title="Guarani-English (29.3k links 0.9M tokens )" href="download.php?f=Wiki/v1syn/xml/gn-en.xml.gz">29.3k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>gn</th>
</tr><th><a rel="nofollow" title="got.zip: untokenized XML documents (1 files, 0.1k sentences, 3.2k tokens)" href="download.php?f=Wiki/v1syn/raw/got.zip">got</a></th>
<td></td>
<td bgcolor='#ffd0d0'><a rel="nofollow" title="Gothic-English (0.1k links 6.0k tokens )" href="download.php?f=Wiki/v1syn/xml/got-en.xml.gz">0.1k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>got</th>
</tr><th><a rel="nofollow" title="gu.zip: untokenized XML documents (1 files, 0.2M sentences, 2.8M tokens)" href="download.php?f=Wiki/v1syn/raw/gu.zip">gu</a></th>
<td></td>
<td bgcolor='#f5ffd6'><a rel="nofollow" title="Gujarati-English (0.2M links 6.4M tokens )" href="download.php?f=Wiki/v1syn/xml/gu-en.xml.gz">0.2M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>gu</th>
</tr><th><a rel="nofollow" title="gv.zip: untokenized XML documents (1 files, 26.7k sentences, 0.4M tokens)" href="download.php?f=Wiki/v1syn/raw/gv.zip">gv</a></th>
<td></td>
<td bgcolor='#ffebe7'><a rel="nofollow" title="Manx-English (26.7k links 0.9M tokens )" href="download.php?f=Wiki/v1syn/xml/gv-en.xml.gz">26.7k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>gv</th>
</tr><th><a rel="nofollow" title="haw.zip: untokenized XML documents (1 files, 7.8k sentences, 0.2M tokens)" href="download.php?f=Wiki/v1syn/raw/haw.zip">haw</a></th>
<td></td>
<td bgcolor='#ffdad9'><a rel="nofollow" title="Hawaiian-English (7.7k links 0.3M tokens )" href="download.php?f=Wiki/v1syn/xml/haw-en.xml.gz">7.7k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>haw</th>
</tr><tr><th></th>
<th>de</th>
<th>en</th>
<th>et</th>
<th>fi</th>
<th>ru</th>
<th>sv</th>
<th></th></tr>
<th><a rel="nofollow" title="hif.zip: untokenized XML documents (1 files, 7.5k sentences, 0.1M tokens)" href="download.php?f=Wiki/v1syn/raw/hif.zip">hif</a></th>
<td></td>
<td bgcolor='#ffd9d8'><a rel="nofollow" title="hif-English (7.5k links 0.2M tokens )" href="download.php?f=Wiki/v1syn/xml/hif-en.xml.gz">7.5k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>hif</th>
</tr><th><a rel="nofollow" title="hsb.zip: untokenized XML documents (1 files, 58.0k sentences, 0.8M tokens)" href="download.php?f=Wiki/v1syn/raw/hsb.zip">hsb</a></th>
<td></td>
<td bgcolor='#fff9f0'><a rel="nofollow" title="Upper Sorbian-English (58.0k links 1.8M tokens )" href="download.php?f=Wiki/v1syn/xml/hsb-en.xml.gz">58.0k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>hsb</th>
</tr><th><a rel="nofollow" title="ht.zip: untokenized XML documents (1 files, 78.5k sentences, 1.6M tokens)" href="download.php?f=Wiki/v1syn/raw/ht.zip">ht</a></th>
<td></td>
<td bgcolor='#fffdf1'><a rel="nofollow" title="Haitian-English (78.5k links 3.2M tokens )" href="download.php?f=Wiki/v1syn/xml/ht-en.xml.gz">78.5k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ht</th>
</tr><th><a rel="nofollow" title="hu.zip: untokenized XML documents (8 files, 7.1M sentences, 108.9M tokens)" href="download.php?f=Wiki/v1syn/raw/hu.zip">hu</a></th>
<td></td>
<td bgcolor='#c8ffc8'><a rel="nofollow" title="Hungarian-English (8 aligned documents 7.1M links 243.6M tokens )" href="download.php?f=Wiki/v1syn/xml/hu-en.xml.gz">7.1M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>hu</th>
</tr><th><a rel="nofollow" title="hy.zip: untokenized XML documents (1 files, 74.0k sentences, 0.8M tokens)" href="download.php?f=Wiki/v1syn/raw/hy.zip">hy</a></th>
<td></td>
<td bgcolor='#fffcf1'><a rel="nofollow" title="Armenian-English (74.0k links 1.8M tokens )" href="download.php?f=Wiki/v1syn/xml/hy-en.xml.gz">74.0k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>hy</th>
</tr><th><a rel="nofollow" title="ia.zip: untokenized XML documents (1 files, 28.9k sentences, 0.5M tokens)" href="download.php?f=Wiki/v1syn/raw/ia.zip">ia</a></th>
<td></td>
<td bgcolor='#ffede9'><a rel="nofollow" title="Interlingua (International Auxiliary Language Association)-English (28.9k links 1.1M tokens )" href="download.php?f=Wiki/v1syn/xml/ia-en.xml.gz">28.9k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ia</th>
</tr><th><a rel="nofollow" title="ie.zip: untokenized XML documents (1 files, 11.4k sentences, 0.2M tokens)" href="download.php?f=Wiki/v1syn/raw/ie.zip">ie</a></th>
<td></td>
<td bgcolor='#ffdedd'><a rel="nofollow" title="Interlingue-English (11.4k links 0.3M tokens )" href="download.php?f=Wiki/v1syn/xml/ie-en.xml.gz">11.4k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ie</th>
</tr><th><a rel="nofollow" title="ig.zip: untokenized XML documents (1 files, 6.3k sentences, 0.1M tokens)" href="download.php?f=Wiki/v1syn/raw/ig.zip">ig</a></th>
<td></td>
<td bgcolor='#ffd8d7'><a rel="nofollow" title="Igbo-English (6.3k links 0.2M tokens )" href="download.php?f=Wiki/v1syn/xml/ig-en.xml.gz">6.3k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ig</th>
</tr><th><a rel="nofollow" title="ilo.zip: untokenized XML documents (1 files, 67.3k sentences, 1.4M tokens)" href="download.php?f=Wiki/v1syn/raw/ilo.zip">ilo</a></th>
<td></td>
<td bgcolor='#fffbf1'><a rel="nofollow" title="Iloko-English (67.3k links 2.7M tokens )" href="download.php?f=Wiki/v1syn/xml/ilo-en.xml.gz">67.3k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ilo</th>
</tr><th><a rel="nofollow" title="io.zip: untokenized XML documents (1 files, 0.2M sentences, 2.9M tokens)" href="download.php?f=Wiki/v1syn/raw/io.zip">io</a></th>
<td></td>
<td bgcolor='#ffffe5'><a rel="nofollow" title="Ido-English (0.2M links 5.9M tokens )" href="download.php?f=Wiki/v1syn/xml/io-en.xml.gz">0.2M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>io</th>
</tr><th><a rel="nofollow" title="it.zip: untokenized XML documents (18 files, 16.0M sentences, 378.9M tokens)" href="download.php?f=Wiki/v1syn/raw/it.zip">it</a></th>
<td></td>
<td bgcolor='#bfffbf'><a rel="nofollow" title="Italian-English (18 aligned documents 16.0M links 765.4M tokens )" href="download.php?f=Wiki/v1syn/xml/it-en.xml.gz">16.0M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>it</th>
</tr><th><a rel="nofollow" title="iu.zip: untokenized XML documents (1 files, 15 sentences, 0.2k tokens)" href="download.php?f=Wiki/v1syn/raw/iu.zip">iu</a></th>
<td></td>
<td bgcolor='#ffd0d0'><a rel="nofollow" title="Inuktitut-English (14 links 0.6k tokens )" href="download.php?f=Wiki/v1syn/xml/iu-en.xml.gz">14</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>iu</th>
</tr><th><a rel="nofollow" title="jam.zip: untokenized XML documents (1 files, 1.5k sentences, 30.4k tokens)" href="download.php?f=Wiki/v1syn/raw/jam.zip">jam</a></th>
<td></td>
<td bgcolor='#ffd2d2'><a rel="nofollow" title="jam-English (1.5k links 61.3k tokens )" href="download.php?f=Wiki/v1syn/xml/jam-en.xml.gz">1.5k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>jam</th>
</tr><th><a rel="nofollow" title="jbo.zip: untokenized XML documents (1 files, 15.3k sentences, 0.3M tokens)" href="download.php?f=Wiki/v1syn/raw/jbo.zip">jbo</a></th>
<td></td>
<td bgcolor='#ffe2e0'><a rel="nofollow" title="Lojban-English (15.3k links 0.6M tokens )" href="download.php?f=Wiki/v1syn/xml/jbo-en.xml.gz">15.3k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>jbo</th>
</tr><th><a rel="nofollow" title="jv.zip: untokenized XML documents (1 files, 0.3M sentences, 4.5M tokens)" href="download.php?f=Wiki/v1syn/raw/jv.zip">jv</a></th>
<td></td>
<td bgcolor='#edffce'><a rel="nofollow" title="Javanese-English (0.3M links 10.0M tokens )" href="download.php?f=Wiki/v1syn/xml/jv-en.xml.gz">0.3M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>jv</th>
</tr><th><a rel="nofollow" title="ka.zip: untokenized XML documents (1 files, 0.2M sentences, 4.3M tokens)" href="download.php?f=Wiki/v1syn/raw/ka.zip">ka</a></th>
<td></td>
<td bgcolor='#f2ffd3'><a rel="nofollow" title="Georgian-English (0.2M links 9.1M tokens )" href="download.php?f=Wiki/v1syn/xml/ka-en.xml.gz">0.2M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ka</th>
</tr><th><a rel="nofollow" title="kab.zip: untokenized XML documents (1 files, 10.4k sentences, 0.2M tokens)" href="download.php?f=Wiki/v1syn/raw/kab.zip">kab</a></th>
<td></td>
<td bgcolor='#ffdddc'><a rel="nofollow" title="Kabyle-English (10.3k links 0.3M tokens )" href="download.php?f=Wiki/v1syn/xml/kab-en.xml.gz">10.3k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>kab</th>
</tr><th><a rel="nofollow" title="kk.zip: untokenized XML documents (2 files, 1.5M sentences, 17.1M tokens)" href="download.php?f=Wiki/v1syn/raw/kk.zip">kk</a></th>
<td></td>
<td bgcolor='#dbffc6'><a rel="nofollow" title="Kazakh-English (2 aligned documents 1.5M links 39.9M tokens )" href="download.php?f=Wiki/v1syn/xml/kk-en.xml.gz">1.5M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>kk</th>
</tr><th><a rel="nofollow" title="kl.zip: untokenized XML documents (1 files, 2.1k sentences, 18.0k tokens)" href="download.php?f=Wiki/v1syn/raw/kl.zip">kl</a></th>
<td></td>
<td bgcolor='#ffd2d2'><a rel="nofollow" title="Kalaallisut-English (2.1k links 50.2k tokens )" href="download.php?f=Wiki/v1syn/xml/kl-en.xml.gz">2.1k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>kl</th>
</tr><th><a rel="nofollow" title="km.zip: untokenized XML documents (1 files, 0.7k sentences, 5.8k tokens)" href="download.php?f=Wiki/v1syn/raw/km.zip">km</a></th>
<td></td>
<td bgcolor='#ffd0d0'><a rel="nofollow" title="Central Khmer-English (0.7k links 13.3k tokens )" href="download.php?f=Wiki/v1syn/xml/km-en.xml.gz">0.7k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>km</th>
</tr><th><a rel="nofollow" title="kn.zip: untokenized XML documents (1 files, 13.5k sentences, 0.2M tokens)" href="download.php?f=Wiki/v1syn/raw/kn.zip">kn</a></th>
<td></td>
<td bgcolor='#ffe0de'><a rel="nofollow" title="Kannada-English (13.5k links 0.5M tokens )" href="download.php?f=Wiki/v1syn/xml/kn-en.xml.gz">13.5k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>kn</th>
</tr><th><a rel="nofollow" title="ko.zip: untokenized XML documents (2 files, 0.6M sentences, 9.7M tokens)" href="download.php?f=Wiki/v1syn/raw/ko.zip">ko</a></th>
<td></td>
<td bgcolor='#e4ffc8'><a rel="nofollow" title="Korean-English (2 aligned documents 0.6M links 21.7M tokens )" href="download.php?f=Wiki/v1syn/xml/ko-en.xml.gz">0.6M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ko</th>
</tr><th><a rel="nofollow" title="ku.zip: untokenized XML documents (1 files, 16 sentences, 0.3k tokens)" href="download.php?f=Wiki/v1syn/raw/ku.zip">ku</a></th>
<td></td>
<td bgcolor='#ffd0d0'><a rel="nofollow" title="Kurdish-English (15 links 0.8k tokens )" href="download.php?f=Wiki/v1syn/xml/ku-en.xml.gz">15</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ku</th>
</tr><th><a rel="nofollow" title="kv.zip: untokenized XML documents (1 files, 29.4k sentences, 0.3M tokens)" href="download.php?f=Wiki/v1syn/raw/kv.zip">kv</a></th>
<td></td>
<td bgcolor='#ffede9'><a rel="nofollow" title="Komi-English (29.4k links 0.8M tokens )" href="download.php?f=Wiki/v1syn/xml/kv-en.xml.gz">29.4k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>kv</th>
</tr><th><a rel="nofollow" title="kw.zip: untokenized XML documents (1 files, 9.4k sentences, 0.1M tokens)" href="download.php?f=Wiki/v1syn/raw/kw.zip">kw</a></th>
<td></td>
<td bgcolor='#ffdcdb'><a rel="nofollow" title="Cornish-English (9.4k links 0.3M tokens )" href="download.php?f=Wiki/v1syn/xml/kw-en.xml.gz">9.4k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>kw</th>
</tr><th><a rel="nofollow" title="lad.zip: untokenized XML documents (1 files, 20.1k sentences, 0.4M tokens)" href="download.php?f=Wiki/v1syn/raw/lad.zip">lad</a></th>
<td></td>
<td bgcolor='#ffe6e3'><a rel="nofollow" title="Ladino-English (20.1k links 0.8M tokens )" href="download.php?f=Wiki/v1syn/xml/lad-en.xml.gz">20.1k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>lad</th>
</tr><tr><th></th>
<th>de</th>
<th>en</th>
<th>et</th>
<th>fi</th>
<th>ru</th>
<th>sv</th>
<th></th></tr>
<th><a rel="nofollow" title="lb.zip: untokenized XML documents (1 files, 0.4M sentences, 5.7M tokens)" href="download.php?f=Wiki/v1syn/raw/lb.zip">lb</a></th>
<td></td>
<td bgcolor='#eaffcc'><a rel="nofollow" title="Luxembourgish-English (0.4M links 11.6M tokens )" href="download.php?f=Wiki/v1syn/xml/lb-en.xml.gz">0.4M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>lb</th>
</tr><th><a rel="nofollow" title="lfn.zip: untokenized XML documents (1 files, 33.3k sentences, 0.6M tokens)" href="download.php?f=Wiki/v1syn/raw/lfn.zip">lfn</a></th>
<td></td>
<td bgcolor='#ffefea'><a rel="nofollow" title="lfn-English (33.3k links 1.2M tokens )" href="download.php?f=Wiki/v1syn/xml/lfn-en.xml.gz">33.3k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>lfn</th>
</tr><th><a rel="nofollow" title="lg.zip: untokenized XML documents (1 files, 15.6k sentences, 0.2M tokens)" href="download.php?f=Wiki/v1syn/raw/lg.zip">lg</a></th>
<td></td>
<td bgcolor='#ffe2e0'><a rel="nofollow" title="Ganda-English (15.6k links 0.5M tokens )" href="download.php?f=Wiki/v1syn/xml/lg-en.xml.gz">15.6k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>lg</th>
</tr><th><a rel="nofollow" title="lij.zip: untokenized XML documents (1 files, 11.0k sentences, 0.2M tokens)" href="download.php?f=Wiki/v1syn/raw/lij.zip">lij</a></th>
<td></td>
<td bgcolor='#ffdddc'><a rel="nofollow" title="lij-English (11.0k links 0.4M tokens )" href="download.php?f=Wiki/v1syn/xml/lij-en.xml.gz">11.0k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>lij</th>
</tr><th><a rel="nofollow" title="lmo.zip: untokenized XML documents (1 files, 0.1M sentences, 2.1M tokens)" href="download.php?f=Wiki/v1syn/raw/lmo.zip">lmo</a></th>
<td></td>
<td bgcolor='#ffffee'><a rel="nofollow" title="lmo-English (0.1M links 4.2M tokens )" href="download.php?f=Wiki/v1syn/xml/lmo-en.xml.gz">0.1M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>lmo</th>
</tr><th><a rel="nofollow" title="ln.zip: untokenized XML documents (1 files, 7.0k sentences, 0.1M tokens)" href="download.php?f=Wiki/v1syn/raw/ln.zip">ln</a></th>
<td></td>
<td bgcolor='#ffd9d8'><a rel="nofollow" title="Lingala-English (7.0k links 0.2M tokens )" href="download.php?f=Wiki/v1syn/xml/ln-en.xml.gz">7.0k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ln</th>
</tr><th><a rel="nofollow" title="lo.zip: untokenized XML documents (1 files, 0.9k sentences, 6.7k tokens)" href="download.php?f=Wiki/v1syn/raw/lo.zip">lo</a></th>
<td></td>
<td bgcolor='#ffd1d1'><a rel="nofollow" title="Lao-English (0.9k links 21.2k tokens )" href="download.php?f=Wiki/v1syn/xml/lo-en.xml.gz">0.9k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>lo</th>
</tr><th><a rel="nofollow" title="lt.zip: untokenized XML documents (3 files, 1.9M sentences, 26.7M tokens)" href="download.php?f=Wiki/v1syn/raw/lt.zip">lt</a></th>
<td></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="Lithuanian-English (3 aligned documents 1.9M links 59.7M tokens )" href="download.php?f=Wiki/v1syn/xml/lt-en.xml.gz">1.9M</a></td>
<td></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="Lithuanian-Finnish (3 aligned documents 1.9M links 48.8M tokens )" href="download.php?f=Wiki/v1syn/xml/lt-fi.xml.gz">1.9M</a></td>
<td></td>
<td></td>
<th>lt</th>
</tr><th><a rel="nofollow" title="lv.zip: untokenized XML documents (2 files, 1.2M sentences, 16.8M tokens)" href="download.php?f=Wiki/v1syn/raw/lv.zip">lv</a></th>
<td></td>
<td bgcolor='#deffc6'><a rel="nofollow" title="Latvian-English (2 aligned documents 1.2M links 37.9M tokens )" href="download.php?f=Wiki/v1syn/xml/lv-en.xml.gz">1.2M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>lv</th>
</tr><th><a rel="nofollow" title="mai.zip: untokenized XML documents (1 files, 0.3k sentences, 5.1k tokens)" href="download.php?f=Wiki/v1syn/raw/mai.zip">mai</a></th>
<td></td>
<td bgcolor='#ffd0d0'><a rel="nofollow" title="Maithili-English (0.3k links 8.3k tokens )" href="download.php?f=Wiki/v1syn/xml/mai-en.xml.gz">0.3k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>mai</th>
</tr><th><a rel="nofollow" title="mdf.zip: untokenized XML documents (1 files, 5.4k sentences, 55.3k tokens)" href="download.php?f=Wiki/v1syn/raw/mdf.zip">mdf</a></th>
<td></td>
<td bgcolor='#ffd7d7'><a rel="nofollow" title="Moksha-English (5.4k links 0.1M tokens )" href="download.php?f=Wiki/v1syn/xml/mdf-en.xml.gz">5.4k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>mdf</th>
</tr><th><a rel="nofollow" title="mg.zip: untokenized XML documents (1 files, 0.2M sentences, 3.5M tokens)" href="download.php?f=Wiki/v1syn/raw/mg.zip">mg</a></th>
<td></td>
<td bgcolor='#f2ffd3'><a rel="nofollow" title="Malagasy-English (0.2M links 6.9M tokens )" href="download.php?f=Wiki/v1syn/xml/mg-en.xml.gz">0.2M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>mg</th>
</tr><th><a rel="nofollow" title="mh.zip: untokenized XML documents (1 files, 25 sentences, 0.3k tokens)" href="download.php?f=Wiki/v1syn/raw/mh.zip">mh</a></th>
<td></td>
<td bgcolor='#ffd0d0'><a rel="nofollow" title="Marshallese-English (24 links 0.6k tokens )" href="download.php?f=Wiki/v1syn/xml/mh-en.xml.gz">24</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>mh</th>
</tr><th><a rel="nofollow" title="mk.zip: untokenized XML documents (2 files, 1.2M sentences, 23.6M tokens)" href="download.php?f=Wiki/v1syn/raw/mk.zip">mk</a></th>
<td></td>
<td bgcolor='#deffc6'><a rel="nofollow" title="Macedonian-English (2 aligned documents 1.2M links 47.9M tokens )" href="download.php?f=Wiki/v1syn/xml/mk-en.xml.gz">1.2M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>mk</th>
</tr><th><a rel="nofollow" title="ml.zip: untokenized XML documents (1 files, 91.7k sentences, 1.2M tokens)" href="download.php?f=Wiki/v1syn/raw/ml.zip">ml</a></th>
<td></td>
<td bgcolor='#fffef0'><a rel="nofollow" title="Malayalam-English (91.7k links 2.5M tokens )" href="download.php?f=Wiki/v1syn/xml/ml-en.xml.gz">91.7k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ml</th>
</tr><th><a rel="nofollow" title="mn.zip: untokenized XML documents (1 files, 0.2M sentences, 3.4M tokens)" href="download.php?f=Wiki/v1syn/raw/mn.zip">mn</a></th>
<td></td>
<td bgcolor='#f3ffd4'><a rel="nofollow" title="Mongolian-English (0.2M links 7.0M tokens )" href="download.php?f=Wiki/v1syn/xml/mn-en.xml.gz">0.2M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>mn</th>
</tr><th><a rel="nofollow" title="mnw.zip: untokenized XML documents (1 files, 0.4k sentences, 3.9k tokens)" href="download.php?f=Wiki/v1syn/raw/mnw.zip">mnw</a></th>
<td></td>
<td bgcolor='#ffd0d0'><a rel="nofollow" title="mnw-English (0.4k links 8.9k tokens )" href="download.php?f=Wiki/v1syn/xml/mnw-en.xml.gz">0.4k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>mnw</th>
</tr><th><a rel="nofollow" title="mr.zip: untokenized XML documents (1 files, 0.6M sentences, 5.9M tokens)" href="download.php?f=Wiki/v1syn/raw/mr.zip">mr</a></th>
<td></td>
<td bgcolor='#e5ffc8'><a rel="nofollow" title="Marathi-English (0.6M links 14.8M tokens )" href="download.php?f=Wiki/v1syn/xml/mr-en.xml.gz">0.6M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>mr</th>
</tr><th><a rel="nofollow" title="ms.zip: untokenized XML documents (2 files, 1.5M sentences, 28.2M tokens)" href="download.php?f=Wiki/v1syn/raw/ms.zip">ms</a></th>
<td></td>
<td bgcolor='#dbffc6'><a rel="nofollow" title="Malay-English (2 aligned documents 1.5M links 57.9M tokens )" href="download.php?f=Wiki/v1syn/xml/ms-en.xml.gz">1.5M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ms</th>
</tr><th><a rel="nofollow" title="mt.zip: untokenized XML documents (1 files, 71.0k sentences, 1.2M tokens)" href="download.php?f=Wiki/v1syn/raw/mt.zip">mt</a></th>
<td></td>
<td bgcolor='#fffcf1'><a rel="nofollow" title="Maltese-English (71.0k links 2.6M tokens )" href="download.php?f=Wiki/v1syn/xml/mt-en.xml.gz">71.0k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>mt</th>
</tr><th><a rel="nofollow" title="mwl.zip: untokenized XML documents (1 files, 63.8k sentences, 1.4M tokens)" href="download.php?f=Wiki/v1syn/raw/mwl.zip">mwl</a></th>
<td></td>
<td bgcolor='#fffbf1'><a rel="nofollow" title="Mirandese-English (63.8k links 2.9M tokens )" href="download.php?f=Wiki/v1syn/xml/mwl-en.xml.gz">63.8k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>mwl</th>
</tr><th><a rel="nofollow" title="my.zip: untokenized XML documents (1 files, 0.9k sentences, 8.9k tokens)" href="download.php?f=Wiki/v1syn/raw/my.zip">my</a></th>
<td></td>
<td bgcolor='#ffd1d1'><a rel="nofollow" title="Burmese-English (0.9k links 18.6k tokens )" href="download.php?f=Wiki/v1syn/xml/my-en.xml.gz">0.9k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>my</th>
</tr><th><a rel="nofollow" title="myv.zip: untokenized XML documents (1 files, 34.4k sentences, 0.3M tokens)" href="download.php?f=Wiki/v1syn/raw/myv.zip">myv</a></th>
<td></td>
<td bgcolor='#fff0eb'><a rel="nofollow" title="Erzya-English (34.4k links 0.8M tokens )" href="download.php?f=Wiki/v1syn/xml/myv-en.xml.gz">34.4k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>myv</th>
</tr><th><a rel="nofollow" title="na.zip: untokenized XML documents (1 files, 1.2k sentences, 9.8k tokens)" href="download.php?f=Wiki/v1syn/raw/na.zip">na</a></th>
<td></td>
<td bgcolor='#ffd1d1'><a rel="nofollow" title="Nauru-English (1.2k links 21.1k tokens )" href="download.php?f=Wiki/v1syn/xml/na-en.xml.gz">1.2k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>na</th>
</tr><th><a rel="nofollow" title="nds.zip: untokenized XML documents (1 files, 0.3M sentences, 5.0M tokens)" href="download.php?f=Wiki/v1syn/raw/nds.zip">nds</a></th>
<td></td>
<td bgcolor='#ebffcd'><a rel="nofollow" title="Low German-English (0.3M links 10.1M tokens )" href="download.php?f=Wiki/v1syn/xml/nds-en.xml.gz">0.3M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>nds</th>
</tr><th><a rel="nofollow" title="nl.zip: untokenized XML documents (14 files, 13.3M sentences, 230.7M tokens)" href="download.php?f=Wiki/v1syn/raw/nl.zip">nl</a></th>
<td></td>
<td bgcolor='#bfffbf'><a rel="nofollow" title="Dutch-English (14 aligned documents 13.3M links 462.5M tokens )" href="download.php?f=Wiki/v1syn/xml/nl-en.xml.gz">13.3M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>nl</th>
</tr><tr><th></th>
<th>de</th>
<th>en</th>
<th>et</th>
<th>fi</th>
<th>ru</th>
<th>sv</th>
<th></th></tr>
<th><a rel="nofollow" title="no.zip: untokenized XML documents (5 files, 4.6M sentences, 77.6M tokens)" href="download.php?f=Wiki/v1syn/raw/no.zip">no</a></th>
<td></td>
<td bgcolor='#ceffce'><a rel="nofollow" title="Norwegian-English (5 aligned documents 4.6M links 162.4M tokens )" href="download.php?f=Wiki/v1syn/xml/no-en.xml.gz">4.6M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>no</th>
</tr><th><a rel="nofollow" title="nov.zip: untokenized XML documents (1 files, 2.1k sentences, 32.0k tokens)" href="download.php?f=Wiki/v1syn/raw/nov.zip">nov</a></th>
<td></td>
<td bgcolor='#ffd3d3'><a rel="nofollow" title="nov-English (2.1k links 64.0k tokens )" href="download.php?f=Wiki/v1syn/xml/nov-en.xml.gz">2.1k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>nov</th>
</tr><th><a rel="nofollow" title="ny.zip: untokenized XML documents (1 files, 4.6k sentences, 81.7k tokens)" href="download.php?f=Wiki/v1syn/raw/ny.zip">ny</a></th>
<td></td>
<td bgcolor='#ffd6d6'><a rel="nofollow" title="Chichewa-English (4.6k links 0.2M tokens )" href="download.php?f=Wiki/v1syn/xml/ny-en.xml.gz">4.6k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ny</th>
</tr><th><a rel="nofollow" title="oc.zip: untokenized XML documents (1 files, 0.4M sentences, 7.6M tokens)" href="download.php?f=Wiki/v1syn/raw/oc.zip">oc</a></th>
<td></td>
<td bgcolor='#eaffcc'><a rel="nofollow" title="Occitan (post 1500)-English (0.4M links 15.1M tokens )" href="download.php?f=Wiki/v1syn/xml/oc-en.xml.gz">0.4M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>oc</th>
</tr><th><a rel="nofollow" title="or.zip: untokenized XML documents (1 files, 3.1k sentences, 37.8k tokens)" href="download.php?f=Wiki/v1syn/raw/or.zip">or</a></th>
<td></td>
<td bgcolor='#ffd4d4'><a rel="nofollow" title="Oriya-English (3.1k links 77.9k tokens )" href="download.php?f=Wiki/v1syn/xml/or-en.xml.gz">3.1k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>or</th>
</tr><th><a rel="nofollow" title="pa.zip: untokenized XML documents (1 files, 2.7k sentences, 39.8k tokens)" href="download.php?f=Wiki/v1syn/raw/pa.zip">pa</a></th>
<td></td>
<td bgcolor='#ffd3d3'><a rel="nofollow" title="Panjabi-English (2.7k links 77.6k tokens )" href="download.php?f=Wiki/v1syn/xml/pa-en.xml.gz">2.7k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>pa</th>
</tr><th><a rel="nofollow" title="pag.zip: untokenized XML documents (1 files, 2.5k sentences, 34.8k tokens)" href="download.php?f=Wiki/v1syn/raw/pag.zip">pag</a></th>
<td></td>
<td bgcolor='#ffd3d3'><a rel="nofollow" title="Pangasinan-English (2.5k links 69.6k tokens )" href="download.php?f=Wiki/v1syn/xml/pag-en.xml.gz">2.5k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>pag</th>
</tr><th><a rel="nofollow" title="pap.zip: untokenized XML documents (1 files, 8.1k sentences, 0.2M tokens)" href="download.php?f=Wiki/v1syn/raw/pap.zip">pap</a></th>
<td></td>
<td bgcolor='#ffdad9'><a rel="nofollow" title="Papiamento-English (8.1k links 0.3M tokens )" href="download.php?f=Wiki/v1syn/xml/pap-en.xml.gz">8.1k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>pap</th>
</tr><th><a rel="nofollow" title="pdc.zip: untokenized XML documents (1 files, 4.4k sentences, 59.8k tokens)" href="download.php?f=Wiki/v1syn/raw/pdc.zip">pdc</a></th>
<td></td>
<td bgcolor='#ffd6d6'><a rel="nofollow" title="pdc-English (4.4k links 0.1M tokens )" href="download.php?f=Wiki/v1syn/xml/pdc-en.xml.gz">4.4k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>pdc</th>
</tr><th><a rel="nofollow" title="pl.zip: untokenized XML documents (17 files, 15.1M sentences, 238.2M tokens)" href="download.php?f=Wiki/v1syn/raw/pl.zip">pl</a></th>
<td></td>
<td bgcolor='#bfffbf'><a rel="nofollow" title="Polish-English (17 aligned documents 15.1M links 520.2M tokens )" href="download.php?f=Wiki/v1syn/xml/pl-en.xml.gz">15.1M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>pl</th>
</tr><th><a rel="nofollow" title="pms.zip: untokenized XML documents (1 files, 0.3k sentences, 4.0k tokens)" href="download.php?f=Wiki/v1syn/raw/pms.zip">pms</a></th>
<td></td>
<td bgcolor='#ffd0d0'><a rel="nofollow" title="pms-English (0.3k links 7.9k tokens )" href="download.php?f=Wiki/v1syn/xml/pms-en.xml.gz">0.3k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>pms</th>
</tr><th><a rel="nofollow" title="ps.zip: untokenized XML documents (1 files, 2.1k sentences, 38.7k tokens)" href="download.php?f=Wiki/v1syn/raw/ps.zip">ps</a></th>
<td></td>
<td bgcolor='#ffd2d2'><a rel="nofollow" title="Pushto-English (2.1k links 74.1k tokens )" href="download.php?f=Wiki/v1syn/xml/ps-en.xml.gz">2.1k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ps</th>
</tr><th><a rel="nofollow" title="pt.zip: untokenized XML documents (13 files, 11.5M sentences, 253.5M tokens)" href="download.php?f=Wiki/v1syn/raw/pt.zip">pt</a></th>
<td></td>
<td bgcolor='#c1ffc1'><a rel="nofollow" title="Portuguese-English (13 aligned documents 11.5M links 499.9M tokens )" href="download.php?f=Wiki/v1syn/xml/pt-en.xml.gz">11.5M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>pt</th>
</tr><th><a rel="nofollow" title="rm.zip: untokenized XML documents (1 files, 76.8k sentences, 1.6M tokens)" href="download.php?f=Wiki/v1syn/raw/rm.zip">rm</a></th>
<td></td>
<td bgcolor='#fffdf1'><a rel="nofollow" title="Romansh-English (76.8k links 3.1M tokens )" href="download.php?f=Wiki/v1syn/xml/rm-en.xml.gz">76.8k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>rm</th>
</tr><th><a rel="nofollow" title="rn.zip: untokenized XML documents (1 files, 2.5k sentences, 33.3k tokens)" href="download.php?f=Wiki/v1syn/raw/rn.zip">rn</a></th>
<td></td>
<td bgcolor='#ffd3d3'><a rel="nofollow" title="Rundi-English (2.5k links 72.7k tokens )" href="download.php?f=Wiki/v1syn/xml/rn-en.xml.gz">2.5k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>rn</th>
</tr><th><a rel="nofollow" title="ro.zip: untokenized XML documents (4 files, 3.1M sentences, 65.5M tokens)" href="download.php?f=Wiki/v1syn/raw/ro.zip">ro</a></th>
<td></td>
<td bgcolor='#d3ffca'><a rel="nofollow" title="Romanian-English (4 aligned documents 3.1M links 131.1M tokens )" href="download.php?f=Wiki/v1syn/xml/ro-en.xml.gz">3.1M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ro</th>
</tr><th><a rel="nofollow" title="ru.zip: untokenized XML documents (32 files, 27.9M sentences, 426.0M tokens)" href="download.php?f=Wiki/v1syn/raw/ru.zip">ru</a></th>
<td></td>
<td bgcolor='#bfffbf'><a rel="nofollow" title="Russian-English (24 aligned documents 20.6M links 716.1M tokens )" href="download.php?f=Wiki/v1syn/xml/ru-en.xml.gz">20.6M</a></td>
<td></td>
<td bgcolor='#bfffbf'><a rel="nofollow" title="Russian-Finnish (24 aligned documents 19.9M links 549.1M tokens )" href="download.php?f=Wiki/v1syn/xml/ru-fi.xml.gz">19.9M</a></td>
<td></td>
<td></td>
<th>ru</th>
</tr><th><a rel="nofollow" title="rw.zip: untokenized XML documents (1 files, 3.4k sentences, 55.0k tokens)" href="download.php?f=Wiki/v1syn/raw/rw.zip">rw</a></th>
<td></td>
<td bgcolor='#ffd4d4'><a rel="nofollow" title="Kinyarwanda-English (3.4k links 0.1M tokens )" href="download.php?f=Wiki/v1syn/xml/rw-en.xml.gz">3.4k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>rw</th>
</tr><th><a rel="nofollow" title="sa.zip: untokenized XML documents (1 files, 0.3k sentences, 2.2k tokens)" href="download.php?f=Wiki/v1syn/raw/sa.zip">sa</a></th>
<td></td>
<td bgcolor='#ffd0d0'><a rel="nofollow" title="Sanskrit-English (0.3k links 5.1k tokens )" href="download.php?f=Wiki/v1syn/xml/sa-en.xml.gz">0.3k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>sa</th>
</tr><th><a rel="nofollow" title="sah.zip: untokenized XML documents (1 files, 0.1M sentences, 1.5M tokens)" href="download.php?f=Wiki/v1syn/raw/sah.zip">sah</a></th>
<td></td>
<td bgcolor='#ffffea'><a rel="nofollow" title="Yakut-English (0.1M links 4.0M tokens )" href="download.php?f=Wiki/v1syn/xml/sah-en.xml.gz">0.1M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>sah</th>
</tr><th><a rel="nofollow" title="scn.zip: untokenized XML documents (1 files, 56.4k sentences, 1.1M tokens)" href="download.php?f=Wiki/v1syn/raw/scn.zip">scn</a></th>
<td></td>
<td bgcolor='#fff9f0'><a rel="nofollow" title="Sicilian-English (56.4k links 2.1M tokens )" href="download.php?f=Wiki/v1syn/xml/scn-en.xml.gz">56.4k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>scn</th>
</tr><th><a rel="nofollow" title="sco.zip: untokenized XML documents (1 files, 0.1M sentences, 2.0M tokens)" href="download.php?f=Wiki/v1syn/raw/sco.zip">sco</a></th>
<td></td>
<td bgcolor='#ffffed'><a rel="nofollow" title="Scots-English (0.1M links 4.0M tokens )" href="download.php?f=Wiki/v1syn/xml/sco-en.xml.gz">0.1M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>sco</th>
</tr><th><a rel="nofollow" title="sd.zip: untokenized XML documents (1 files, 4.1k sentences, 87.0k tokens)" href="download.php?f=Wiki/v1syn/raw/sd.zip">sd</a></th>
<td></td>
<td bgcolor='#ffd5d5'><a rel="nofollow" title="Sindhi-English (4.1k links 0.2M tokens )" href="download.php?f=Wiki/v1syn/xml/sd-en.xml.gz">4.1k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>sd</th>
</tr><th><a rel="nofollow" title="se.zip: untokenized XML documents (1 files, 17.0k sentences, 0.2M tokens)" href="download.php?f=Wiki/v1syn/raw/se.zip">se</a></th>
<td></td>
<td bgcolor='#ffe3e1'><a rel="nofollow" title="Northern Sami-English (17.0k links 0.4M tokens )" href="download.php?f=Wiki/v1syn/xml/se-en.xml.gz">17.0k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>se</th>
</tr><th><a rel="nofollow" title="sg.zip: untokenized XML documents (1 files, 0.5k sentences, 6.8k tokens)" href="download.php?f=Wiki/v1syn/raw/sg.zip">sg</a></th>
<td></td>
<td bgcolor='#ffd0d0'><a rel="nofollow" title="Sango-English (0.5k links 13.8k tokens )" href="download.php?f=Wiki/v1syn/xml/sg-en.xml.gz">0.5k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>sg</th>
</tr><th><a rel="nofollow" title="si.zip: untokenized XML documents (1 files, 16.3k sentences, 0.4M tokens)" href="download.php?f=Wiki/v1syn/raw/si.zip">si</a></th>
<td></td>
<td bgcolor='#ffe3e1'><a rel="nofollow" title="Sinhala-English (16.3k links 0.8M tokens )" href="download.php?f=Wiki/v1syn/xml/si-en.xml.gz">16.3k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>si</th>
</tr><tr><th></th>
<th>de</th>
<th>en</th>
<th>et</th>
<th>fi</th>
<th>ru</th>
<th>sv</th>
<th></th></tr>
<th><a rel="nofollow" title="sl.zip: untokenized XML documents (2 files, 1.7M sentences, 29.8M tokens)" href="download.php?f=Wiki/v1syn/raw/sl.zip">sl</a></th>
<td></td>
<td bgcolor='#daffc7'><a rel="nofollow" title="Slovenian-English (2 aligned documents 1.7M links 63.5M tokens )" href="download.php?f=Wiki/v1syn/xml/sl-en.xml.gz">1.7M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>sl</th>
</tr><th><a rel="nofollow" title="sq.zip: untokenized XML documents (1 files, 0.7M sentences, 14.4M tokens)" href="download.php?f=Wiki/v1syn/raw/sq.zip">sq</a></th>
<td></td>
<td bgcolor='#e3ffc7'><a rel="nofollow" title="Albanian-English (0.7M links 28.1M tokens )" href="download.php?f=Wiki/v1syn/xml/sq-en.xml.gz">0.7M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>sq</th>
</tr><th><a rel="nofollow" title="stq.zip: untokenized XML documents (1 files, 13.7k sentences, 0.2M tokens)" href="download.php?f=Wiki/v1syn/raw/stq.zip">stq</a></th>
<td></td>
<td bgcolor='#ffe0de'><a rel="nofollow" title="stq-English (13.7k links 0.4M tokens )" href="download.php?f=Wiki/v1syn/xml/stq-en.xml.gz">13.7k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>stq</th>
</tr><th><a rel="nofollow" title="sv.zip: untokenized XML documents (24 files, 21.5M sentences, 310.1M tokens)" href="download.php?f=Wiki/v1syn/raw/sv.zip">sv</a></th>
<td></td>
<td bgcolor='#bfffbf'><a rel="nofollow" title="Swedish-English (16 aligned documents 14.1M links 442.5M tokens )" href="download.php?f=Wiki/v1syn/xml/sv-en.xml.gz">14.1M</a></td>
<td></td>
<td bgcolor='#bfffbf'><a rel="nofollow" title="Swedish-Finnish (15 aligned documents 13.1M links 344.5M tokens )" href="download.php?f=Wiki/v1syn/xml/sv-fi.xml.gz">13.1M</a></td>
<td></td>
<td></td>
<th>sv</th>
</tr><th><a rel="nofollow" title="sw.zip: untokenized XML documents (1 files, 0.2M sentences, 4.5M tokens)" href="download.php?f=Wiki/v1syn/raw/sw.zip">sw</a></th>
<td></td>
<td bgcolor='#f0ffd1'><a rel="nofollow" title="Swahili-English (0.2M links 9.0M tokens )" href="download.php?f=Wiki/v1syn/xml/sw-en.xml.gz">0.2M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>sw</th>
</tr><th><a rel="nofollow" title="ta.zip: untokenized XML documents (1 files, 0.1M sentences, 1.6M tokens)" href="download.php?f=Wiki/v1syn/raw/ta.zip">ta</a></th>
<td></td>
<td bgcolor='#ffffef'><a rel="nofollow" title="Tamil-English (0.1M links 3.2M tokens )" href="download.php?f=Wiki/v1syn/xml/ta-en.xml.gz">0.1M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ta</th>
</tr><th><a rel="nofollow" title="te.zip: untokenized XML documents (2 files, 1.2M sentences, 12.0M tokens)" href="download.php?f=Wiki/v1syn/raw/te.zip">te</a></th>
<td></td>
<td bgcolor='#deffc6'><a rel="nofollow" title="Telugu-English (2 aligned documents 1.2M links 28.7M tokens )" href="download.php?f=Wiki/v1syn/xml/te-en.xml.gz">1.2M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>te</th>
</tr><th><a rel="nofollow" title="tet.zip: untokenized XML documents (1 files, 4.6k sentences, 68.7k tokens)" href="download.php?f=Wiki/v1syn/raw/tet.zip">tet</a></th>
<td></td>
<td bgcolor='#ffd6d6'><a rel="nofollow" title="Tetum-English (4.6k links 0.1M tokens )" href="download.php?f=Wiki/v1syn/xml/tet-en.xml.gz">4.6k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>tet</th>
</tr><th><a rel="nofollow" title="tg.zip: untokenized XML documents (1 files, 0.2M sentences, 3.8M tokens)" href="download.php?f=Wiki/v1syn/raw/tg.zip">tg</a></th>
<td></td>
<td bgcolor='#f0ffd1'><a rel="nofollow" title="Tajik-English (0.2M links 8.1M tokens )" href="download.php?f=Wiki/v1syn/xml/tg-en.xml.gz">0.2M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>tg</th>
</tr><th><a rel="nofollow" title="th.zip: untokenized XML documents (1 files, 0.3M sentences, 3.2M tokens)" href="download.php?f=Wiki/v1syn/raw/th.zip">th</a></th>
<td></td>
<td bgcolor='#ebffcc'><a rel="nofollow" title="Thai-English (0.3M links 9.4M tokens )" href="download.php?f=Wiki/v1syn/xml/th-en.xml.gz">0.3M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>th</th>
</tr><th><a rel="nofollow" title="ti.zip: untokenized XML documents (1 files, 27 sentences, 0.4k tokens)" href="download.php?f=Wiki/v1syn/raw/ti.zip">ti</a></th>
<td></td>
<td bgcolor='#ffd0d0'><a rel="nofollow" title="Tigrinya-English (26 links 0.9k tokens )" href="download.php?f=Wiki/v1syn/xml/ti-en.xml.gz">26</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ti</th>
</tr><th><a rel="nofollow" title="tk.zip: untokenized XML documents (1 files, 76.3k sentences, 0.9M tokens)" href="download.php?f=Wiki/v1syn/raw/tk.zip">tk</a></th>
<td></td>
<td bgcolor='#fffdf1'><a rel="nofollow" title="Turkmen-English (76.3k links 2.0M tokens )" href="download.php?f=Wiki/v1syn/xml/tk-en.xml.gz">76.3k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>tk</th>
</tr><th><a rel="nofollow" title="tl.zip: untokenized XML documents (1 files, 0.3M sentences, 6.4M tokens)" href="download.php?f=Wiki/v1syn/raw/tl.zip">tl</a></th>
<td></td>
<td bgcolor='#ecffcd'><a rel="nofollow" title="Tagalog-English (0.3M links 12.2M tokens )" href="download.php?f=Wiki/v1syn/xml/tl-en.xml.gz">0.3M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>tl</th>
</tr><th><a rel="nofollow" title="to.zip: untokenized XML documents (1 files, 2.3k sentences, 46.3k tokens)" href="download.php?f=Wiki/v1syn/raw/to.zip">to</a></th>
<td></td>
<td bgcolor='#ffd3d3'><a rel="nofollow" title="Tonga (Tonga Islands)-English (2.3k links 87.6k tokens )" href="download.php?f=Wiki/v1syn/xml/to-en.xml.gz">2.3k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>to</th>
</tr><th><a rel="nofollow" title="tpi.zip: untokenized XML documents (1 files, 1.0k sentences, 17.5k tokens)" href="download.php?f=Wiki/v1syn/raw/tpi.zip">tpi</a></th>
<td></td>
<td bgcolor='#ffd1d1'><a rel="nofollow" title="Tok Pisin-English (1.0k links 35.0k tokens )" href="download.php?f=Wiki/v1syn/xml/tpi-en.xml.gz">1.0k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>tpi</th>
</tr><th><a rel="nofollow" title="tr.zip: untokenized XML documents (4 files, 3.8M sentences, 50.9M tokens)" href="download.php?f=Wiki/v1syn/raw/tr.zip">tr</a></th>
<td></td>
<td bgcolor='#d1ffce'><a rel="nofollow" title="Turkish-English (4 aligned documents 3.8M links 112.9M tokens )" href="download.php?f=Wiki/v1syn/xml/tr-en.xml.gz">3.8M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>tr</th>
</tr><th><a rel="nofollow" title="ts.zip: untokenized XML documents (1 files, 4.1k sentences, 85.3k tokens)" href="download.php?f=Wiki/v1syn/raw/ts.zip">ts</a></th>
<td></td>
<td bgcolor='#ffd5d5'><a rel="nofollow" title="Tsonga-English (4.1k links 0.2M tokens )" href="download.php?f=Wiki/v1syn/xml/ts-en.xml.gz">4.1k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ts</th>
</tr><th><a rel="nofollow" title="tt.zip: untokenized XML documents (1 files, 0.4M sentences, 4.8M tokens)" href="download.php?f=Wiki/v1syn/raw/tt.zip">tt</a></th>
<td></td>
<td bgcolor='#e9ffcb'><a rel="nofollow" title="Tatar-English (0.4M links 10.2M tokens )" href="download.php?f=Wiki/v1syn/xml/tt-en.xml.gz">0.4M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>tt</th>
</tr><th><a rel="nofollow" title="ty.zip: untokenized XML documents (1 files, 0.8k sentences, 14.4k tokens)" href="download.php?f=Wiki/v1syn/raw/ty.zip">ty</a></th>
<td></td>
<td bgcolor='#ffd1d1'><a rel="nofollow" title="Tahitian-English (0.8k links 26.8k tokens )" href="download.php?f=Wiki/v1syn/xml/ty-en.xml.gz">0.8k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ty</th>
</tr><th><a rel="nofollow" title="tyv.zip: untokenized XML documents (1 files, 40.4k sentences, 0.5M tokens)" href="download.php?f=Wiki/v1syn/raw/tyv.zip">tyv</a></th>
<td></td>
<td bgcolor='#fff3ed'><a rel="nofollow" title="Tuvinian-English (40.4k links 1.0M tokens )" href="download.php?f=Wiki/v1syn/xml/tyv-en.xml.gz">40.4k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>tyv</th>
</tr><th><a rel="nofollow" title="udm.zip: untokenized XML documents (1 files, 28.8k sentences, 0.3M tokens)" href="download.php?f=Wiki/v1syn/raw/udm.zip">udm</a></th>
<td></td>
<td bgcolor='#ffede9'><a rel="nofollow" title="Udmurt-English (28.8k links 0.7M tokens )" href="download.php?f=Wiki/v1syn/xml/udm-en.xml.gz">28.8k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>udm</th>
</tr><th><a rel="nofollow" title="uk.zip: untokenized XML documents (16 files, 13.4M sentences, 200.2M tokens)" href="download.php?f=Wiki/v1syn/raw/uk.zip">uk</a></th>
<td></td>
<td bgcolor='#bfffbf'><a rel="nofollow" title="Ukrainian-English (16 aligned documents 13.5M links 440.1M tokens )" href="download.php?f=Wiki/v1syn/xml/uk-en.xml.gz">13.5M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>uk</th>
</tr><th><a rel="nofollow" title="ur.zip: untokenized XML documents (1 files, 0.7M sentences, 13.9M tokens)" href="download.php?f=Wiki/v1syn/raw/ur.zip">ur</a></th>
<td></td>
<td bgcolor='#e4ffc8'><a rel="nofollow" title="Urdu-English (0.7M links 25.8M tokens )" href="download.php?f=Wiki/v1syn/xml/ur-en.xml.gz">0.7M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ur</th>
</tr><th><a rel="nofollow" title="uz.zip: untokenized XML documents (1 files, 0.6M sentences, 6.6M tokens)" href="download.php?f=Wiki/v1syn/raw/uz.zip">uz</a></th>
<td></td>
<td bgcolor='#e5ffc9'><a rel="nofollow" title="Uzbek-English (0.6M links 13.6M tokens )" href="download.php?f=Wiki/v1syn/xml/uz-en.xml.gz">0.6M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>uz</th>
</tr><th><a rel="nofollow" title="vec.zip: untokenized XML documents (1 files, 51.0k sentences, 1.0M tokens)" href="download.php?f=Wiki/v1syn/raw/vec.zip">vec</a></th>
<td></td>
<td bgcolor='#fff7ef'><a rel="nofollow" title="vec-English (51.0k links 2.0M tokens )" href="download.php?f=Wiki/v1syn/xml/vec-en.xml.gz">51.0k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>vec</th>
</tr><th><a rel="nofollow" title="vi.zip: untokenized XML documents (7 files, 5.9M sentences, 146.5M tokens)" href="download.php?f=Wiki/v1syn/raw/vi.zip">vi</a></th>
<td></td>
<td bgcolor='#cbffcb'><a rel="nofollow" title="Vietnamese-English (7 aligned documents 5.9M links 258.2M tokens )" href="download.php?f=Wiki/v1syn/xml/vi-en.xml.gz">5.9M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>vi</th>
</tr><tr><th></th>
<th>de</th>
<th>en</th>
<th>et</th>
<th>fi</th>
<th>ru</th>
<th>sv</th>
<th></th></tr>
<th><a rel="nofollow" title="vo.zip: untokenized XML documents (1 files, 0.3M sentences, 5.2M tokens)" href="download.php?f=Wiki/v1syn/raw/vo.zip">vo</a></th>
<td></td>
<td bgcolor='#ecffcd'><a rel="nofollow" title="VolapÃ¼k-English (0.3M links 10.5M tokens )" href="download.php?f=Wiki/v1syn/xml/vo-en.xml.gz">0.3M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>vo</th>
</tr><th><a rel="nofollow" title="wa.zip: untokenized XML documents (1 files, 48.1k sentences, 0.8M tokens)" href="download.php?f=Wiki/v1syn/raw/wa.zip">wa</a></th>
<td></td>
<td bgcolor='#fff6ef'><a rel="nofollow" title="Walloon-English (48.1k links 1.5M tokens )" href="download.php?f=Wiki/v1syn/xml/wa-en.xml.gz">48.1k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>wa</th>
</tr><th><a rel="nofollow" title="wo.zip: untokenized XML documents (1 files, 10.9k sentences, 0.2M tokens)" href="download.php?f=Wiki/v1syn/raw/wo.zip">wo</a></th>
<td></td>
<td bgcolor='#ffdddc'><a rel="nofollow" title="Wolof-English (10.9k links 0.5M tokens )" href="download.php?f=Wiki/v1syn/xml/wo-en.xml.gz">10.9k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>wo</th>
</tr><th><a rel="nofollow" title="xal.zip: untokenized XML documents (1 files, 4.6k sentences, 46.1k tokens)" href="download.php?f=Wiki/v1syn/raw/xal.zip">xal</a></th>
<td></td>
<td bgcolor='#ffd6d6'><a rel="nofollow" title="Kalmyk-English (4.6k links 93.5k tokens )" href="download.php?f=Wiki/v1syn/xml/xal-en.xml.gz">4.6k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>xal</th>
</tr><th><a rel="nofollow" title="xh.zip: untokenized XML documents (1 files, 8.6k sentences, 0.1M tokens)" href="download.php?f=Wiki/v1syn/raw/xh.zip">xh</a></th>
<td></td>
<td bgcolor='#ffdbda'><a rel="nofollow" title="Xhosa-English (8.7k links 0.3M tokens )" href="download.php?f=Wiki/v1syn/xml/xh-en.xml.gz">8.7k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>xh</th>
</tr><th><a rel="nofollow" title="yi.zip: untokenized XML documents (1 files, 3.0k sentences, 42.3k tokens)" href="download.php?f=Wiki/v1syn/raw/yi.zip">yi</a></th>
<td></td>
<td bgcolor='#ffd4d4'><a rel="nofollow" title="Yiddish-English (3.0k links 85.7k tokens )" href="download.php?f=Wiki/v1syn/xml/yi-en.xml.gz">3.0k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>yi</th>
</tr><th><a rel="nofollow" title="yo.zip: untokenized XML documents (1 files, 40.7k sentences, 0.6M tokens)" href="download.php?f=Wiki/v1syn/raw/yo.zip">yo</a></th>
<td></td>
<td bgcolor='#fff3ed'><a rel="nofollow" title="Yoruba-English (40.7k links 1.2M tokens )" href="download.php?f=Wiki/v1syn/xml/yo-en.xml.gz">40.7k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>yo</th>
</tr><th><a rel="nofollow" title="zh.zip: untokenized XML documents (8 files, 6.2M sentences, 170.9M tokens)" href="download.php?f=Wiki/v1syn/raw/zh.zip">zh</a></th>
<td></td>
<td bgcolor='#caffca'><a rel="nofollow" title="Chinese-English (8 aligned documents 6.2M links 310.8M tokens )" href="download.php?f=Wiki/v1syn/xml/zh-en.xml.gz">6.2M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>zh</th>
</tr><th><a rel="nofollow" title="zu.zip: untokenized XML documents (1 files, 6.7k sentences, 88.9k tokens)" href="download.php?f=Wiki/v1syn/raw/zu.zip">zu</a></th>
<td></td>
<td bgcolor='#ffd8d7'><a rel="nofollow" title="Zulu-English (6.7k links 0.2M tokens )" href="download.php?f=Wiki/v1syn/xml/zu-en.xml.gz">6.7k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>zu</th>
</tr><tr><th></th>
<th>de</th>
<th>en</th>
<th>et</th>
<th>fi</th>
<th>ru</th>
<th>sv</th>
<th></th></tr>
</table>
</div></p></div><div id='download-moses' style='display: none;'><p>Links to zip-files with aligned plain text files, one per language (Moses format).</p><p>
<div class="sample"><table border="0" cellpadding="0">
<tr><th></th>
<th>de</th>
<th>en</th>
<th>et</th>
<th>fi</th>
<th>ru</th>
<th>sv</th>
<th></th></tr>
<th>ab</th>
<td></td>
<td bgcolor='#ffdedd'><a rel="nofollow" title="Abkhazian-English (11.3k links 0.3M tokens )" href="download.php?f=Wiki/v1syn/moses/ab-en.txt.zip">11.3k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ab</th>
</tr><th>ady</th>
<td></td>
<td bgcolor='#ffd3d3'><a rel="nofollow" title="Adyghe-English (2.6k links 54.4k tokens )" href="download.php?f=Wiki/v1syn/moses/ady-en.txt.zip">2.6k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ady</th>
</tr><th>af</th>
<td></td>
<td bgcolor='#dfffc6'><a rel="nofollow" title="Afrikaans-English (1.0M links 37.9M tokens )" href="download.php?f=Wiki/v1syn/moses/af-en.txt.zip">1.0M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>af</th>
</tr><th>am</th>
<td></td>
<td bgcolor='#ffd0d0'><a rel="nofollow" title="Amharic-English (0.3k links 13.7k tokens )" href="download.php?f=Wiki/v1syn/moses/am-en.txt.zip">0.3k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>am</th>
</tr><th>an</th>
<td></td>
<td bgcolor='#ffffe9'><a rel="nofollow" title="Aragonese-English (0.1M links 5.7M tokens )" href="download.php?f=Wiki/v1syn/moses/an-en.txt.zip">0.1M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>an</th>
</tr><th>ang</th>
<td></td>
<td bgcolor='#ffd3d3'><a rel="nofollow" title="English, Old (ca.450-1100)-English (2.3k links 58.8k tokens )" href="download.php?f=Wiki/v1syn/moses/ang-en.txt.zip">2.3k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ang</th>
</tr><th>ar</th>
<td></td>
<td bgcolor='#c9ffc9'><a rel="nofollow" title="Arabic-English (6.7M links 296.5M tokens )" href="download.php?f=Wiki/v1syn/moses/ar-en.txt.zip">6.7M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ar</th>
</tr><th>as</th>
<td></td>
<td bgcolor='#ffd0d0'><a rel="nofollow" title="Assamese-English (0.7k links 11.6k tokens )" href="download.php?f=Wiki/v1syn/moses/as-en.txt.zip">0.7k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>as</th>
</tr><th>ast</th>
<td></td>
<td bgcolor='#daffc6'><a rel="nofollow" title="Asturian-English (1.7M links 68.8M tokens )" href="download.php?f=Wiki/v1syn/moses/ast-en.txt.zip">1.7M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ast</th>
</tr><th>awa</th>
<td></td>
<td bgcolor='#ffd0d0'><a rel="nofollow" title="Awadhi-English (2 links 53 tokens )" href="download.php?f=Wiki/v1syn/moses/awa-en.txt.zip">2</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>awa</th>
</tr><th>az</th>
<td></td>
<td bgcolor='#daffc7'><a rel="nofollow" title="Azerbaijani-English (1.7M links 50.2M tokens )" href="download.php?f=Wiki/v1syn/moses/az-en.txt.zip">1.7M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>az</th>
</tr><th>ba</th>
<td></td>
<td bgcolor='#e7ffca'><a rel="nofollow" title="Bashkir-English (0.5M links 13.5M tokens )" href="download.php?f=Wiki/v1syn/moses/ba-en.txt.zip">0.5M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ba</th>
</tr><th>bar</th>
<td></td>
<td bgcolor='#ffffec'><a rel="nofollow" title="bar-English (0.1M links 3.9M tokens )" href="download.php?f=Wiki/v1syn/moses/bar-en.txt.zip">0.1M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>bar</th>
</tr><th>be</th>
<td></td>
<td bgcolor='#daffc6'><a rel="nofollow" title="Belarusian-English (1.7M links 48.2M tokens )" href="download.php?f=Wiki/v1syn/moses/be-en.txt.zip">1.7M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>be</th>
</tr><th>bg</th>
<td></td>
<td bgcolor='#d2ffcb'><a rel="nofollow" title="Bulgarian-English (3.3M links 121.5M tokens )" href="download.php?f=Wiki/v1syn/moses/bg-en.txt.zip">3.3M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>bg</th>
</tr><th>bm</th>
<td></td>
<td bgcolor='#ffd2d2'><a rel="nofollow" title="Bambara-English (1.8k links 54.2k tokens )" href="download.php?f=Wiki/v1syn/moses/bm-en.txt.zip">1.8k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>bm</th>
</tr><th>bn</th>
<td></td>
<td bgcolor='#ffd7d7'><a rel="nofollow" title="Bengali-English (5.3k links 0.2M tokens )" href="download.php?f=Wiki/v1syn/moses/bn-en.txt.zip">5.3k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>bn</th>
</tr><th>bo</th>
<td></td>
<td bgcolor='#ffd0d0'><a rel="nofollow" title="Tibetan-English (27 links 0.6k tokens )" href="download.php?f=Wiki/v1syn/moses/bo-en.txt.zip">27</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>bo</th>
</tr><th>br</th>
<td></td>
<td bgcolor='#eaffcc'><a rel="nofollow" title="Breton-English (0.4M links 12.5M tokens )" href="download.php?f=Wiki/v1syn/moses/br-en.txt.zip">0.4M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>br</th>
</tr><th>ca</th>
<td></td>
<td bgcolor='#c9ffc9'><a rel="nofollow" title="Catalan-English (7.0M links 307.0M tokens )" href="download.php?f=Wiki/v1syn/moses/ca-en.txt.zip">7.0M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ca</th>
</tr><th>ce</th>
<td></td>
<td bgcolor='#eaffcc'><a rel="nofollow" title="Chechen-English (0.4M links 8.8M tokens )" href="download.php?f=Wiki/v1syn/moses/ce-en.txt.zip">0.4M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ce</th>
</tr><th>chr</th>
<td></td>
<td bgcolor='#ffd3d3'><a rel="nofollow" title="Cherokee-English (2.2k links 63.6k tokens )" href="download.php?f=Wiki/v1syn/moses/chr-en.txt.zip">2.2k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>chr</th>
</tr><th>co</th>
<td></td>
<td bgcolor='#ffe8e5'><a rel="nofollow" title="Corsican-English (22.3k links 0.8M tokens )" href="download.php?f=Wiki/v1syn/moses/co-en.txt.zip">22.3k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>co</th>
</tr><th>crh</th>
<td></td>
<td bgcolor='#ffe1df'><a rel="nofollow" title="Crimean Tatar-English (14.8k links 0.4M tokens )" href="download.php?f=Wiki/v1syn/moses/crh-en.txt.zip">14.8k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>crh</th>
</tr><th>cs</th>
<td></td>
<td bgcolor='#c9ffc9'><a rel="nofollow" title="Czech-English (7.0M links 249.1M tokens )" href="download.php?f=Wiki/v1syn/moses/cs-en.txt.zip">7.0M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>cs</th>
</tr><tr><th></th>
<th>de</th>
<th>en</th>
<th>et</th>
<th>fi</th>
<th>ru</th>
<th>sv</th>
<th></th></tr>
<th>csb</th>
<td></td>
<td bgcolor='#ffe5e3'><a rel="nofollow" title="Kashubian-English (18.7k links 0.5M tokens )" href="download.php?f=Wiki/v1syn/moses/csb-en.txt.zip">18.7k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>csb</th>
</tr><th>cy</th>
<td></td>
<td bgcolor='#e6ffc9'><a rel="nofollow" title="Welsh-English (0.5M links 18.3M tokens )" href="download.php?f=Wiki/v1syn/moses/cy-en.txt.zip">0.5M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>cy</th>
</tr><th>da</th>
<td></td>
<td bgcolor='#d4ffca'><a rel="nofollow" title="Danish-English (2.9M links 111.5M tokens )" href="download.php?f=Wiki/v1syn/moses/da-en.txt.zip">2.9M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>da</th>
</tr><th>de</th>
<td></td>
<td bgcolor='#bfffbf'><a rel="nofollow" title="German-English (44.4M links 1.7G tokens )" href="download.php?f=Wiki/v1syn/moses/de-en.txt.zip">44.4M</a></td>
<td></td>
<td bgcolor='#bfffbf'><a rel="nofollow" title="German-Finnish (36.0M links 1.1G tokens )" href="download.php?f=Wiki/v1syn/moses/de-fi.txt.zip">36.0M</a></td>
<td></td>
<td></td>
<th>de</th>
</tr><th>dsb</th>
<td></td>
<td bgcolor='#ffe0de'><a rel="nofollow" title="Lower Sorbian-English (13.5k links 0.4M tokens )" href="download.php?f=Wiki/v1syn/moses/dsb-en.txt.zip">13.5k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>dsb</th>
</tr><th>el</th>
<td></td>
<td bgcolor='#d3ffca'><a rel="nofollow" title="Greek-English (3.0M links 124.3M tokens )" href="download.php?f=Wiki/v1syn/moses/el-en.txt.zip">3.0M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>el</th>
</tr><th>eo</th>
<td></td>
<td bgcolor='#d8ffc7'><a rel="nofollow" title="Esperanto-English (2.0M links 68.5M tokens )" href="download.php?f=Wiki/v1syn/moses/eo-en.txt.zip">2.0M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>eo</th>
</tr><th>es</th>
<td></td>
<td bgcolor='#bfffbf'><a rel="nofollow" title="Spanish-English (20.7M links 967.8M tokens )" href="download.php?f=Wiki/v1syn/moses/es-en.txt.zip">20.7M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>es</th>
</tr><th>et</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#d6ffc8'><a rel="nofollow" title="Estonian-Finnish (2.3M links 58.3M tokens )" href="download.php?f=Wiki/v1syn/moses/et-fi.txt.zip">2.3M</a></td>
<td></td>
<td></td>
<th>et</th>
</tr><th>eu</th>
<td></td>
<td bgcolor='#d6ffc8'><a rel="nofollow" title="Basque-English (2.3M links 77.0M tokens )" href="download.php?f=Wiki/v1syn/moses/eu-en.txt.zip">2.3M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>eu</th>
</tr><th>ext</th>
<td></td>
<td bgcolor='#ffe5e3'><a rel="nofollow" title="ext-English (18.3k links 0.7M tokens )" href="download.php?f=Wiki/v1syn/moses/ext-en.txt.zip">18.3k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ext</th>
</tr><th>fa</th>
<td></td>
<td bgcolor='#d1ffcf'><a rel="nofollow" title="Persian-English (3.9M links 157.8M tokens )" href="download.php?f=Wiki/v1syn/moses/fa-en.txt.zip">3.9M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>fa</th>
</tr><th>ff</th>
<td></td>
<td bgcolor='#ffd2d2'><a rel="nofollow" title="Fulah-English (1.9k links 60.5k tokens )" href="download.php?f=Wiki/v1syn/moses/ff-en.txt.zip">1.9k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ff</th>
</tr><th>fi</th>
<td bgcolor='#cbffcb'><a rel="nofollow" title="Finnish-German (5.8M links 160.4M tokens )" href="download.php?f=Wiki/v1syn/moses/fi-de.txt.zip">5.8M</a></td>
<td bgcolor='#c8ffc8'><a rel="nofollow" title="Finnish-English (7.1M links 201.9M tokens )" href="download.php?f=Wiki/v1syn/moses/fi-en.txt.zip">7.1M</a></td>
<td bgcolor='#c9ffc9'><a rel="nofollow" title="Finnish-Estonian (6.7M links 158.1M tokens )" href="download.php?f=Wiki/v1syn/moses/fi-et.txt.zip">6.7M</a></td>
<td></td>
<td bgcolor='#c9ffc9'><a rel="nofollow" title="Finnish-Russian (6.8M links 171.2M tokens )" href="download.php?f=Wiki/v1syn/moses/fi-ru.txt.zip">6.8M</a></td>
<td bgcolor='#c8ffc8'><a rel="nofollow" title="Finnish-Swedish (7.2M links 184.1M tokens )" href="download.php?f=Wiki/v1syn/moses/fi-sv.txt.zip">7.2M</a></td>
<th>fi</th>
</tr><th>fj</th>
<td></td>
<td bgcolor='#ffd3d3'><a rel="nofollow" title="Fijian-English (2.3k links 94.4k tokens )" href="download.php?f=Wiki/v1syn/moses/fj-en.txt.zip">2.3k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>fj</th>
</tr><th>fo</th>
<td></td>
<td bgcolor='#fffff0'><a rel="nofollow" title="Faroese-English (95.5k links 2.9M tokens )" href="download.php?f=Wiki/v1syn/moses/fo-en.txt.zip">95.5k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>fo</th>
</tr><th>fr</th>
<td></td>
<td bgcolor='#bfffbf'><a rel="nofollow" title="French-English (28.7M links 1.3G tokens )" href="download.php?f=Wiki/v1syn/moses/fr-en.txt.zip">28.7M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>fr</th>
</tr><th>frr</th>
<td></td>
<td bgcolor='#ffe7e4'><a rel="nofollow" title="Northern Frisian-English (21.7k links 0.6M tokens )" href="download.php?f=Wiki/v1syn/moses/frr-en.txt.zip">21.7k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>frr</th>
</tr><th>fy</th>
<td></td>
<td bgcolor='#e6ffc9'><a rel="nofollow" title="Western Frisian-English (0.5M links 19.3M tokens )" href="download.php?f=Wiki/v1syn/moses/fy-en.txt.zip">0.5M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>fy</th>
</tr><th>ga</th>
<td></td>
<td bgcolor='#f0ffd1'><a rel="nofollow" title="Irish-English (0.2M links 8.3M tokens )" href="download.php?f=Wiki/v1syn/moses/ga-en.txt.zip">0.2M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ga</th>
</tr><th>gl</th>
<td></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="Galician-English (1.9M links 81.6M tokens )" href="download.php?f=Wiki/v1syn/moses/gl-en.txt.zip">1.9M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>gl</th>
</tr><th>gn</th>
<td></td>
<td bgcolor='#ffede9'><a rel="nofollow" title="Guarani-English (29.3k links 0.9M tokens )" href="download.php?f=Wiki/v1syn/moses/gn-en.txt.zip">29.3k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>gn</th>
</tr><th>got</th>
<td></td>
<td bgcolor='#ffd0d0'><a rel="nofollow" title="Gothic-English (0.1k links 6.0k tokens )" href="download.php?f=Wiki/v1syn/moses/got-en.txt.zip">0.1k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>got</th>
</tr><th>gu</th>
<td></td>
<td bgcolor='#f5ffd6'><a rel="nofollow" title="Gujarati-English (0.2M links 6.4M tokens )" href="download.php?f=Wiki/v1syn/moses/gu-en.txt.zip">0.2M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>gu</th>
</tr><th>gv</th>
<td></td>
<td bgcolor='#ffebe7'><a rel="nofollow" title="Manx-English (26.7k links 0.9M tokens )" href="download.php?f=Wiki/v1syn/moses/gv-en.txt.zip">26.7k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>gv</th>
</tr><th>haw</th>
<td></td>
<td bgcolor='#ffdad9'><a rel="nofollow" title="Hawaiian-English (7.7k links 0.3M tokens )" href="download.php?f=Wiki/v1syn/moses/haw-en.txt.zip">7.7k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>haw</th>
</tr><tr><th></th>
<th>de</th>
<th>en</th>
<th>et</th>
<th>fi</th>
<th>ru</th>
<th>sv</th>
<th></th></tr>
<th>hif</th>
<td></td>
<td bgcolor='#ffd9d8'><a rel="nofollow" title="hif-English (7.5k links 0.2M tokens )" href="download.php?f=Wiki/v1syn/moses/hif-en.txt.zip">7.5k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>hif</th>
</tr><th>hsb</th>
<td></td>
<td bgcolor='#fff9f0'><a rel="nofollow" title="Upper Sorbian-English (58.0k links 1.8M tokens )" href="download.php?f=Wiki/v1syn/moses/hsb-en.txt.zip">58.0k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>hsb</th>
</tr><th>ht</th>
<td></td>
<td bgcolor='#fffdf1'><a rel="nofollow" title="Haitian-English (78.5k links 3.2M tokens )" href="download.php?f=Wiki/v1syn/moses/ht-en.txt.zip">78.5k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ht</th>
</tr><th>hu</th>
<td></td>
<td bgcolor='#c8ffc8'><a rel="nofollow" title="Hungarian-English (7.1M links 243.6M tokens )" href="download.php?f=Wiki/v1syn/moses/hu-en.txt.zip">7.1M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>hu</th>
</tr><th>hy</th>
<td></td>
<td bgcolor='#fffcf1'><a rel="nofollow" title="Armenian-English (74.0k links 1.8M tokens )" href="download.php?f=Wiki/v1syn/moses/hy-en.txt.zip">74.0k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>hy</th>
</tr><th>ia</th>
<td></td>
<td bgcolor='#ffede9'><a rel="nofollow" title="Interlingua (International Auxiliary Language Association)-English (28.9k links 1.1M tokens )" href="download.php?f=Wiki/v1syn/moses/ia-en.txt.zip">28.9k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ia</th>
</tr><th>ie</th>
<td></td>
<td bgcolor='#ffdedd'><a rel="nofollow" title="Interlingue-English (11.4k links 0.3M tokens )" href="download.php?f=Wiki/v1syn/moses/ie-en.txt.zip">11.4k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ie</th>
</tr><th>ig</th>
<td></td>
<td bgcolor='#ffd8d7'><a rel="nofollow" title="Igbo-English (6.3k links 0.2M tokens )" href="download.php?f=Wiki/v1syn/moses/ig-en.txt.zip">6.3k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ig</th>
</tr><th>ilo</th>
<td></td>
<td bgcolor='#fffbf1'><a rel="nofollow" title="Iloko-English (67.3k links 2.7M tokens )" href="download.php?f=Wiki/v1syn/moses/ilo-en.txt.zip">67.3k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ilo</th>
</tr><th>io</th>
<td></td>
<td bgcolor='#ffffe5'><a rel="nofollow" title="Ido-English (0.2M links 5.9M tokens )" href="download.php?f=Wiki/v1syn/moses/io-en.txt.zip">0.2M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>io</th>
</tr><th>it</th>
<td></td>
<td bgcolor='#bfffbf'><a rel="nofollow" title="Italian-English (16.0M links 765.4M tokens )" href="download.php?f=Wiki/v1syn/moses/it-en.txt.zip">16.0M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>it</th>
</tr><th>iu</th>
<td></td>
<td bgcolor='#ffd0d0'><a rel="nofollow" title="Inuktitut-English (14 links 0.6k tokens )" href="download.php?f=Wiki/v1syn/moses/iu-en.txt.zip">14</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>iu</th>
</tr><th>jam</th>
<td></td>
<td bgcolor='#ffd2d2'><a rel="nofollow" title="jam-English (1.5k links 61.3k tokens )" href="download.php?f=Wiki/v1syn/moses/jam-en.txt.zip">1.5k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>jam</th>
</tr><th>jbo</th>
<td></td>
<td bgcolor='#ffe2e0'><a rel="nofollow" title="Lojban-English (15.3k links 0.6M tokens )" href="download.php?f=Wiki/v1syn/moses/jbo-en.txt.zip">15.3k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>jbo</th>
</tr><th>jv</th>
<td></td>
<td bgcolor='#edffce'><a rel="nofollow" title="Javanese-English (0.3M links 10.0M tokens )" href="download.php?f=Wiki/v1syn/moses/jv-en.txt.zip">0.3M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>jv</th>
</tr><th>ka</th>
<td></td>
<td bgcolor='#f2ffd3'><a rel="nofollow" title="Georgian-English (0.2M links 9.1M tokens )" href="download.php?f=Wiki/v1syn/moses/ka-en.txt.zip">0.2M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ka</th>
</tr><th>kab</th>
<td></td>
<td bgcolor='#ffdddc'><a rel="nofollow" title="Kabyle-English (10.3k links 0.3M tokens )" href="download.php?f=Wiki/v1syn/moses/kab-en.txt.zip">10.3k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>kab</th>
</tr><th>kk</th>
<td></td>
<td bgcolor='#dbffc6'><a rel="nofollow" title="Kazakh-English (1.5M links 39.9M tokens )" href="download.php?f=Wiki/v1syn/moses/kk-en.txt.zip">1.5M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>kk</th>
</tr><th>kl</th>
<td></td>
<td bgcolor='#ffd2d2'><a rel="nofollow" title="Kalaallisut-English (2.1k links 50.2k tokens )" href="download.php?f=Wiki/v1syn/moses/kl-en.txt.zip">2.1k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>kl</th>
</tr><th>km</th>
<td></td>
<td bgcolor='#ffd0d0'><a rel="nofollow" title="Central Khmer-English (0.7k links 13.3k tokens )" href="download.php?f=Wiki/v1syn/moses/km-en.txt.zip">0.7k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>km</th>
</tr><th>kn</th>
<td></td>
<td bgcolor='#ffe0de'><a rel="nofollow" title="Kannada-English (13.5k links 0.5M tokens )" href="download.php?f=Wiki/v1syn/moses/kn-en.txt.zip">13.5k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>kn</th>
</tr><th>ko</th>
<td></td>
<td bgcolor='#e4ffc8'><a rel="nofollow" title="Korean-English (0.6M links 21.7M tokens )" href="download.php?f=Wiki/v1syn/moses/ko-en.txt.zip">0.6M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ko</th>
</tr><th>ku</th>
<td></td>
<td bgcolor='#ffd0d0'><a rel="nofollow" title="Kurdish-English (15 links 0.8k tokens )" href="download.php?f=Wiki/v1syn/moses/ku-en.txt.zip">15</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ku</th>
</tr><th>kv</th>
<td></td>
<td bgcolor='#ffede9'><a rel="nofollow" title="Komi-English (29.4k links 0.8M tokens )" href="download.php?f=Wiki/v1syn/moses/kv-en.txt.zip">29.4k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>kv</th>
</tr><th>kw</th>
<td></td>
<td bgcolor='#ffdcdb'><a rel="nofollow" title="Cornish-English (9.4k links 0.3M tokens )" href="download.php?f=Wiki/v1syn/moses/kw-en.txt.zip">9.4k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>kw</th>
</tr><th>lad</th>
<td></td>
<td bgcolor='#ffe6e3'><a rel="nofollow" title="Ladino-English (20.1k links 0.8M tokens )" href="download.php?f=Wiki/v1syn/moses/lad-en.txt.zip">20.1k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>lad</th>
</tr><tr><th></th>
<th>de</th>
<th>en</th>
<th>et</th>
<th>fi</th>
<th>ru</th>
<th>sv</th>
<th></th></tr>
<th>lb</th>
<td></td>
<td bgcolor='#eaffcc'><a rel="nofollow" title="Luxembourgish-English (0.4M links 11.6M tokens )" href="download.php?f=Wiki/v1syn/moses/lb-en.txt.zip">0.4M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>lb</th>
</tr><th>lfn</th>
<td></td>
<td bgcolor='#ffefea'><a rel="nofollow" title="lfn-English (33.3k links 1.2M tokens )" href="download.php?f=Wiki/v1syn/moses/lfn-en.txt.zip">33.3k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>lfn</th>
</tr><th>lg</th>
<td></td>
<td bgcolor='#ffe2e0'><a rel="nofollow" title="Ganda-English (15.6k links 0.5M tokens )" href="download.php?f=Wiki/v1syn/moses/lg-en.txt.zip">15.6k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>lg</th>
</tr><th>lij</th>
<td></td>
<td bgcolor='#ffdddc'><a rel="nofollow" title="lij-English (11.0k links 0.4M tokens )" href="download.php?f=Wiki/v1syn/moses/lij-en.txt.zip">11.0k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>lij</th>
</tr><th>lmo</th>
<td></td>
<td bgcolor='#ffffee'><a rel="nofollow" title="lmo-English (0.1M links 4.2M tokens )" href="download.php?f=Wiki/v1syn/moses/lmo-en.txt.zip">0.1M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>lmo</th>
</tr><th>ln</th>
<td></td>
<td bgcolor='#ffd9d8'><a rel="nofollow" title="Lingala-English (7.0k links 0.2M tokens )" href="download.php?f=Wiki/v1syn/moses/ln-en.txt.zip">7.0k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ln</th>
</tr><th>lo</th>
<td></td>
<td bgcolor='#ffd1d1'><a rel="nofollow" title="Lao-English (0.9k links 21.2k tokens )" href="download.php?f=Wiki/v1syn/moses/lo-en.txt.zip">0.9k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>lo</th>
</tr><th>lt</th>
<td></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="Lithuanian-English (1.9M links 59.7M tokens )" href="download.php?f=Wiki/v1syn/moses/lt-en.txt.zip">1.9M</a></td>
<td></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="Lithuanian-Finnish (1.9M links 48.8M tokens )" href="download.php?f=Wiki/v1syn/moses/lt-fi.txt.zip">1.9M</a></td>
<td></td>
<td></td>
<th>lt</th>
</tr><th>lv</th>
<td></td>
<td bgcolor='#deffc6'><a rel="nofollow" title="Latvian-English (1.2M links 37.9M tokens )" href="download.php?f=Wiki/v1syn/moses/lv-en.txt.zip">1.2M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>lv</th>
</tr><th>mai</th>
<td></td>
<td bgcolor='#ffd0d0'><a rel="nofollow" title="Maithili-English (0.3k links 8.3k tokens )" href="download.php?f=Wiki/v1syn/moses/mai-en.txt.zip">0.3k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>mai</th>
</tr><th>mdf</th>
<td></td>
<td bgcolor='#ffd7d7'><a rel="nofollow" title="Moksha-English (5.4k links 0.1M tokens )" href="download.php?f=Wiki/v1syn/moses/mdf-en.txt.zip">5.4k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>mdf</th>
</tr><th>mg</th>
<td></td>
<td bgcolor='#f2ffd3'><a rel="nofollow" title="Malagasy-English (0.2M links 6.9M tokens )" href="download.php?f=Wiki/v1syn/moses/mg-en.txt.zip">0.2M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>mg</th>
</tr><th>mh</th>
<td></td>
<td bgcolor='#ffd0d0'><a rel="nofollow" title="Marshallese-English (24 links 0.6k tokens )" href="download.php?f=Wiki/v1syn/moses/mh-en.txt.zip">24</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>mh</th>
</tr><th>mk</th>
<td></td>
<td bgcolor='#deffc6'><a rel="nofollow" title="Macedonian-English (1.2M links 47.9M tokens )" href="download.php?f=Wiki/v1syn/moses/mk-en.txt.zip">1.2M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>mk</th>
</tr><th>ml</th>
<td></td>
<td bgcolor='#fffef0'><a rel="nofollow" title="Malayalam-English (91.7k links 2.5M tokens )" href="download.php?f=Wiki/v1syn/moses/ml-en.txt.zip">91.7k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ml</th>
</tr><th>mn</th>
<td></td>
<td bgcolor='#f3ffd4'><a rel="nofollow" title="Mongolian-English (0.2M links 7.0M tokens )" href="download.php?f=Wiki/v1syn/moses/mn-en.txt.zip">0.2M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>mn</th>
</tr><th>mnw</th>
<td></td>
<td bgcolor='#ffd0d0'><a rel="nofollow" title="mnw-English (0.4k links 8.9k tokens )" href="download.php?f=Wiki/v1syn/moses/mnw-en.txt.zip">0.4k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>mnw</th>
</tr><th>mr</th>
<td></td>
<td bgcolor='#e5ffc8'><a rel="nofollow" title="Marathi-English (0.6M links 14.8M tokens )" href="download.php?f=Wiki/v1syn/moses/mr-en.txt.zip">0.6M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>mr</th>
</tr><th>ms</th>
<td></td>
<td bgcolor='#dbffc6'><a rel="nofollow" title="Malay-English (1.5M links 57.9M tokens )" href="download.php?f=Wiki/v1syn/moses/ms-en.txt.zip">1.5M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ms</th>
</tr><th>mt</th>
<td></td>
<td bgcolor='#fffcf1'><a rel="nofollow" title="Maltese-English (71.0k links 2.6M tokens )" href="download.php?f=Wiki/v1syn/moses/mt-en.txt.zip">71.0k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>mt</th>
</tr><th>mwl</th>
<td></td>
<td bgcolor='#fffbf1'><a rel="nofollow" title="Mirandese-English (63.8k links 2.9M tokens )" href="download.php?f=Wiki/v1syn/moses/mwl-en.txt.zip">63.8k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>mwl</th>
</tr><th>my</th>
<td></td>
<td bgcolor='#ffd1d1'><a rel="nofollow" title="Burmese-English (0.9k links 18.6k tokens )" href="download.php?f=Wiki/v1syn/moses/my-en.txt.zip">0.9k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>my</th>
</tr><th>myv</th>
<td></td>
<td bgcolor='#fff0eb'><a rel="nofollow" title="Erzya-English (34.4k links 0.8M tokens )" href="download.php?f=Wiki/v1syn/moses/myv-en.txt.zip">34.4k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>myv</th>
</tr><th>na</th>
<td></td>
<td bgcolor='#ffd1d1'><a rel="nofollow" title="Nauru-English (1.2k links 21.1k tokens )" href="download.php?f=Wiki/v1syn/moses/na-en.txt.zip">1.2k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>na</th>
</tr><th>nds</th>
<td></td>
<td bgcolor='#ebffcd'><a rel="nofollow" title="Low German-English (0.3M links 10.1M tokens )" href="download.php?f=Wiki/v1syn/moses/nds-en.txt.zip">0.3M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>nds</th>
</tr><th>nl</th>
<td></td>
<td bgcolor='#bfffbf'><a rel="nofollow" title="Dutch-English (13.3M links 462.5M tokens )" href="download.php?f=Wiki/v1syn/moses/nl-en.txt.zip">13.3M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>nl</th>
</tr><tr><th></th>
<th>de</th>
<th>en</th>
<th>et</th>
<th>fi</th>
<th>ru</th>
<th>sv</th>
<th></th></tr>
<th>no</th>
<td></td>
<td bgcolor='#ceffce'><a rel="nofollow" title="Norwegian-English (4.6M links 162.4M tokens )" href="download.php?f=Wiki/v1syn/moses/no-en.txt.zip">4.6M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>no</th>
</tr><th>nov</th>
<td></td>
<td bgcolor='#ffd3d3'><a rel="nofollow" title="nov-English (2.1k links 64.0k tokens )" href="download.php?f=Wiki/v1syn/moses/nov-en.txt.zip">2.1k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>nov</th>
</tr><th>ny</th>
<td></td>
<td bgcolor='#ffd6d6'><a rel="nofollow" title="Chichewa-English (4.6k links 0.2M tokens )" href="download.php?f=Wiki/v1syn/moses/ny-en.txt.zip">4.6k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ny</th>
</tr><th>oc</th>
<td></td>
<td bgcolor='#eaffcc'><a rel="nofollow" title="Occitan (post 1500)-English (0.4M links 15.1M tokens )" href="download.php?f=Wiki/v1syn/moses/oc-en.txt.zip">0.4M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>oc</th>
</tr><th>or</th>
<td></td>
<td bgcolor='#ffd4d4'><a rel="nofollow" title="Oriya-English (3.1k links 77.9k tokens )" href="download.php?f=Wiki/v1syn/moses/or-en.txt.zip">3.1k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>or</th>
</tr><th>pa</th>
<td></td>
<td bgcolor='#ffd3d3'><a rel="nofollow" title="Panjabi-English (2.7k links 77.6k tokens )" href="download.php?f=Wiki/v1syn/moses/pa-en.txt.zip">2.7k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>pa</th>
</tr><th>pag</th>
<td></td>
<td bgcolor='#ffd3d3'><a rel="nofollow" title="Pangasinan-English (2.5k links 69.6k tokens )" href="download.php?f=Wiki/v1syn/moses/pag-en.txt.zip">2.5k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>pag</th>
</tr><th>pap</th>
<td></td>
<td bgcolor='#ffdad9'><a rel="nofollow" title="Papiamento-English (8.1k links 0.3M tokens )" href="download.php?f=Wiki/v1syn/moses/pap-en.txt.zip">8.1k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>pap</th>
</tr><th>pdc</th>
<td></td>
<td bgcolor='#ffd6d6'><a rel="nofollow" title="pdc-English (4.4k links 0.1M tokens )" href="download.php?f=Wiki/v1syn/moses/pdc-en.txt.zip">4.4k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>pdc</th>
</tr><th>pl</th>
<td></td>
<td bgcolor='#bfffbf'><a rel="nofollow" title="Polish-English (15.1M links 520.2M tokens )" href="download.php?f=Wiki/v1syn/moses/pl-en.txt.zip">15.1M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>pl</th>
</tr><th>pms</th>
<td></td>
<td bgcolor='#ffd0d0'><a rel="nofollow" title="pms-English (0.3k links 7.9k tokens )" href="download.php?f=Wiki/v1syn/moses/pms-en.txt.zip">0.3k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>pms</th>
</tr><th>ps</th>
<td></td>
<td bgcolor='#ffd2d2'><a rel="nofollow" title="Pushto-English (2.1k links 74.1k tokens )" href="download.php?f=Wiki/v1syn/moses/ps-en.txt.zip">2.1k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ps</th>
</tr><th>pt</th>
<td></td>
<td bgcolor='#c1ffc1'><a rel="nofollow" title="Portuguese-English (11.5M links 499.9M tokens )" href="download.php?f=Wiki/v1syn/moses/pt-en.txt.zip">11.5M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>pt</th>
</tr><th>rm</th>
<td></td>
<td bgcolor='#fffdf1'><a rel="nofollow" title="Romansh-English (76.8k links 3.1M tokens )" href="download.php?f=Wiki/v1syn/moses/rm-en.txt.zip">76.8k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>rm</th>
</tr><th>rn</th>
<td></td>
<td bgcolor='#ffd3d3'><a rel="nofollow" title="Rundi-English (2.5k links 72.7k tokens )" href="download.php?f=Wiki/v1syn/moses/rn-en.txt.zip">2.5k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>rn</th>
</tr><th>ro</th>
<td></td>
<td bgcolor='#d3ffca'><a rel="nofollow" title="Romanian-English (3.1M links 131.1M tokens )" href="download.php?f=Wiki/v1syn/moses/ro-en.txt.zip">3.1M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ro</th>
</tr><th>ru</th>
<td></td>
<td bgcolor='#bfffbf'><a rel="nofollow" title="Russian-English (20.6M links 716.1M tokens )" href="download.php?f=Wiki/v1syn/moses/ru-en.txt.zip">20.6M</a></td>
<td></td>
<td bgcolor='#bfffbf'><a rel="nofollow" title="Russian-Finnish (19.9M links 549.1M tokens )" href="download.php?f=Wiki/v1syn/moses/ru-fi.txt.zip">19.9M</a></td>
<td></td>
<td></td>
<th>ru</th>
</tr><th>rw</th>
<td></td>
<td bgcolor='#ffd4d4'><a rel="nofollow" title="Kinyarwanda-English (3.4k links 0.1M tokens )" href="download.php?f=Wiki/v1syn/moses/rw-en.txt.zip">3.4k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>rw</th>
</tr><th>sa</th>
<td></td>
<td bgcolor='#ffd0d0'><a rel="nofollow" title="Sanskrit-English (0.3k links 5.1k tokens )" href="download.php?f=Wiki/v1syn/moses/sa-en.txt.zip">0.3k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>sa</th>
</tr><th>sah</th>
<td></td>
<td bgcolor='#ffffea'><a rel="nofollow" title="Yakut-English (0.1M links 4.0M tokens )" href="download.php?f=Wiki/v1syn/moses/sah-en.txt.zip">0.1M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>sah</th>
</tr><th>scn</th>
<td></td>
<td bgcolor='#fff9f0'><a rel="nofollow" title="Sicilian-English (56.4k links 2.1M tokens )" href="download.php?f=Wiki/v1syn/moses/scn-en.txt.zip">56.4k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>scn</th>
</tr><th>sco</th>
<td></td>
<td bgcolor='#ffffed'><a rel="nofollow" title="Scots-English (0.1M links 4.0M tokens )" href="download.php?f=Wiki/v1syn/moses/sco-en.txt.zip">0.1M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>sco</th>
</tr><th>sd</th>
<td></td>
<td bgcolor='#ffd5d5'><a rel="nofollow" title="Sindhi-English (4.1k links 0.2M tokens )" href="download.php?f=Wiki/v1syn/moses/sd-en.txt.zip">4.1k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>sd</th>
</tr><th>se</th>
<td></td>
<td bgcolor='#ffe3e1'><a rel="nofollow" title="Northern Sami-English (17.0k links 0.4M tokens )" href="download.php?f=Wiki/v1syn/moses/se-en.txt.zip">17.0k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>se</th>
</tr><th>sg</th>
<td></td>
<td bgcolor='#ffd0d0'><a rel="nofollow" title="Sango-English (0.5k links 13.8k tokens )" href="download.php?f=Wiki/v1syn/moses/sg-en.txt.zip">0.5k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>sg</th>
</tr><th>si</th>
<td></td>
<td bgcolor='#ffe3e1'><a rel="nofollow" title="Sinhala-English (16.3k links 0.8M tokens )" href="download.php?f=Wiki/v1syn/moses/si-en.txt.zip">16.3k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>si</th>
</tr><tr><th></th>
<th>de</th>
<th>en</th>
<th>et</th>
<th>fi</th>
<th>ru</th>
<th>sv</th>
<th></th></tr>
<th>sl</th>
<td></td>
<td bgcolor='#daffc7'><a rel="nofollow" title="Slovenian-English (1.7M links 63.5M tokens )" href="download.php?f=Wiki/v1syn/moses/sl-en.txt.zip">1.7M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>sl</th>
</tr><th>sq</th>
<td></td>
<td bgcolor='#e3ffc7'><a rel="nofollow" title="Albanian-English (0.7M links 28.1M tokens )" href="download.php?f=Wiki/v1syn/moses/sq-en.txt.zip">0.7M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>sq</th>
</tr><th>stq</th>
<td></td>
<td bgcolor='#ffe0de'><a rel="nofollow" title="stq-English (13.7k links 0.4M tokens )" href="download.php?f=Wiki/v1syn/moses/stq-en.txt.zip">13.7k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>stq</th>
</tr><th>sv</th>
<td></td>
<td bgcolor='#bfffbf'><a rel="nofollow" title="Swedish-English (14.1M links 442.5M tokens )" href="download.php?f=Wiki/v1syn/moses/sv-en.txt.zip">14.1M</a></td>
<td></td>
<td bgcolor='#bfffbf'><a rel="nofollow" title="Swedish-Finnish (13.1M links 344.5M tokens )" href="download.php?f=Wiki/v1syn/moses/sv-fi.txt.zip">13.1M</a></td>
<td></td>
<td></td>
<th>sv</th>
</tr><th>sw</th>
<td></td>
<td bgcolor='#f0ffd1'><a rel="nofollow" title="Swahili-English (0.2M links 9.0M tokens )" href="download.php?f=Wiki/v1syn/moses/sw-en.txt.zip">0.2M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>sw</th>
</tr><th>ta</th>
<td></td>
<td bgcolor='#ffffef'><a rel="nofollow" title="Tamil-English (0.1M links 3.2M tokens )" href="download.php?f=Wiki/v1syn/moses/ta-en.txt.zip">0.1M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ta</th>
</tr><th>te</th>
<td></td>
<td bgcolor='#deffc6'><a rel="nofollow" title="Telugu-English (1.2M links 28.7M tokens )" href="download.php?f=Wiki/v1syn/moses/te-en.txt.zip">1.2M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>te</th>
</tr><th>tet</th>
<td></td>
<td bgcolor='#ffd6d6'><a rel="nofollow" title="Tetum-English (4.6k links 0.1M tokens )" href="download.php?f=Wiki/v1syn/moses/tet-en.txt.zip">4.6k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>tet</th>
</tr><th>tg</th>
<td></td>
<td bgcolor='#f0ffd1'><a rel="nofollow" title="Tajik-English (0.2M links 8.1M tokens )" href="download.php?f=Wiki/v1syn/moses/tg-en.txt.zip">0.2M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>tg</th>
</tr><th>th</th>
<td></td>
<td bgcolor='#ebffcc'><a rel="nofollow" title="Thai-English (0.3M links 9.4M tokens )" href="download.php?f=Wiki/v1syn/moses/th-en.txt.zip">0.3M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>th</th>
</tr><th>ti</th>
<td></td>
<td bgcolor='#ffd0d0'><a rel="nofollow" title="Tigrinya-English (26 links 0.9k tokens )" href="download.php?f=Wiki/v1syn/moses/ti-en.txt.zip">26</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ti</th>
</tr><th>tk</th>
<td></td>
<td bgcolor='#fffdf1'><a rel="nofollow" title="Turkmen-English (76.3k links 2.0M tokens )" href="download.php?f=Wiki/v1syn/moses/tk-en.txt.zip">76.3k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>tk</th>
</tr><th>tl</th>
<td></td>
<td bgcolor='#ecffcd'><a rel="nofollow" title="Tagalog-English (0.3M links 12.2M tokens )" href="download.php?f=Wiki/v1syn/moses/tl-en.txt.zip">0.3M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>tl</th>
</tr><th>to</th>
<td></td>
<td bgcolor='#ffd3d3'><a rel="nofollow" title="Tonga (Tonga Islands)-English (2.3k links 87.6k tokens )" href="download.php?f=Wiki/v1syn/moses/to-en.txt.zip">2.3k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>to</th>
</tr><th>tpi</th>
<td></td>
<td bgcolor='#ffd1d1'><a rel="nofollow" title="Tok Pisin-English (1.0k links 35.0k tokens )" href="download.php?f=Wiki/v1syn/moses/tpi-en.txt.zip">1.0k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>tpi</th>
</tr><th>tr</th>
<td></td>
<td bgcolor='#d1ffce'><a rel="nofollow" title="Turkish-English (3.8M links 112.9M tokens )" href="download.php?f=Wiki/v1syn/moses/tr-en.txt.zip">3.8M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>tr</th>
</tr><th>ts</th>
<td></td>
<td bgcolor='#ffd5d5'><a rel="nofollow" title="Tsonga-English (4.1k links 0.2M tokens )" href="download.php?f=Wiki/v1syn/moses/ts-en.txt.zip">4.1k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ts</th>
</tr><th>tt</th>
<td></td>
<td bgcolor='#e9ffcb'><a rel="nofollow" title="Tatar-English (0.4M links 10.2M tokens )" href="download.php?f=Wiki/v1syn/moses/tt-en.txt.zip">0.4M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>tt</th>
</tr><th>ty</th>
<td></td>
<td bgcolor='#ffd1d1'><a rel="nofollow" title="Tahitian-English (0.8k links 26.8k tokens )" href="download.php?f=Wiki/v1syn/moses/ty-en.txt.zip">0.8k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ty</th>
</tr><th>tyv</th>
<td></td>
<td bgcolor='#fff3ed'><a rel="nofollow" title="Tuvinian-English (40.4k links 1.0M tokens )" href="download.php?f=Wiki/v1syn/moses/tyv-en.txt.zip">40.4k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>tyv</th>
</tr><th>udm</th>
<td></td>
<td bgcolor='#ffede9'><a rel="nofollow" title="Udmurt-English (28.8k links 0.7M tokens )" href="download.php?f=Wiki/v1syn/moses/udm-en.txt.zip">28.8k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>udm</th>
</tr><th>uk</th>
<td></td>
<td bgcolor='#bfffbf'><a rel="nofollow" title="Ukrainian-English (13.5M links 440.1M tokens )" href="download.php?f=Wiki/v1syn/moses/uk-en.txt.zip">13.5M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>uk</th>
</tr><th>ur</th>
<td></td>
<td bgcolor='#e4ffc8'><a rel="nofollow" title="Urdu-English (0.7M links 25.8M tokens )" href="download.php?f=Wiki/v1syn/moses/ur-en.txt.zip">0.7M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ur</th>
</tr><th>uz</th>
<td></td>
<td bgcolor='#e5ffc9'><a rel="nofollow" title="Uzbek-English (0.6M links 13.6M tokens )" href="download.php?f=Wiki/v1syn/moses/uz-en.txt.zip">0.6M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>uz</th>
</tr><th>vec</th>
<td></td>
<td bgcolor='#fff7ef'><a rel="nofollow" title="vec-English (51.0k links 2.0M tokens )" href="download.php?f=Wiki/v1syn/moses/vec-en.txt.zip">51.0k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>vec</th>
</tr><th>vi</th>
<td></td>
<td bgcolor='#cbffcb'><a rel="nofollow" title="Vietnamese-English (5.9M links 258.2M tokens )" href="download.php?f=Wiki/v1syn/moses/vi-en.txt.zip">5.9M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>vi</th>
</tr><tr><th></th>
<th>de</th>
<th>en</th>
<th>et</th>
<th>fi</th>
<th>ru</th>
<th>sv</th>
<th></th></tr>
<th>vo</th>
<td></td>
<td bgcolor='#ecffcd'><a rel="nofollow" title="VolapÃ¼k-English (0.3M links 10.5M tokens )" href="download.php?f=Wiki/v1syn/moses/vo-en.txt.zip">0.3M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>vo</th>
</tr><th>wa</th>
<td></td>
<td bgcolor='#fff6ef'><a rel="nofollow" title="Walloon-English (48.1k links 1.5M tokens )" href="download.php?f=Wiki/v1syn/moses/wa-en.txt.zip">48.1k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>wa</th>
</tr><th>wo</th>
<td></td>
<td bgcolor='#ffdddc'><a rel="nofollow" title="Wolof-English (10.9k links 0.5M tokens )" href="download.php?f=Wiki/v1syn/moses/wo-en.txt.zip">10.9k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>wo</th>
</tr><th>xal</th>
<td></td>
<td bgcolor='#ffd6d6'><a rel="nofollow" title="Kalmyk-English (4.6k links 93.5k tokens )" href="download.php?f=Wiki/v1syn/moses/xal-en.txt.zip">4.6k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>xal</th>
</tr><th>xh</th>
<td></td>
<td bgcolor='#ffdbda'><a rel="nofollow" title="Xhosa-English (8.7k links 0.3M tokens )" href="download.php?f=Wiki/v1syn/moses/xh-en.txt.zip">8.7k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>xh</th>
</tr><th>yi</th>
<td></td>
<td bgcolor='#ffd4d4'><a rel="nofollow" title="Yiddish-English (3.0k links 85.7k tokens )" href="download.php?f=Wiki/v1syn/moses/yi-en.txt.zip">3.0k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>yi</th>
</tr><th>yo</th>
<td></td>
<td bgcolor='#fff3ed'><a rel="nofollow" title="Yoruba-English (40.7k links 1.2M tokens )" href="download.php?f=Wiki/v1syn/moses/yo-en.txt.zip">40.7k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>yo</th>
</tr><th>zh</th>
<td></td>
<td bgcolor='#caffca'><a rel="nofollow" title="Chinese-English (6.2M links 310.8M tokens )" href="download.php?f=Wiki/v1syn/moses/zh-en.txt.zip">6.2M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>zh</th>
</tr><th>zu</th>
<td></td>
<td bgcolor='#ffd8d7'><a rel="nofollow" title="Zulu-English (6.7k links 0.2M tokens )" href="download.php?f=Wiki/v1syn/moses/zu-en.txt.zip">6.7k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>zu</th>
</tr><tr><th></th>
<th>de</th>
<th>en</th>
<th>et</th>
<th>fi</th>
<th>ru</th>
<th>sv</th>
<th></th></tr>
</table>
</div></p></div><div id='download-tmx' style='display: none;'><p>Links to compressed TMX files, one per language pair.</p><p>
<div class="sample"><table border="0" cellpadding="0">
<tr><th></th>
<th>de</th>
<th>en</th>
<th>et</th>
<th>fi</th>
<th>ru</th>
<th>sv</th>
<th></th></tr>
<th>ab</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Abkhazian-English ()" href="download.php?f=Wiki/v1syn/tmx/ab-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ab</th>
</tr><th>ady</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Adyghe-English ()" href="download.php?f=Wiki/v1syn/tmx/ady-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ady</th>
</tr><th>af</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Afrikaans-English ()" href="download.php?f=Wiki/v1syn/tmx/af-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>af</th>
</tr><th>am</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Amharic-English ()" href="download.php?f=Wiki/v1syn/tmx/am-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>am</th>
</tr><th>an</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Aragonese-English ()" href="download.php?f=Wiki/v1syn/tmx/an-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>an</th>
</tr><th>ang</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English, Old (ca.450-1100)-English ()" href="download.php?f=Wiki/v1syn/tmx/ang-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ang</th>
</tr><th>ar</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Arabic-English ()" href="download.php?f=Wiki/v1syn/tmx/ar-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ar</th>
</tr><th>as</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Assamese-English ()" href="download.php?f=Wiki/v1syn/tmx/as-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>as</th>
</tr><th>ast</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Asturian-English ()" href="download.php?f=Wiki/v1syn/tmx/ast-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ast</th>
</tr><th>awa</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Awadhi-English ()" href="download.php?f=Wiki/v1syn/tmx/awa-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>awa</th>
</tr><th>az</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Azerbaijani-English ()" href="download.php?f=Wiki/v1syn/tmx/az-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>az</th>
</tr><th>ba</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Bashkir-English ()" href="download.php?f=Wiki/v1syn/tmx/ba-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ba</th>
</tr><th>bar</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="bar-English ()" href="download.php?f=Wiki/v1syn/tmx/bar-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>bar</th>
</tr><th>be</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Belarusian-English ()" href="download.php?f=Wiki/v1syn/tmx/be-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>be</th>
</tr><th>bg</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Bulgarian-English ()" href="download.php?f=Wiki/v1syn/tmx/bg-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>bg</th>
</tr><th>bm</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Bambara-English ()" href="download.php?f=Wiki/v1syn/tmx/bm-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>bm</th>
</tr><th>bn</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Bengali-English ()" href="download.php?f=Wiki/v1syn/tmx/bn-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>bn</th>
</tr><th>bo</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Tibetan-English ()" href="download.php?f=Wiki/v1syn/tmx/bo-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>bo</th>
</tr><th>br</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Breton-English ()" href="download.php?f=Wiki/v1syn/tmx/br-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>br</th>
</tr><th>ca</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Catalan-English ()" href="download.php?f=Wiki/v1syn/tmx/ca-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ca</th>
</tr><th>ce</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Chechen-English ()" href="download.php?f=Wiki/v1syn/tmx/ce-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ce</th>
</tr><th>chr</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Cherokee-English ()" href="download.php?f=Wiki/v1syn/tmx/chr-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>chr</th>
</tr><th>co</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Corsican-English ()" href="download.php?f=Wiki/v1syn/tmx/co-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>co</th>
</tr><th>crh</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Crimean Tatar-English ()" href="download.php?f=Wiki/v1syn/tmx/crh-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>crh</th>
</tr><th>cs</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Czech-English ()" href="download.php?f=Wiki/v1syn/tmx/cs-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>cs</th>
</tr><tr><th></th>
<th>de</th>
<th>en</th>
<th>et</th>
<th>fi</th>
<th>ru</th>
<th>sv</th>
<th></th></tr>
<th>csb</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Kashubian-English ()" href="download.php?f=Wiki/v1syn/tmx/csb-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>csb</th>
</tr><th>cy</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Welsh-English ()" href="download.php?f=Wiki/v1syn/tmx/cy-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>cy</th>
</tr><th>da</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Danish-English ()" href="download.php?f=Wiki/v1syn/tmx/da-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>da</th>
</tr><th>de</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="German-English ()" href="download.php?f=Wiki/v1syn/tmx/de-en.tmx.gz">0</a></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="German-Finnish ()" href="download.php?f=Wiki/v1syn/tmx/de-fi.tmx.gz">0</a></td>
<td></td>
<td></td>
<th>de</th>
</tr><th>dsb</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Lower Sorbian-English ()" href="download.php?f=Wiki/v1syn/tmx/dsb-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>dsb</th>
</tr><th>el</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Greek-English ()" href="download.php?f=Wiki/v1syn/tmx/el-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>el</th>
</tr><th>eo</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Esperanto-English ()" href="download.php?f=Wiki/v1syn/tmx/eo-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>eo</th>
</tr><th>es</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Spanish-English ()" href="download.php?f=Wiki/v1syn/tmx/es-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>es</th>
</tr><th>et</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Estonian-Finnish ()" href="download.php?f=Wiki/v1syn/tmx/et-fi.tmx.gz">0</a></td>
<td></td>
<td></td>
<th>et</th>
</tr><th>eu</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Basque-English ()" href="download.php?f=Wiki/v1syn/tmx/eu-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>eu</th>
</tr><th>ext</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="ext-English ()" href="download.php?f=Wiki/v1syn/tmx/ext-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ext</th>
</tr><th>fa</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Persian-English ()" href="download.php?f=Wiki/v1syn/tmx/fa-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>fa</th>
</tr><th>ff</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Fulah-English ()" href="download.php?f=Wiki/v1syn/tmx/ff-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ff</th>
</tr><th>fi</th>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Finnish-German ()" href="download.php?f=Wiki/v1syn/tmx/fi-de.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Finnish-English ()" href="download.php?f=Wiki/v1syn/tmx/fi-en.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Finnish-Estonian ()" href="download.php?f=Wiki/v1syn/tmx/fi-et.tmx.gz">0</a></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Finnish-Russian ()" href="download.php?f=Wiki/v1syn/tmx/fi-ru.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Finnish-Swedish ()" href="download.php?f=Wiki/v1syn/tmx/fi-sv.tmx.gz">0</a></td>
<th>fi</th>
</tr><th>fj</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Fijian-English ()" href="download.php?f=Wiki/v1syn/tmx/fj-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>fj</th>
</tr><th>fo</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Faroese-English ()" href="download.php?f=Wiki/v1syn/tmx/fo-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>fo</th>
</tr><th>fr</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="French-English ()" href="download.php?f=Wiki/v1syn/tmx/fr-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>fr</th>
</tr><th>frr</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Northern Frisian-English ()" href="download.php?f=Wiki/v1syn/tmx/frr-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>frr</th>
</tr><th>fy</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Western Frisian-English ()" href="download.php?f=Wiki/v1syn/tmx/fy-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>fy</th>
</tr><th>ga</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Irish-English ()" href="download.php?f=Wiki/v1syn/tmx/ga-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ga</th>
</tr><th>gl</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Galician-English ()" href="download.php?f=Wiki/v1syn/tmx/gl-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>gl</th>
</tr><th>gn</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Guarani-English ()" href="download.php?f=Wiki/v1syn/tmx/gn-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>gn</th>
</tr><th>got</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Gothic-English ()" href="download.php?f=Wiki/v1syn/tmx/got-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>got</th>
</tr><th>gu</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Gujarati-English ()" href="download.php?f=Wiki/v1syn/tmx/gu-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>gu</th>
</tr><th>gv</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Manx-English ()" href="download.php?f=Wiki/v1syn/tmx/gv-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>gv</th>
</tr><th>haw</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Hawaiian-English ()" href="download.php?f=Wiki/v1syn/tmx/haw-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>haw</th>
</tr><tr><th></th>
<th>de</th>
<th>en</th>
<th>et</th>
<th>fi</th>
<th>ru</th>
<th>sv</th>
<th></th></tr>
<th>hif</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="hif-English ()" href="download.php?f=Wiki/v1syn/tmx/hif-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>hif</th>
</tr><th>hsb</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Upper Sorbian-English ()" href="download.php?f=Wiki/v1syn/tmx/hsb-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>hsb</th>
</tr><th>ht</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Haitian-English ()" href="download.php?f=Wiki/v1syn/tmx/ht-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ht</th>
</tr><th>hu</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Hungarian-English ()" href="download.php?f=Wiki/v1syn/tmx/hu-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>hu</th>
</tr><th>hy</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Armenian-English ()" href="download.php?f=Wiki/v1syn/tmx/hy-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>hy</th>
</tr><th>ia</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Interlingua (International Auxiliary Language Association)-English ()" href="download.php?f=Wiki/v1syn/tmx/ia-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ia</th>
</tr><th>ie</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Interlingue-English ()" href="download.php?f=Wiki/v1syn/tmx/ie-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ie</th>
</tr><th>ig</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Igbo-English ()" href="download.php?f=Wiki/v1syn/tmx/ig-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ig</th>
</tr><th>ilo</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Iloko-English ()" href="download.php?f=Wiki/v1syn/tmx/ilo-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ilo</th>
</tr><th>io</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Ido-English ()" href="download.php?f=Wiki/v1syn/tmx/io-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>io</th>
</tr><th>it</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Italian-English ()" href="download.php?f=Wiki/v1syn/tmx/it-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>it</th>
</tr><th>iu</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Inuktitut-English ()" href="download.php?f=Wiki/v1syn/tmx/iu-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>iu</th>
</tr><th>jam</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="jam-English ()" href="download.php?f=Wiki/v1syn/tmx/jam-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>jam</th>
</tr><th>jbo</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Lojban-English ()" href="download.php?f=Wiki/v1syn/tmx/jbo-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>jbo</th>
</tr><th>jv</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Javanese-English ()" href="download.php?f=Wiki/v1syn/tmx/jv-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>jv</th>
</tr><th>ka</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Georgian-English ()" href="download.php?f=Wiki/v1syn/tmx/ka-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ka</th>
</tr><th>kab</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Kabyle-English ()" href="download.php?f=Wiki/v1syn/tmx/kab-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>kab</th>
</tr><th>kk</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Kazakh-English ()" href="download.php?f=Wiki/v1syn/tmx/kk-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>kk</th>
</tr><th>kl</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Kalaallisut-English ()" href="download.php?f=Wiki/v1syn/tmx/kl-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>kl</th>
</tr><th>km</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Central Khmer-English ()" href="download.php?f=Wiki/v1syn/tmx/km-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>km</th>
</tr><th>kn</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Kannada-English ()" href="download.php?f=Wiki/v1syn/tmx/kn-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>kn</th>
</tr><th>ko</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Korean-English ()" href="download.php?f=Wiki/v1syn/tmx/ko-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ko</th>
</tr><th>ku</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Kurdish-English ()" href="download.php?f=Wiki/v1syn/tmx/ku-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ku</th>
</tr><th>kv</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Komi-English ()" href="download.php?f=Wiki/v1syn/tmx/kv-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>kv</th>
</tr><th>kw</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Cornish-English ()" href="download.php?f=Wiki/v1syn/tmx/kw-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>kw</th>
</tr><th>lad</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Ladino-English ()" href="download.php?f=Wiki/v1syn/tmx/lad-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>lad</th>
</tr><tr><th></th>
<th>de</th>
<th>en</th>
<th>et</th>
<th>fi</th>
<th>ru</th>
<th>sv</th>
<th></th></tr>
<th>lb</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Luxembourgish-English ()" href="download.php?f=Wiki/v1syn/tmx/lb-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>lb</th>
</tr><th>lfn</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="lfn-English ()" href="download.php?f=Wiki/v1syn/tmx/lfn-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>lfn</th>
</tr><th>lg</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Ganda-English ()" href="download.php?f=Wiki/v1syn/tmx/lg-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>lg</th>
</tr><th>lij</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="lij-English ()" href="download.php?f=Wiki/v1syn/tmx/lij-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>lij</th>
</tr><th>lmo</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="lmo-English ()" href="download.php?f=Wiki/v1syn/tmx/lmo-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>lmo</th>
</tr><th>ln</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Lingala-English ()" href="download.php?f=Wiki/v1syn/tmx/ln-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ln</th>
</tr><th>lo</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Lao-English ()" href="download.php?f=Wiki/v1syn/tmx/lo-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>lo</th>
</tr><th>lt</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Lithuanian-English ()" href="download.php?f=Wiki/v1syn/tmx/lt-en.tmx.gz">0</a></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Lithuanian-Finnish ()" href="download.php?f=Wiki/v1syn/tmx/lt-fi.tmx.gz">0</a></td>
<td></td>
<td></td>
<th>lt</th>
</tr><th>lv</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Latvian-English ()" href="download.php?f=Wiki/v1syn/tmx/lv-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>lv</th>
</tr><th>mai</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Maithili-English ()" href="download.php?f=Wiki/v1syn/tmx/mai-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>mai</th>
</tr><th>mdf</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Moksha-English ()" href="download.php?f=Wiki/v1syn/tmx/mdf-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>mdf</th>
</tr><th>mg</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Malagasy-English ()" href="download.php?f=Wiki/v1syn/tmx/mg-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>mg</th>
</tr><th>mh</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Marshallese-English ()" href="download.php?f=Wiki/v1syn/tmx/mh-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>mh</th>
</tr><th>mk</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Macedonian-English ()" href="download.php?f=Wiki/v1syn/tmx/mk-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>mk</th>
</tr><th>ml</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Malayalam-English ()" href="download.php?f=Wiki/v1syn/tmx/ml-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ml</th>
</tr><th>mn</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Mongolian-English ()" href="download.php?f=Wiki/v1syn/tmx/mn-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>mn</th>
</tr><th>mnw</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="mnw-English ()" href="download.php?f=Wiki/v1syn/tmx/mnw-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>mnw</th>
</tr><th>mr</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Marathi-English ()" href="download.php?f=Wiki/v1syn/tmx/mr-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>mr</th>
</tr><th>ms</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Malay-English ()" href="download.php?f=Wiki/v1syn/tmx/ms-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ms</th>
</tr><th>mt</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Maltese-English ()" href="download.php?f=Wiki/v1syn/tmx/mt-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>mt</th>
</tr><th>mwl</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Mirandese-English ()" href="download.php?f=Wiki/v1syn/tmx/mwl-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>mwl</th>
</tr><th>my</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Burmese-English ()" href="download.php?f=Wiki/v1syn/tmx/my-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>my</th>
</tr><th>myv</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Erzya-English ()" href="download.php?f=Wiki/v1syn/tmx/myv-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>myv</th>
</tr><th>na</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Nauru-English ()" href="download.php?f=Wiki/v1syn/tmx/na-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>na</th>
</tr><th>nds</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Low German-English ()" href="download.php?f=Wiki/v1syn/tmx/nds-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>nds</th>
</tr><th>nl</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Dutch-English ()" href="download.php?f=Wiki/v1syn/tmx/nl-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>nl</th>
</tr><tr><th></th>
<th>de</th>
<th>en</th>
<th>et</th>
<th>fi</th>
<th>ru</th>
<th>sv</th>
<th></th></tr>
<th>no</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Norwegian-English ()" href="download.php?f=Wiki/v1syn/tmx/no-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>no</th>
</tr><th>nov</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="nov-English ()" href="download.php?f=Wiki/v1syn/tmx/nov-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>nov</th>
</tr><th>ny</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Chichewa-English ()" href="download.php?f=Wiki/v1syn/tmx/ny-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ny</th>
</tr><th>oc</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Occitan (post 1500)-English ()" href="download.php?f=Wiki/v1syn/tmx/oc-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>oc</th>
</tr><th>or</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Oriya-English ()" href="download.php?f=Wiki/v1syn/tmx/or-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>or</th>
</tr><th>pa</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Panjabi-English ()" href="download.php?f=Wiki/v1syn/tmx/pa-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>pa</th>
</tr><th>pag</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Pangasinan-English ()" href="download.php?f=Wiki/v1syn/tmx/pag-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>pag</th>
</tr><th>pap</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Papiamento-English ()" href="download.php?f=Wiki/v1syn/tmx/pap-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>pap</th>
</tr><th>pdc</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="pdc-English ()" href="download.php?f=Wiki/v1syn/tmx/pdc-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>pdc</th>
</tr><th>pl</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Polish-English ()" href="download.php?f=Wiki/v1syn/tmx/pl-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>pl</th>
</tr><th>pms</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="pms-English ()" href="download.php?f=Wiki/v1syn/tmx/pms-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>pms</th>
</tr><th>ps</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Pushto-English ()" href="download.php?f=Wiki/v1syn/tmx/ps-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ps</th>
</tr><th>pt</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Portuguese-English ()" href="download.php?f=Wiki/v1syn/tmx/pt-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>pt</th>
</tr><th>rm</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Romansh-English ()" href="download.php?f=Wiki/v1syn/tmx/rm-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>rm</th>
</tr><th>rn</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Rundi-English ()" href="download.php?f=Wiki/v1syn/tmx/rn-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>rn</th>
</tr><th>ro</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Romanian-English ()" href="download.php?f=Wiki/v1syn/tmx/ro-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ro</th>
</tr><th>ru</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Russian-English ()" href="download.php?f=Wiki/v1syn/tmx/ru-en.tmx.gz">0</a></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Russian-Finnish ()" href="download.php?f=Wiki/v1syn/tmx/ru-fi.tmx.gz">0</a></td>
<td></td>
<td></td>
<th>ru</th>
</tr><th>rw</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Kinyarwanda-English ()" href="download.php?f=Wiki/v1syn/tmx/rw-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>rw</th>
</tr><th>sa</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Sanskrit-English ()" href="download.php?f=Wiki/v1syn/tmx/sa-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>sa</th>
</tr><th>sah</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Yakut-English ()" href="download.php?f=Wiki/v1syn/tmx/sah-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>sah</th>
</tr><th>scn</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Sicilian-English ()" href="download.php?f=Wiki/v1syn/tmx/scn-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>scn</th>
</tr><th>sco</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Scots-English ()" href="download.php?f=Wiki/v1syn/tmx/sco-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>sco</th>
</tr><th>sd</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Sindhi-English ()" href="download.php?f=Wiki/v1syn/tmx/sd-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>sd</th>
</tr><th>se</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Northern Sami-English ()" href="download.php?f=Wiki/v1syn/tmx/se-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>se</th>
</tr><th>sg</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Sango-English ()" href="download.php?f=Wiki/v1syn/tmx/sg-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>sg</th>
</tr><th>si</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Sinhala-English ()" href="download.php?f=Wiki/v1syn/tmx/si-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>si</th>
</tr><tr><th></th>
<th>de</th>
<th>en</th>
<th>et</th>
<th>fi</th>
<th>ru</th>
<th>sv</th>
<th></th></tr>
<th>sl</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Slovenian-English ()" href="download.php?f=Wiki/v1syn/tmx/sl-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>sl</th>
</tr><th>sq</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Albanian-English ()" href="download.php?f=Wiki/v1syn/tmx/sq-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>sq</th>
</tr><th>stq</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="stq-English ()" href="download.php?f=Wiki/v1syn/tmx/stq-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>stq</th>
</tr><th>sv</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Swedish-English ()" href="download.php?f=Wiki/v1syn/tmx/sv-en.tmx.gz">0</a></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Swedish-Finnish ()" href="download.php?f=Wiki/v1syn/tmx/sv-fi.tmx.gz">0</a></td>
<td></td>
<td></td>
<th>sv</th>
</tr><th>sw</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Swahili-English ()" href="download.php?f=Wiki/v1syn/tmx/sw-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>sw</th>
</tr><th>ta</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Tamil-English ()" href="download.php?f=Wiki/v1syn/tmx/ta-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ta</th>
</tr><th>te</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Telugu-English ()" href="download.php?f=Wiki/v1syn/tmx/te-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>te</th>
</tr><th>tet</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Tetum-English ()" href="download.php?f=Wiki/v1syn/tmx/tet-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>tet</th>
</tr><th>tg</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Tajik-English ()" href="download.php?f=Wiki/v1syn/tmx/tg-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>tg</th>
</tr><th>th</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Thai-English ()" href="download.php?f=Wiki/v1syn/tmx/th-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>th</th>
</tr><th>ti</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Tigrinya-English ()" href="download.php?f=Wiki/v1syn/tmx/ti-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ti</th>
</tr><th>tk</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Turkmen-English ()" href="download.php?f=Wiki/v1syn/tmx/tk-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>tk</th>
</tr><th>tl</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Tagalog-English ()" href="download.php?f=Wiki/v1syn/tmx/tl-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>tl</th>
</tr><th>to</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Tonga (Tonga Islands)-English ()" href="download.php?f=Wiki/v1syn/tmx/to-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>to</th>
</tr><th>tpi</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Tok Pisin-English ()" href="download.php?f=Wiki/v1syn/tmx/tpi-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>tpi</th>
</tr><th>tr</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Turkish-English ()" href="download.php?f=Wiki/v1syn/tmx/tr-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>tr</th>
</tr><th>ts</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Tsonga-English ()" href="download.php?f=Wiki/v1syn/tmx/ts-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ts</th>
</tr><th>tt</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Tatar-English ()" href="download.php?f=Wiki/v1syn/tmx/tt-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>tt</th>
</tr><th>ty</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Tahitian-English ()" href="download.php?f=Wiki/v1syn/tmx/ty-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ty</th>
</tr><th>tyv</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Tuvinian-English ()" href="download.php?f=Wiki/v1syn/tmx/tyv-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>tyv</th>
</tr><th>udm</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Udmurt-English ()" href="download.php?f=Wiki/v1syn/tmx/udm-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>udm</th>
</tr><th>uk</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Ukrainian-English ()" href="download.php?f=Wiki/v1syn/tmx/uk-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>uk</th>
</tr><th>ur</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Urdu-English ()" href="download.php?f=Wiki/v1syn/tmx/ur-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ur</th>
</tr><th>uz</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Uzbek-English ()" href="download.php?f=Wiki/v1syn/tmx/uz-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>uz</th>
</tr><th>vec</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="vec-English ()" href="download.php?f=Wiki/v1syn/tmx/vec-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>vec</th>
</tr><th>vi</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Vietnamese-English ()" href="download.php?f=Wiki/v1syn/tmx/vi-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>vi</th>
</tr><tr><th></th>
<th>de</th>
<th>en</th>
<th>et</th>
<th>fi</th>
<th>ru</th>
<th>sv</th>
<th></th></tr>
<th>vo</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="VolapÃ¼k-English ()" href="download.php?f=Wiki/v1syn/tmx/vo-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>vo</th>
</tr><th>wa</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Walloon-English ()" href="download.php?f=Wiki/v1syn/tmx/wa-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>wa</th>
</tr><th>wo</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Wolof-English ()" href="download.php?f=Wiki/v1syn/tmx/wo-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>wo</th>
</tr><th>xal</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Kalmyk-English ()" href="download.php?f=Wiki/v1syn/tmx/xal-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>xal</th>
</tr><th>xh</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Xhosa-English ()" href="download.php?f=Wiki/v1syn/tmx/xh-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>xh</th>
</tr><th>yi</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Yiddish-English ()" href="download.php?f=Wiki/v1syn/tmx/yi-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>yi</th>
</tr><th>yo</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Yoruba-English ()" href="download.php?f=Wiki/v1syn/tmx/yo-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>yo</th>
</tr><th>zh</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Chinese-English ()" href="download.php?f=Wiki/v1syn/tmx/zh-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>zh</th>
</tr><th>zu</th>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Zulu-English ()" href="download.php?f=Wiki/v1syn/tmx/zu-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>zu</th>
</tr><tr><th></th>
<th>de</th>
<th>en</th>
<th>et</th>
<th>fi</th>
<th>ru</th>
<th>sv</th>
<th></th></tr>
</table>
</div></p></div><hr><h3>Disclaimer</h3> <ul> <li>We do not own any of the text from which the data has been extracted.</li> <li>We only offer files that we believe we are free to redistribute. If any doubt occurs about the legality of any of our file downloads we will take them off right away after contacting us.</li> </ul> <h3>Notice and take down policy</h3> Notice: Should you consider that our data contains material that is owned by you and should therefore not be reproduced here, please: <ul> <li>Clearly identify yourself, with detailed contact data such as an address, telephone number or email address at which you can be contacted.</li> <li>Clearly identify the copyrighted work claimed to be infringed.</li> <li>Clearly identify the material that is claimed to be infringing and information reasonably sufficient to allow us to locate the material.</li> <li>And contact the OPUS project at the following email address: opus-project at helsinki.fi.</li> </ul> Take down: We will comply to legitimate requests by removing the affected sources from the next release of the corpus.<div class="footer"></div>
</body>
</html>