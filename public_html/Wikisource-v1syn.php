<?php include("count.php"); ?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	 "http://www.w3.org/TR/html4/loose.dtd">
<html><head><title>Wikisource</title>
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
</script><h1>Wikisource v1syn</h1><a href="https://github.com/Helsinki-NLP/Tatoeba-Challenge/blob/master/data/Backtranslations.md">Automatically translated data sets</a> that can be used for data augmentation Translations have been done with models trained on the Tatoeba MT challenge data. We include translations of Wikipedia, WikiSource, WikiBooks, WikiNews and WikiQuote (if available for the source language we translate from). Translations are done on shuffled, de-duplicated data sets and they come in blocks of at most one million sentences per file. The original datasets are taken from <a href="https://dumps.wikimedia.org/other/cirrussearch/">cirrussearch wiki dumps</a>. The original back-translations have been checked with the <a href="https://pypi.org/project/heliport/">heliport language identification tool</a> and mismatched sentence pairs are excluded from this distribution.<p>63 languages, 82 bitexts</br>
total number of files: 173</br>
total number of tokens: 3.2G</br>
total number of sentences: 168.1M</br></p>
Please, acknowledge the Wikimedia Foundation for the data and cite the following paper if you use data from this distribution: <pre> @inproceedings{tiedemann-2020-ttc, title = "The {T}atoeba {T}ranslation {C}hallenge -- {R}ealistic Data Sets for Low Resource and Multilingual {MT}", author = {Tiedemann, J{"o}rg}, booktitle = "Proceedings of the Fifth Conference on Machine Translation (Volume 1: Research Papers)", year = "2020", publisher = "Association for Computational Linguistics", url = {https://arxiv.org/abs/2010.06354} } </pre><h3>Download</h3><p>Below you can download data files for all language pairs in different formats and with different kind of annotation (if available). You can click on the various links as explained below.</p><p><b>License:</b> <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC-BY-SA 4.0</a><br/></p><ul><li><a onclick="toggleSection('samples')">Corpus sample files (click to show)</a></li><li><a onclick="toggleSection('download-xml')">Download corpus in their native XML format (click to show)</a></li>
<li><a onclick="toggleSection('download-moses')">Download corpus in plain text format (click to show)</a></li>
</ul><div id='samples' style='display: none;'>
<p>Links to sample files from monolingual corpus files (language-ID links) and bitexts (click on 'view')</p><p><div class="sample"><table border="0" cellpadding="0">
<tr><th></th>
<th><a rel="nofollow" href="Wikisource/v1syn/cs_sample.html">cs</a></th>
<th><a rel="nofollow" href="Wikisource/v1syn/da_sample.html">da</a></th>
<th><a rel="nofollow" href="Wikisource/v1syn/de_sample.html">de</a></th>
<th><a rel="nofollow" href="Wikisource/v1syn/en_sample.html">en</a></th>
<th><a rel="nofollow" href="Wikisource/v1syn/et_sample.html">et</a></th>
<th><a rel="nofollow" href="Wikisource/v1syn/fi_sample.html">fi</a></th>
<th><a rel="nofollow" href="Wikisource/v1syn/hu_sample.html">hu</a></th>
<th><a rel="nofollow" href="Wikisource/v1syn/pl_sample.html">pl</a></th>
<th><a rel="nofollow" href="Wikisource/v1syn/ro_sample.html">ro</a></th>
<th><a rel="nofollow" href="Wikisource/v1syn/ru_sample.html">ru</a></th>
<th><a rel="nofollow" href="Wikisource/v1syn/sk_sample.html">sk</a></th>
<th><a rel="nofollow" href="Wikisource/v1syn/sv_sample.html">sv</a></th>
<th><a rel="nofollow" href="Wikisource/v1syn/uk_sample.html">uk</a></th>
<th></th></tr>
<tr><th><a rel="nofollow" href="Wikisource/v1syn/ar_sample.html">ar</a></th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Arabic-English (sample file)" href="Wikisource/v1syn/ar-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wikisource/v1syn/ar_sample.html">ar</a></th></tr>
<tr><th><a rel="nofollow" href="Wikisource/v1syn/as_sample.html">as</a></th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Assamese-English (sample file)" href="Wikisource/v1syn/as-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wikisource/v1syn/as_sample.html">as</a></th></tr>
<tr><th><a rel="nofollow" href="Wikisource/v1syn/az_sample.html">az</a></th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Azerbaijani-English (sample file)" href="Wikisource/v1syn/az-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wikisource/v1syn/az_sample.html">az</a></th></tr>
<tr><th><a rel="nofollow" href="Wikisource/v1syn/be_sample.html">be</a></th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Belarusian-English (sample file)" href="Wikisource/v1syn/be-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wikisource/v1syn/be_sample.html">be</a></th></tr>
<tr><th><a rel="nofollow" href="Wikisource/v1syn/bg_sample.html">bg</a></th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Bulgarian-English (sample file)" href="Wikisource/v1syn/bg-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wikisource/v1syn/bg_sample.html">bg</a></th></tr>
<tr><th><a rel="nofollow" href="Wikisource/v1syn/bn_sample.html">bn</a></th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Bengali-English (sample file)" href="Wikisource/v1syn/bn-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wikisource/v1syn/bn_sample.html">bn</a></th></tr>
<tr><th><a rel="nofollow" href="Wikisource/v1syn/br_sample.html">br</a></th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Breton-English (sample file)" href="Wikisource/v1syn/br-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wikisource/v1syn/br_sample.html">br</a></th></tr>
<tr><th><a rel="nofollow" href="Wikisource/v1syn/bs_sample.html">bs</a></th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Bosnian-English (sample file)" href="Wikisource/v1syn/bs-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wikisource/v1syn/bs_sample.html">bs</a></th></tr>
<tr><th><a rel="nofollow" href="Wikisource/v1syn/ca_sample.html">ca</a></th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Catalan-English (sample file)" href="Wikisource/v1syn/ca-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wikisource/v1syn/ca_sample.html">ca</a></th></tr>
<tr><th><a rel="nofollow" href="Wikisource/v1syn/cs_sample.html">cs</a></th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Czech-English (sample file)" href="Wikisource/v1syn/cs-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Czech-Ukrainian (sample file)" href="Wikisource/v1syn/cs-uk_sample.html">view</a></td><th><a rel="nofollow" href="Wikisource/v1syn/cs_sample.html">cs</a></th></tr>
<tr><th><a rel="nofollow" href="Wikisource/v1syn/cy_sample.html">cy</a></th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Welsh-English (sample file)" href="Wikisource/v1syn/cy-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wikisource/v1syn/cy_sample.html">cy</a></th></tr>
<tr><th><a rel="nofollow" href="Wikisource/v1syn/da_sample.html">da</a></th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Danish-English (sample file)" href="Wikisource/v1syn/da-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wikisource/v1syn/da_sample.html">da</a></th></tr>
<tr><th><a rel="nofollow" href="Wikisource/v1syn/de_sample.html">de</a></th>
<td></td><td></td><td></td><td><a rel="nofollow" title="German-English (sample file)" href="Wikisource/v1syn/de-en_sample.html">view</a></td><td></td><td><a rel="nofollow" title="German-Finnish (sample file)" href="Wikisource/v1syn/de-fi_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wikisource/v1syn/de_sample.html">de</a></th></tr>
<tr><th><a rel="nofollow" href="Wikisource/v1syn/el_sample.html">el</a></th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Greek-English (sample file)" href="Wikisource/v1syn/el-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wikisource/v1syn/el_sample.html">el</a></th></tr>
<tr><th><a rel="nofollow" href="Wikisource/v1syn/eo_sample.html">eo</a></th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Esperanto-English (sample file)" href="Wikisource/v1syn/eo-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wikisource/v1syn/eo_sample.html">eo</a></th></tr>
<tr><th><a rel="nofollow" href="Wikisource/v1syn/es_sample.html">es</a></th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Spanish-English (sample file)" href="Wikisource/v1syn/es-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wikisource/v1syn/es_sample.html">es</a></th></tr>
<tr><th><a rel="nofollow" href="Wikisource/v1syn/et_sample.html">et</a></th>
<td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Estonian-Finnish (sample file)" href="Wikisource/v1syn/et-fi_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wikisource/v1syn/et_sample.html">et</a></th></tr>
<tr><th><a rel="nofollow" href="Wikisource/v1syn/eu_sample.html">eu</a></th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Basque-English (sample file)" href="Wikisource/v1syn/eu-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wikisource/v1syn/eu_sample.html">eu</a></th></tr>
<tr><th><a rel="nofollow" href="Wikisource/v1syn/fa_sample.html">fa</a></th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Persian-English (sample file)" href="Wikisource/v1syn/fa-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wikisource/v1syn/fa_sample.html">fa</a></th></tr>
<tr><th><a rel="nofollow" href="Wikisource/v1syn/fi_sample.html">fi</a></th>
<td></td><td></td><td><a rel="nofollow" title="Finnish-German (sample file)" href="Wikisource/v1syn/fi-de_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-English (sample file)" href="Wikisource/v1syn/fi-en_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Estonian (sample file)" href="Wikisource/v1syn/fi-et_sample.html">view</a></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Finnish-Russian (sample file)" href="Wikisource/v1syn/fi-ru_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Finnish-Swedish (sample file)" href="Wikisource/v1syn/fi-sv_sample.html">view</a></td><td></td><th><a rel="nofollow" href="Wikisource/v1syn/fi_sample.html">fi</a></th></tr>
<tr><th><a rel="nofollow" href="Wikisource/v1syn/fo_sample.html">fo</a></th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Faroese-English (sample file)" href="Wikisource/v1syn/fo-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wikisource/v1syn/fo_sample.html">fo</a></th></tr>
<tr><th><a rel="nofollow" href="Wikisource/v1syn/fr_sample.html">fr</a></th>
<td></td><td></td><td></td><td><a rel="nofollow" title="French-English (sample file)" href="Wikisource/v1syn/fr-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wikisource/v1syn/fr_sample.html">fr</a></th></tr>
<tr><th><a rel="nofollow" href="Wikisource/v1syn/gl_sample.html">gl</a></th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Galician-English (sample file)" href="Wikisource/v1syn/gl-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wikisource/v1syn/gl_sample.html">gl</a></th></tr>
<tr><th><a rel="nofollow" href="Wikisource/v1syn/gu_sample.html">gu</a></th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Gujarati-English (sample file)" href="Wikisource/v1syn/gu-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wikisource/v1syn/gu_sample.html">gu</a></th></tr>
<tr><th><a rel="nofollow" href="Wikisource/v1syn/hr_sample.html">hr</a></th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Croatian-English (sample file)" href="Wikisource/v1syn/hr-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wikisource/v1syn/hr_sample.html">hr</a></th></tr>
<tr><th></th>
<th>cs</th>
<th>da</th>
<th>de</th>
<th>en</th>
<th>et</th>
<th>fi</th>
<th>hu</th>
<th>pl</th>
<th>ro</th>
<th>ru</th>
<th>sk</th>
<th>sv</th>
<th>uk</th>
<th></th></tr>
<tr><th><a rel="nofollow" href="Wikisource/v1syn/ht_sample.html">ht</a></th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Haitian-English (sample file)" href="Wikisource/v1syn/ht-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wikisource/v1syn/ht_sample.html">ht</a></th></tr>
<tr><th><a rel="nofollow" href="Wikisource/v1syn/hu_sample.html">hu</a></th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Hungarian-English (sample file)" href="Wikisource/v1syn/hu-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Hungarian-Ukrainian (sample file)" href="Wikisource/v1syn/hu-uk_sample.html">view</a></td><th><a rel="nofollow" href="Wikisource/v1syn/hu_sample.html">hu</a></th></tr>
<tr><th><a rel="nofollow" href="Wikisource/v1syn/hy_sample.html">hy</a></th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Armenian-English (sample file)" href="Wikisource/v1syn/hy-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wikisource/v1syn/hy_sample.html">hy</a></th></tr>
<tr><th><a rel="nofollow" href="Wikisource/v1syn/id_sample.html">id</a></th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Indonesian-English (sample file)" href="Wikisource/v1syn/id-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wikisource/v1syn/id_sample.html">id</a></th></tr>
<tr><th><a rel="nofollow" href="Wikisource/v1syn/it_sample.html">it</a></th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Italian-English (sample file)" href="Wikisource/v1syn/it-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wikisource/v1syn/it_sample.html">it</a></th></tr>
<tr><th><a rel="nofollow" href="Wikisource/v1syn/kn_sample.html">kn</a></th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Kannada-English (sample file)" href="Wikisource/v1syn/kn-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wikisource/v1syn/kn_sample.html">kn</a></th></tr>
<tr><th><a rel="nofollow" href="Wikisource/v1syn/ko_sample.html">ko</a></th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Korean-English (sample file)" href="Wikisource/v1syn/ko-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wikisource/v1syn/ko_sample.html">ko</a></th></tr>
<tr><th><a rel="nofollow" href="Wikisource/v1syn/lt_sample.html">lt</a></th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Lithuanian-English (sample file)" href="Wikisource/v1syn/lt-en_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Lithuanian-Finnish (sample file)" href="Wikisource/v1syn/lt-fi_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wikisource/v1syn/lt_sample.html">lt</a></th></tr>
<tr><th><a rel="nofollow" href="Wikisource/v1syn/mk_sample.html">mk</a></th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Macedonian-English (sample file)" href="Wikisource/v1syn/mk-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wikisource/v1syn/mk_sample.html">mk</a></th></tr>
<tr><th><a rel="nofollow" href="Wikisource/v1syn/ml_sample.html">ml</a></th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Malayalam-English (sample file)" href="Wikisource/v1syn/ml-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wikisource/v1syn/ml_sample.html">ml</a></th></tr>
<tr><th><a rel="nofollow" href="Wikisource/v1syn/mr_sample.html">mr</a></th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Marathi-English (sample file)" href="Wikisource/v1syn/mr-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wikisource/v1syn/mr_sample.html">mr</a></th></tr>
<tr><th><a rel="nofollow" href="Wikisource/v1syn/nb_sample.html">nb</a></th>
<td></td><td></td><td></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-English (sample file)" href="Wikisource/v1syn/nb-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wikisource/v1syn/nb_sample.html">nb</a></th></tr>
<tr><th><a rel="nofollow" href="Wikisource/v1syn/nl_sample.html">nl</a></th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Dutch-English (sample file)" href="Wikisource/v1syn/nl-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wikisource/v1syn/nl_sample.html">nl</a></th></tr>
<tr><th><a rel="nofollow" href="Wikisource/v1syn/no_sample.html">no</a></th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Norwegian-English (sample file)" href="Wikisource/v1syn/no-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wikisource/v1syn/no_sample.html">no</a></th></tr>
<tr><th><a rel="nofollow" href="Wikisource/v1syn/or_sample.html">or</a></th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Oriya-English (sample file)" href="Wikisource/v1syn/or-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wikisource/v1syn/or_sample.html">or</a></th></tr>
<tr><th><a rel="nofollow" href="Wikisource/v1syn/pa_sample.html">pa</a></th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Panjabi-English (sample file)" href="Wikisource/v1syn/pa-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wikisource/v1syn/pa_sample.html">pa</a></th></tr>
<tr><th><a rel="nofollow" href="Wikisource/v1syn/pl_sample.html">pl</a></th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Polish-English (sample file)" href="Wikisource/v1syn/pl-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Polish-Ukrainian (sample file)" href="Wikisource/v1syn/pl-uk_sample.html">view</a></td><th><a rel="nofollow" href="Wikisource/v1syn/pl_sample.html">pl</a></th></tr>
<tr><th><a rel="nofollow" href="Wikisource/v1syn/pms_sample.html">pms</a></th>
<td></td><td></td><td></td><td><a rel="nofollow" title="pms-English (sample file)" href="Wikisource/v1syn/pms-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wikisource/v1syn/pms_sample.html">pms</a></th></tr>
<tr><th><a rel="nofollow" href="Wikisource/v1syn/pt_sample.html">pt</a></th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Portuguese-English (sample file)" href="Wikisource/v1syn/pt-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wikisource/v1syn/pt_sample.html">pt</a></th></tr>
<tr><th><a rel="nofollow" href="Wikisource/v1syn/ro_sample.html">ro</a></th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Romanian-English (sample file)" href="Wikisource/v1syn/ro-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Romanian-Ukrainian (sample file)" href="Wikisource/v1syn/ro-uk_sample.html">view</a></td><th><a rel="nofollow" href="Wikisource/v1syn/ro_sample.html">ro</a></th></tr>
<tr><th><a rel="nofollow" href="Wikisource/v1syn/ru_sample.html">ru</a></th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Russian-English (sample file)" href="Wikisource/v1syn/ru-en_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Russian-Finnish (sample file)" href="Wikisource/v1syn/ru-fi_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wikisource/v1syn/ru_sample.html">ru</a></th></tr>
<tr><th><a rel="nofollow" href="Wikisource/v1syn/sa_sample.html">sa</a></th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Sanskrit-English (sample file)" href="Wikisource/v1syn/sa-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wikisource/v1syn/sa_sample.html">sa</a></th></tr>
<tr><th><a rel="nofollow" href="Wikisource/v1syn/sah_sample.html">sah</a></th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Yakut-English (sample file)" href="Wikisource/v1syn/sah-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wikisource/v1syn/sah_sample.html">sah</a></th></tr>
<tr><th><a rel="nofollow" href="Wikisource/v1syn/sk_sample.html">sk</a></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Slovak-Ukrainian (sample file)" href="Wikisource/v1syn/sk-uk_sample.html">view</a></td><th><a rel="nofollow" href="Wikisource/v1syn/sk_sample.html">sk</a></th></tr>
<tr><th><a rel="nofollow" href="Wikisource/v1syn/sl_sample.html">sl</a></th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Slovenian-English (sample file)" href="Wikisource/v1syn/sl-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wikisource/v1syn/sl_sample.html">sl</a></th></tr>
<tr><th><a rel="nofollow" href="Wikisource/v1syn/sr_Cyrl_sample.html">sr_Cyrl</a></th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Serbian-English (sample file)" href="Wikisource/v1syn/sr_Cyrl-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wikisource/v1syn/sr_Cyrl_sample.html">sr_Cyrl</a></th></tr>
<tr><th></th>
<th>cs</th>
<th>da</th>
<th>de</th>
<th>en</th>
<th>et</th>
<th>fi</th>
<th>hu</th>
<th>pl</th>
<th>ro</th>
<th>ru</th>
<th>sk</th>
<th>sv</th>
<th>uk</th>
<th></th></tr>
<tr><th><a rel="nofollow" href="Wikisource/v1syn/sv_sample.html">sv</a></th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Swedish-English (sample file)" href="Wikisource/v1syn/sv-en_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Swedish-Finnish (sample file)" href="Wikisource/v1syn/sv-fi_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wikisource/v1syn/sv_sample.html">sv</a></th></tr>
<tr><th><a rel="nofollow" href="Wikisource/v1syn/ta_sample.html">ta</a></th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Tamil-English (sample file)" href="Wikisource/v1syn/ta-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wikisource/v1syn/ta_sample.html">ta</a></th></tr>
<tr><th><a rel="nofollow" href="Wikisource/v1syn/te_sample.html">te</a></th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Telugu-English (sample file)" href="Wikisource/v1syn/te-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wikisource/v1syn/te_sample.html">te</a></th></tr>
<tr><th><a rel="nofollow" href="Wikisource/v1syn/th_sample.html">th</a></th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Thai-English (sample file)" href="Wikisource/v1syn/th-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wikisource/v1syn/th_sample.html">th</a></th></tr>
<tr><th><a rel="nofollow" href="Wikisource/v1syn/tr_sample.html">tr</a></th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Turkish-English (sample file)" href="Wikisource/v1syn/tr-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wikisource/v1syn/tr_sample.html">tr</a></th></tr>
<tr><th><a rel="nofollow" href="Wikisource/v1syn/uk_sample.html">uk</a></th>
<td><a rel="nofollow" title="Ukrainian-Czech (sample file)" href="Wikisource/v1syn/uk-cs_sample.html">view</a></td><td><a rel="nofollow" title="Ukrainian-Danish (sample file)" href="Wikisource/v1syn/uk-da_sample.html">view</a></td><td><a rel="nofollow" title="Ukrainian-German (sample file)" href="Wikisource/v1syn/uk-de_sample.html">view</a></td><td><a rel="nofollow" title="Ukrainian-English (sample file)" href="Wikisource/v1syn/uk-en_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Ukrainian-Hungarian (sample file)" href="Wikisource/v1syn/uk-hu_sample.html">view</a></td><td><a rel="nofollow" title="Ukrainian-Polish (sample file)" href="Wikisource/v1syn/uk-pl_sample.html">view</a></td><td><a rel="nofollow" title="Ukrainian-Romanian (sample file)" href="Wikisource/v1syn/uk-ro_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Ukrainian-Slovak (sample file)" href="Wikisource/v1syn/uk-sk_sample.html">view</a></td><td><a rel="nofollow" title="Ukrainian-Swedish (sample file)" href="Wikisource/v1syn/uk-sv_sample.html">view</a></td><td></td><th><a rel="nofollow" href="Wikisource/v1syn/uk_sample.html">uk</a></th></tr>
<tr><th><a rel="nofollow" href="Wikisource/v1syn/vec_sample.html">vec</a></th>
<td></td><td></td><td></td><td><a rel="nofollow" title="vec-English (sample file)" href="Wikisource/v1syn/vec-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wikisource/v1syn/vec_sample.html">vec</a></th></tr>
<tr><th><a rel="nofollow" href="Wikisource/v1syn/vi_sample.html">vi</a></th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Vietnamese-English (sample file)" href="Wikisource/v1syn/vi-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wikisource/v1syn/vi_sample.html">vi</a></th></tr>
<tr><th><a rel="nofollow" href="Wikisource/v1syn/yi_sample.html">yi</a></th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Yiddish-English (sample file)" href="Wikisource/v1syn/yi-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wikisource/v1syn/yi_sample.html">yi</a></th></tr>
<tr><th><a rel="nofollow" href="Wikisource/v1syn/zh_Hans_sample.html">zh_Hans</a></th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Chinese-English (sample file)" href="Wikisource/v1syn/zh_Hans-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wikisource/v1syn/zh_Hans_sample.html">zh_Hans</a></th></tr>
<tr><th><a rel="nofollow" href="Wikisource/v1syn/zh_Hant_sample.html">zh_Hant</a></th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Chinese-English (sample file)" href="Wikisource/v1syn/zh_Hant-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wikisource/v1syn/zh_Hant_sample.html">zh_Hant</a></th></tr>
<tr><th></th>
<th><a rel="nofollow" href="Wikisource/v1syn/cs_sample.html">cs</a></th>
<th><a rel="nofollow" href="Wikisource/v1syn/da_sample.html">da</a></th>
<th><a rel="nofollow" href="Wikisource/v1syn/de_sample.html">de</a></th>
<th><a rel="nofollow" href="Wikisource/v1syn/en_sample.html">en</a></th>
<th><a rel="nofollow" href="Wikisource/v1syn/et_sample.html">et</a></th>
<th><a rel="nofollow" href="Wikisource/v1syn/fi_sample.html">fi</a></th>
<th><a rel="nofollow" href="Wikisource/v1syn/hu_sample.html">hu</a></th>
<th><a rel="nofollow" href="Wikisource/v1syn/pl_sample.html">pl</a></th>
<th><a rel="nofollow" href="Wikisource/v1syn/ro_sample.html">ro</a></th>
<th><a rel="nofollow" href="Wikisource/v1syn/ru_sample.html">ru</a></th>
<th><a rel="nofollow" href="Wikisource/v1syn/sk_sample.html">sk</a></th>
<th><a rel="nofollow" href="Wikisource/v1syn/sv_sample.html">sv</a></th>
<th><a rel="nofollow" href="Wikisource/v1syn/uk_sample.html">uk</a></th>
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
<th><a rel="nofollow" title="cs.zip: untokenized XML documents (3 files, 3.1M sentences, 46.5M tokens)" href="download.php?f=Wikisource/v1syn/raw/cs.zip">cs</a></th>
<th><a rel="nofollow" title="da.zip: untokenized XML documents (2 files, 1.0M sentences, 17.8M tokens)" href="download.php?f=Wikisource/v1syn/raw/da.zip">da</a></th>
<th><a rel="nofollow" title="de.zip: untokenized XML documents (9 files, 6.9M sentences, 143.2M tokens)" href="download.php?f=Wikisource/v1syn/raw/de.zip">de</a></th>
<th><a rel="nofollow" title="en.zip: untokenized XML documents (28 files, 70.7M sentences, 1.5G tokens)" href="download.php?f=Wikisource/v1syn/raw/en.zip">en</a></th>
<th><a rel="nofollow" title="et.zip: untokenized XML documents (2 files, 0.6M sentences, 7.2M tokens)" href="download.php?f=Wikisource/v1syn/raw/et.zip">et</a></th>
<th><a rel="nofollow" title="fi.zip: untokenized XML documents (10 files, 13.7M sentences, 195.7M tokens)" href="download.php?f=Wikisource/v1syn/raw/fi.zip">fi</a></th>
<th><a rel="nofollow" title="hu.zip: untokenized XML documents (2 files, 1.3M sentences, 19.2M tokens)" href="download.php?f=Wikisource/v1syn/raw/hu.zip">hu</a></th>
<th><a rel="nofollow" title="pl.zip: untokenized XML documents (8 files, 8.2M sentences, 122.0M tokens)" href="download.php?f=Wikisource/v1syn/raw/pl.zip">pl</a></th>
<th><a rel="nofollow" title="ro.zip: untokenized XML documents (2 files, 1.4M sentences, 26.0M tokens)" href="download.php?f=Wikisource/v1syn/raw/ro.zip">ro</a></th>
<th><a rel="nofollow" title="ru.zip: untokenized XML documents (10 files, 7.9M sentences, 134.2M tokens)" href="download.php?f=Wikisource/v1syn/raw/ru.zip">ru</a></th>
<th><a rel="nofollow" title="sk.zip: untokenized XML documents (2 files, 0.6M sentences, 9.4M tokens)" href="download.php?f=Wikisource/v1syn/raw/sk.zip">sk</a></th>
<th><a rel="nofollow" title="sv.zip: untokenized XML documents (3 files, 2.1M sentences, 39.0M tokens)" href="download.php?f=Wikisource/v1syn/raw/sv.zip">sv</a></th>
<th><a rel="nofollow" title="uk.zip: untokenized XML documents (3 files, 4.1M sentences, 65.6M tokens)" href="download.php?f=Wikisource/v1syn/raw/uk.zip">uk</a></th>
<th></th></tr>
<th><a rel="nofollow" title="ar.zip: untokenized XML documents (2 files, 1.3M sentences, 25.9M tokens)" href="download.php?f=Wikisource/v1syn/raw/ar.zip">ar</a></th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ddffc6'><a rel="nofollow" title="Arabic-English (2 aligned documents 1.3M links 61.2M tokens )" href="download.php?f=Wikisource/v1syn/xml/ar-en.xml.gz">1.3M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ar</th>
</tr><th><a rel="nofollow" title="as.zip: untokenized XML documents (1 files, 4.0k sentences, 58.9k tokens)" href="download.php?f=Wikisource/v1syn/raw/as.zip">as</a></th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffd5d5'><a rel="nofollow" title="Assamese-English (4.0k links 0.1M tokens )" href="download.php?f=Wikisource/v1syn/xml/as-en.xml.gz">4.0k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>as</th>
</tr><th><a rel="nofollow" title="az.zip: untokenized XML documents (1 files, 0.3M sentences, 3.3M tokens)" href="download.php?f=Wikisource/v1syn/raw/az.zip">az</a></th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#edffce'><a rel="nofollow" title="Azerbaijani-English (0.3M links 8.1M tokens )" href="download.php?f=Wikisource/v1syn/xml/az-en.xml.gz">0.3M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>az</th>
</tr><th><a rel="nofollow" title="be.zip: untokenized XML documents (1 files, 0.1M sentences, 1.7M tokens)" href="download.php?f=Wikisource/v1syn/raw/be.zip">be</a></th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffffe8'><a rel="nofollow" title="Belarusian-English (0.1M links 3.8M tokens )" href="download.php?f=Wikisource/v1syn/xml/be-en.xml.gz">0.1M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>be</th>
</tr><th><a rel="nofollow" title="bg.zip: untokenized XML documents (1 files, 0.1M sentences, 2.2M tokens)" href="download.php?f=Wikisource/v1syn/raw/bg.zip">bg</a></th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffffe9'><a rel="nofollow" title="Bulgarian-English (0.1M links 4.7M tokens )" href="download.php?f=Wikisource/v1syn/xml/bg-en.xml.gz">0.1M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>bg</th>
</tr><th><a rel="nofollow" title="bn.zip: untokenized XML documents (1 files, 16.3k sentences, 0.3M tokens)" href="download.php?f=Wikisource/v1syn/raw/bn.zip">bn</a></th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffe3e1'><a rel="nofollow" title="Bengali-English (16.3k links 0.6M tokens )" href="download.php?f=Wikisource/v1syn/xml/bn-en.xml.gz">16.3k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>bn</th>
</tr><th><a rel="nofollow" title="br.zip: untokenized XML documents (1 files, 0.3M sentences, 5.5M tokens)" href="download.php?f=Wikisource/v1syn/raw/br.zip">br</a></th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#edffce'><a rel="nofollow" title="Breton-English (0.3M links 12.5M tokens )" href="download.php?f=Wikisource/v1syn/xml/br-en.xml.gz">0.3M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>br</th>
</tr><th><a rel="nofollow" title="bs.zip: untokenized XML documents (1 files, 72.5k sentences, 1.3M tokens)" href="download.php?f=Wikisource/v1syn/raw/bs.zip">bs</a></th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#fffdf1'><a rel="nofollow" title="Bosnian-English (79.3k links 3.1M tokens )" href="download.php?f=Wikisource/v1syn/xml/bs-en.xml.gz">79.3k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>bs</th>
</tr><th><a rel="nofollow" title="ca.zip: untokenized XML documents (1 files, 0.2M sentences, 3.5M tokens)" href="download.php?f=Wikisource/v1syn/raw/ca.zip">ca</a></th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffffe7'><a rel="nofollow" title="Catalan-English (0.2M links 7.0M tokens )" href="download.php?f=Wikisource/v1syn/xml/ca-en.xml.gz">0.2M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ca</th>
</tr><th><a rel="nofollow" title="cs.zip: untokenized XML documents (3 files, 3.1M sentences, 46.5M tokens)" href="download.php?f=Wikisource/v1syn/raw/cs.zip">cs</a></th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#daffc7'><a rel="nofollow" title="Czech-English (2 aligned documents 1.7M links 54.5M tokens )" href="download.php?f=Wikisource/v1syn/xml/cs-en.xml.gz">1.7M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#deffc6'><a rel="nofollow" title="Czech-Ukrainian (2 aligned documents 1.1M links 37.3M tokens )" href="download.php?f=Wikisource/v1syn/xml/cs-uk.xml.gz">1.1M</a></td>
<th>cs</th>
</tr><th><a rel="nofollow" title="cy.zip: untokenized XML documents (1 files, 18.2k sentences, 0.4M tokens)" href="download.php?f=Wikisource/v1syn/raw/cy.zip">cy</a></th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffe4e2'><a rel="nofollow" title="Welsh-English (18.2k links 0.9M tokens )" href="download.php?f=Wikisource/v1syn/xml/cy-en.xml.gz">18.2k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>cy</th>
</tr><th><a rel="nofollow" title="da.zip: untokenized XML documents (2 files, 1.0M sentences, 17.8M tokens)" href="download.php?f=Wikisource/v1syn/raw/da.zip">da</a></th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#e9ffcb'><a rel="nofollow" title="Danish-English (0.4M links 15.1M tokens )" href="download.php?f=Wikisource/v1syn/xml/da-en.xml.gz">0.4M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>da</th>
</tr><th><a rel="nofollow" title="de.zip: untokenized XML documents (9 files, 6.9M sentences, 143.2M tokens)" href="download.php?f=Wikisource/v1syn/raw/de.zip">de</a></th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#cbffcb'><a rel="nofollow" title="German-English (8 aligned documents 5.8M links 261.3M tokens )" href="download.php?f=Wikisource/v1syn/xml/de-en.xml.gz">5.8M</a></td>
<td></td>
<td bgcolor='#cdffcd'><a rel="nofollow" title="German-Finnish (7 aligned documents 5.0M links 185.8M tokens )" href="download.php?f=Wikisource/v1syn/xml/de-fi.xml.gz">5.0M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>de</th>
</tr><th><a rel="nofollow" title="el.zip: untokenized XML documents (1 files, 0.3M sentences, 5.8M tokens)" href="download.php?f=Wikisource/v1syn/raw/el.zip">el</a></th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ecffcd'><a rel="nofollow" title="Greek-English (0.3M links 12.2M tokens )" href="download.php?f=Wikisource/v1syn/xml/el-en.xml.gz">0.3M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>el</th>
</tr><th><a rel="nofollow" title="eo.zip: untokenized XML documents (1 files, 0.2M sentences, 3.6M tokens)" href="download.php?f=Wikisource/v1syn/raw/eo.zip">eo</a></th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#f2ffd3'><a rel="nofollow" title="Esperanto-English (0.2M links 7.4M tokens )" href="download.php?f=Wikisource/v1syn/xml/eo-en.xml.gz">0.2M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>eo</th>
</tr><th><a rel="nofollow" title="es.zip: untokenized XML documents (3 files, 2.7M sentences, 66.0M tokens)" href="download.php?f=Wikisource/v1syn/raw/es.zip">es</a></th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#d5ffca'><a rel="nofollow" title="Spanish-English (3 aligned documents 2.7M links 132.9M tokens )" href="download.php?f=Wikisource/v1syn/xml/es-en.xml.gz">2.7M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>es</th>
</tr><th><a rel="nofollow" title="et.zip: untokenized XML documents (2 files, 0.6M sentences, 7.2M tokens)" href="download.php?f=Wikisource/v1syn/raw/et.zip">et</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ebffcd'><a rel="nofollow" title="Estonian-Finnish (0.3M links 8.7M tokens )" href="download.php?f=Wikisource/v1syn/xml/et-fi.xml.gz">0.3M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>et</th>
</tr><th><a rel="nofollow" title="eu.zip: untokenized XML documents (1 files, 53.4k sentences, 0.9M tokens)" href="download.php?f=Wikisource/v1syn/raw/eu.zip">eu</a></th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#fff8f0'><a rel="nofollow" title="Basque-English (53.4k links 2.0M tokens )" href="download.php?f=Wikisource/v1syn/xml/eu-en.xml.gz">53.4k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>eu</th>
</tr><th><a rel="nofollow" title="fa.zip: untokenized XML documents (1 files, 0.2M sentences, 5.5M tokens)" href="download.php?f=Wikisource/v1syn/raw/fa.zip">fa</a></th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#f3ffd4'><a rel="nofollow" title="Persian-English (0.2M links 10.5M tokens )" href="download.php?f=Wikisource/v1syn/xml/fa-en.xml.gz">0.2M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>fa</th>
</tr><th><a rel="nofollow" title="fi.zip: untokenized XML documents (10 files, 13.7M sentences, 195.7M tokens)" href="download.php?f=Wikisource/v1syn/raw/fi.zip">fi</a></th>
<td></td>
<td></td>
<td bgcolor='#f1ffd2'><a rel="nofollow" title="Finnish-German (0.2M links 6.3M tokens )" href="download.php?f=Wikisource/v1syn/xml/fi-de.xml.gz">0.2M</a></td>
<td bgcolor='#efffd0'><a rel="nofollow" title="Finnish-English (0.3M links 6.9M tokens )" href="download.php?f=Wikisource/v1syn/xml/fi-en.xml.gz">0.3M</a></td>
<td bgcolor='#f1ffd2'><a rel="nofollow" title="Finnish-Estonian (0.2M links 5.2M tokens )" href="download.php?f=Wikisource/v1syn/xml/fi-et.xml.gz">0.2M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#f2ffd3'><a rel="nofollow" title="Finnish-Russian (0.2M links 5.4M tokens )" href="download.php?f=Wikisource/v1syn/xml/fi-ru.xml.gz">0.2M</a></td>
<td></td>
<td bgcolor='#efffd0'><a rel="nofollow" title="Finnish-Swedish (0.3M links 6.4M tokens )" href="download.php?f=Wikisource/v1syn/xml/fi-sv.xml.gz">0.3M</a></td>
<td></td>
<th>fi</th>
</tr><th><a rel="nofollow" title="fo.zip: untokenized XML documents (1 files, 1.3k sentences, 23.3k tokens)" href="download.php?f=Wikisource/v1syn/raw/fo.zip">fo</a></th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffd1d1'><a rel="nofollow" title="Faroese-English (1.3k links 54.6k tokens )" href="download.php?f=Wikisource/v1syn/xml/fo-en.xml.gz">1.3k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>fo</th>
</tr><th><a rel="nofollow" title="fr.zip: untokenized XML documents (28 files, 24.6M sentences, 557.5M tokens)" href="download.php?f=Wikisource/v1syn/raw/fr.zip">fr</a></th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#bfffbf'><a rel="nofollow" title="French-English (28 aligned documents 24.7M links 1.1G tokens )" href="download.php?f=Wikisource/v1syn/xml/fr-en.xml.gz">24.7M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>fr</th>
</tr><th><a rel="nofollow" title="gl.zip: untokenized XML documents (1 files, 21.4k sentences, 0.5M tokens)" href="download.php?f=Wikisource/v1syn/raw/gl.zip">gl</a></th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffe7e4'><a rel="nofollow" title="Galician-English (21.4k links 1.1M tokens )" href="download.php?f=Wikisource/v1syn/xml/gl-en.xml.gz">21.4k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>gl</th>
</tr><th><a rel="nofollow" title="gu.zip: untokenized XML documents (1 files, 0.5M sentences, 5.1M tokens)" href="download.php?f=Wikisource/v1syn/raw/gu.zip">gu</a></th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#e6ffc9'><a rel="nofollow" title="Gujarati-English (0.5M links 13.6M tokens )" href="download.php?f=Wikisource/v1syn/xml/gu-en.xml.gz">0.5M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>gu</th>
</tr><th><a rel="nofollow" title="hr.zip: untokenized XML documents (1 files, 0.4M sentences, 7.1M tokens)" href="download.php?f=Wikisource/v1syn/raw/hr.zip">hr</a></th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#e8ffca'><a rel="nofollow" title="Croatian-English (0.4M links 16.1M tokens )" href="download.php?f=Wikisource/v1syn/xml/hr-en.xml.gz">0.4M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>hr</th>
</tr><tr><th></th>
<th>cs</th>
<th>da</th>
<th>de</th>
<th>en</th>
<th>et</th>
<th>fi</th>
<th>hu</th>
<th>pl</th>
<th>ro</th>
<th>ru</th>
<th>sk</th>
<th>sv</th>
<th>uk</th>
<th></th></tr>
<th><a rel="nofollow" title="ht.zip: untokenized XML documents (1 files, 1.4k sentences, 27.5k tokens)" href="download.php?f=Wikisource/v1syn/raw/ht.zip">ht</a></th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffd1d1'><a rel="nofollow" title="Haitian-English (1.4k links 54.2k tokens )" href="download.php?f=Wikisource/v1syn/xml/ht-en.xml.gz">1.4k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ht</th>
</tr><th><a rel="nofollow" title="hu.zip: untokenized XML documents (2 files, 1.3M sentences, 19.2M tokens)" href="download.php?f=Wikisource/v1syn/raw/hu.zip">hu</a></th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#e4ffc8'><a rel="nofollow" title="Hungarian-English (0.6M links 21.7M tokens )" href="download.php?f=Wikisource/v1syn/xml/hu-en.xml.gz">0.6M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#e4ffc8'><a rel="nofollow" title="Hungarian-Ukrainian (0.7M links 19.1M tokens )" href="download.php?f=Wikisource/v1syn/xml/hu-uk.xml.gz">0.7M</a></td>
<th>hu</th>
</tr><th><a rel="nofollow" title="hy.zip: untokenized XML documents (2 files, 1.3M sentences, 17.6M tokens)" href="download.php?f=Wikisource/v1syn/raw/hy.zip">hy</a></th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ddffc7'><a rel="nofollow" title="Armenian-English (2 aligned documents 1.3M links 39.7M tokens )" href="download.php?f=Wikisource/v1syn/xml/hy-en.xml.gz">1.3M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>hy</th>
</tr><th><a rel="nofollow" title="id.zip: untokenized XML documents (1 files, 0.2M sentences, 4.0M tokens)" href="download.php?f=Wikisource/v1syn/raw/id.zip">id</a></th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#f3ffd4'><a rel="nofollow" title="Indonesian-English (0.2M links 8.9M tokens )" href="download.php?f=Wikisource/v1syn/xml/id-en.xml.gz">0.2M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>id</th>
</tr><th><a rel="nofollow" title="it.zip: untokenized XML documents (2 files, 1.8M sentences, 34.5M tokens)" href="download.php?f=Wikisource/v1syn/raw/it.zip">it</a></th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#daffc7'><a rel="nofollow" title="Italian-English (2 aligned documents 1.8M links 71.7M tokens )" href="download.php?f=Wikisource/v1syn/xml/it-en.xml.gz">1.8M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>it</th>
</tr><th><a rel="nofollow" title="kn.zip: untokenized XML documents (1 files, 42.2k sentences, 0.6M tokens)" href="download.php?f=Wikisource/v1syn/raw/kn.zip">kn</a></th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#fff4ee'><a rel="nofollow" title="Kannada-English (42.2k links 1.3M tokens )" href="download.php?f=Wikisource/v1syn/xml/kn-en.xml.gz">42.2k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>kn</th>
</tr><th><a rel="nofollow" title="ko.zip: untokenized XML documents (1 files, 0.4M sentences, 6.3M tokens)" href="download.php?f=Wikisource/v1syn/raw/ko.zip">ko</a></th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#e8ffca'><a rel="nofollow" title="Korean-English (0.4M links 15.9M tokens )" href="download.php?f=Wikisource/v1syn/xml/ko-en.xml.gz">0.4M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ko</th>
</tr><th><a rel="nofollow" title="lt.zip: untokenized XML documents (1 files, 53.4k sentences, 0.7M tokens)" href="download.php?f=Wikisource/v1syn/raw/lt.zip">lt</a></th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#fff8f0'><a rel="nofollow" title="Lithuanian-English (53.0k links 1.6M tokens )" href="download.php?f=Wikisource/v1syn/xml/lt-en.xml.gz">53.0k</a></td>
<td></td>
<td bgcolor='#fff8f0'><a rel="nofollow" title="Lithuanian-Finnish (52.7k links 1.3M tokens )" href="download.php?f=Wikisource/v1syn/xml/lt-fi.xml.gz">52.7k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>lt</th>
</tr><th><a rel="nofollow" title="mk.zip: untokenized XML documents (1 files, 19.7k sentences, 0.4M tokens)" href="download.php?f=Wikisource/v1syn/raw/mk.zip">mk</a></th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffe6e3'><a rel="nofollow" title="Macedonian-English (19.7k links 0.9M tokens )" href="download.php?f=Wikisource/v1syn/xml/mk-en.xml.gz">19.7k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>mk</th>
</tr><th><a rel="nofollow" title="ml.zip: untokenized XML documents (1 files, 0.1M sentences, 1.2M tokens)" href="download.php?f=Wikisource/v1syn/raw/ml.zip">ml</a></th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffffeb'><a rel="nofollow" title="Malayalam-English (0.1M links 3.0M tokens )" href="download.php?f=Wikisource/v1syn/xml/ml-en.xml.gz">0.1M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ml</th>
</tr><th><a rel="nofollow" title="mr.zip: untokenized XML documents (1 files, 0.6M sentences, 5.1M tokens)" href="download.php?f=Wikisource/v1syn/raw/mr.zip">mr</a></th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#e5ffc8'><a rel="nofollow" title="Marathi-English (0.6M links 13.7M tokens )" href="download.php?f=Wikisource/v1syn/xml/mr-en.xml.gz">0.6M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>mr</th>
</tr><th><a rel="nofollow" title="nb.zip: untokenized XML documents (1 files, 0.2M sentences, 2.9M tokens)" href="download.php?f=Wikisource/v1syn/raw/nb.zip">nb</a></th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#efffd0'><a rel="nofollow" title="BokmÃ¥l, Norwegian-English (0.3M links 8.2M tokens )" href="download.php?f=Wikisource/v1syn/xml/nb-en.xml.gz">0.3M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>nb</th>
</tr><th><a rel="nofollow" title="nl.zip: untokenized XML documents (1 files, 0.3M sentences, 6.9M tokens)" href="download.php?f=Wikisource/v1syn/raw/nl.zip">nl</a></th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#edffce'><a rel="nofollow" title="Dutch-English (0.3M links 13.8M tokens )" href="download.php?f=Wikisource/v1syn/xml/nl-en.xml.gz">0.3M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>nl</th>
</tr><th><a rel="nofollow" title="no.zip: untokenized XML documents (1 files, 0.2M sentences, 2.9M tokens)" href="download.php?f=Wikisource/v1syn/raw/no.zip">no</a></th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffffe1'><a rel="nofollow" title="Norwegian-English (0.2M links 6.0M tokens )" href="download.php?f=Wikisource/v1syn/xml/no-en.xml.gz">0.2M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>no</th>
</tr><th><a rel="nofollow" title="or.zip: untokenized XML documents (1 files, 3.9k sentences, 50.2k tokens)" href="download.php?f=Wikisource/v1syn/raw/or.zip">or</a></th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffd5d5'><a rel="nofollow" title="Oriya-English (3.9k links 0.1M tokens )" href="download.php?f=Wikisource/v1syn/xml/or-en.xml.gz">3.9k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>or</th>
</tr><th><a rel="nofollow" title="pa.zip: untokenized XML documents (1 files, 14.9k sentences, 0.2M tokens)" href="download.php?f=Wikisource/v1syn/raw/pa.zip">pa</a></th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffe1df'><a rel="nofollow" title="Panjabi-English (14.9k links 0.5M tokens )" href="download.php?f=Wikisource/v1syn/xml/pa-en.xml.gz">14.9k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>pa</th>
</tr><th><a rel="nofollow" title="pl.zip: untokenized XML documents (8 files, 8.2M sentences, 122.0M tokens)" href="download.php?f=Wikisource/v1syn/raw/pl.zip">pl</a></th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#c9ffc9'><a rel="nofollow" title="Polish-English (7 aligned documents 6.7M links 217.9M tokens )" href="download.php?f=Wikisource/v1syn/xml/pl-en.xml.gz">6.7M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#e1ffc7'><a rel="nofollow" title="Polish-Ukrainian (0.9M links 32.1M tokens )" href="download.php?f=Wikisource/v1syn/xml/pl-uk.xml.gz">0.9M</a></td>
<th>pl</th>
</tr><th><a rel="nofollow" title="pms.zip: untokenized XML documents (1 files, 63.9k sentences, 1.1M tokens)" href="download.php?f=Wikisource/v1syn/raw/pms.zip">pms</a></th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#fffbf1'><a rel="nofollow" title="pms-English (63.9k links 2.4M tokens )" href="download.php?f=Wikisource/v1syn/xml/pms-en.xml.gz">63.9k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>pms</th>
</tr><th><a rel="nofollow" title="pt.zip: untokenized XML documents (2 files, 1.0M sentences, 20.4M tokens)" href="download.php?f=Wikisource/v1syn/raw/pt.zip">pt</a></th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#dfffc6'><a rel="nofollow" title="Portuguese-English (2 aligned documents 1.0M links 42.2M tokens )" href="download.php?f=Wikisource/v1syn/xml/pt-en.xml.gz">1.0M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>pt</th>
</tr><th><a rel="nofollow" title="ro.zip: untokenized XML documents (2 files, 1.4M sentences, 26.0M tokens)" href="download.php?f=Wikisource/v1syn/raw/ro.zip">ro</a></th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#e2ffc7'><a rel="nofollow" title="Romanian-English (0.8M links 30.9M tokens )" href="download.php?f=Wikisource/v1syn/xml/ro-en.xml.gz">0.8M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#e2ffc7'><a rel="nofollow" title="Romanian-Ukrainian (0.8M links 28.2M tokens )" href="download.php?f=Wikisource/v1syn/xml/ro-uk.xml.gz">0.8M</a></td>
<th>ro</th>
</tr><th><a rel="nofollow" title="ru.zip: untokenized XML documents (10 files, 7.9M sentences, 134.2M tokens)" href="download.php?f=Wikisource/v1syn/raw/ru.zip">ru</a></th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#c8ffc8'><a rel="nofollow" title="Russian-English (9 aligned documents 7.5M links 288.4M tokens )" href="download.php?f=Wikisource/v1syn/xml/ru-en.xml.gz">7.5M</a></td>
<td></td>
<td bgcolor='#c8ffc8'><a rel="nofollow" title="Russian-Finnish (9 aligned documents 7.3M links 216.1M tokens )" href="download.php?f=Wikisource/v1syn/xml/ru-fi.xml.gz">7.3M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ru</th>
</tr><th><a rel="nofollow" title="sa.zip: untokenized XML documents (1 files, 47.1k sentences, 0.5M tokens)" href="download.php?f=Wikisource/v1syn/raw/sa.zip">sa</a></th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#fff6ef'><a rel="nofollow" title="Sanskrit-English (47.1k links 1.4M tokens )" href="download.php?f=Wikisource/v1syn/xml/sa-en.xml.gz">47.1k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>sa</th>
</tr><th><a rel="nofollow" title="sah.zip: untokenized XML documents (1 files, 51.7k sentences, 0.6M tokens)" href="download.php?f=Wikisource/v1syn/raw/sah.zip">sah</a></th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#fff8f0'><a rel="nofollow" title="Yakut-English (51.7k links 1.8M tokens )" href="download.php?f=Wikisource/v1syn/xml/sah-en.xml.gz">51.7k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>sah</th>
</tr><th><a rel="nofollow" title="sk.zip: untokenized XML documents (2 files, 0.6M sentences, 9.4M tokens)" href="download.php?f=Wikisource/v1syn/raw/sk.zip">sk</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffe5e2'><a rel="nofollow" title="Slovak-Ukrainian (19.0k links 0.7M tokens )" href="download.php?f=Wikisource/v1syn/xml/sk-uk.xml.gz">19.0k</a></td>
<th>sk</th>
</tr><th><a rel="nofollow" title="sl.zip: untokenized XML documents (3 files, 2.4M sentences, 37.8M tokens)" href="download.php?f=Wikisource/v1syn/raw/sl.zip">sl</a></th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#d6ffc8'><a rel="nofollow" title="Slovenian-English (3 aligned documents 2.4M links 80.2M tokens )" href="download.php?f=Wikisource/v1syn/xml/sl-en.xml.gz">2.4M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>sl</th>
</tr><th><a rel="nofollow" title="sr_Cyrl.zip: untokenized XML documents (1 files, 0.5M sentences, 8.2M tokens)" href="download.php?f=Wikisource/v1syn/raw/sr_Cyrl.zip">sr_Cyrl</a></th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#e5ffc8'><a rel="nofollow" title="Serbian-English (0.6M links 18.5M tokens )" href="download.php?f=Wikisource/v1syn/xml/sr_Cyrl-en.xml.gz">0.6M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>sr_Cyrl</th>
</tr><tr><th></th>
<th>cs</th>
<th>da</th>
<th>de</th>
<th>en</th>
<th>et</th>
<th>fi</th>
<th>hu</th>
<th>pl</th>
<th>ro</th>
<th>ru</th>
<th>sk</th>
<th>sv</th>
<th>uk</th>
<th></th></tr>
<th><a rel="nofollow" title="sv.zip: untokenized XML documents (3 files, 2.1M sentences, 39.0M tokens)" href="download.php?f=Wikisource/v1syn/raw/sv.zip">sv</a></th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#deffc6'><a rel="nofollow" title="Swedish-English (2 aligned documents 1.2M links 52.0M tokens )" href="download.php?f=Wikisource/v1syn/xml/sv-en.xml.gz">1.2M</a></td>
<td></td>
<td bgcolor='#e0ffc6'><a rel="nofollow" title="Swedish-Finnish (0.9M links 35.2M tokens )" href="download.php?f=Wikisource/v1syn/xml/sv-fi.xml.gz">0.9M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>sv</th>
</tr><th><a rel="nofollow" title="ta.zip: untokenized XML documents (2 files, 1.0M sentences, 13.5M tokens)" href="download.php?f=Wikisource/v1syn/raw/ta.zip">ta</a></th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#e0ffc7'><a rel="nofollow" title="Tamil-English (2 aligned documents 1.0M links 28.9M tokens )" href="download.php?f=Wikisource/v1syn/xml/ta-en.xml.gz">1.0M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ta</th>
</tr><th><a rel="nofollow" title="te.zip: untokenized XML documents (1 files, 0.8M sentences, 6.5M tokens)" href="download.php?f=Wikisource/v1syn/raw/te.zip">te</a></th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#e2ffc7'><a rel="nofollow" title="Telugu-English (0.8M links 18.4M tokens )" href="download.php?f=Wikisource/v1syn/xml/te-en.xml.gz">0.8M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>te</th>
</tr><th><a rel="nofollow" title="th.zip: untokenized XML documents (1 files, 2.1k sentences, 20.8k tokens)" href="download.php?f=Wikisource/v1syn/raw/th.zip">th</a></th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffd2d2'><a rel="nofollow" title="Thai-English (2.1k links 66.3k tokens )" href="download.php?f=Wikisource/v1syn/xml/th-en.xml.gz">2.1k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>th</th>
</tr><th><a rel="nofollow" title="tr.zip: untokenized XML documents (1 files, 0.3M sentences, 3.9M tokens)" href="download.php?f=Wikisource/v1syn/raw/tr.zip">tr</a></th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#eeffcf'><a rel="nofollow" title="Turkish-English (0.3M links 8.9M tokens )" href="download.php?f=Wikisource/v1syn/xml/tr-en.xml.gz">0.3M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>tr</th>
</tr><th><a rel="nofollow" title="uk.zip: untokenized XML documents (3 files, 4.1M sentences, 65.6M tokens)" href="download.php?f=Wikisource/v1syn/raw/uk.zip">uk</a></th>
<td bgcolor='#e4ffc8'><a rel="nofollow" title="Ukrainian-Czech (0.6M links 17.3M tokens )" href="download.php?f=Wikisource/v1syn/xml/uk-cs.xml.gz">0.6M</a></td>
<td bgcolor='#e4ffc8'><a rel="nofollow" title="Ukrainian-Danish (0.6M links 19.5M tokens )" href="download.php?f=Wikisource/v1syn/xml/uk-da.xml.gz">0.6M</a></td>
<td bgcolor='#e4ffc8'><a rel="nofollow" title="Ukrainian-German (0.6M links 19.8M tokens )" href="download.php?f=Wikisource/v1syn/xml/uk-de.xml.gz">0.6M</a></td>
<td bgcolor='#e4ffc8'><a rel="nofollow" title="Ukrainian-English (0.6M links 18.5M tokens )" href="download.php?f=Wikisource/v1syn/xml/uk-en.xml.gz">0.6M</a></td>
<td></td>
<td></td>
<td bgcolor='#e4ffc8'><a rel="nofollow" title="Ukrainian-Hungarian (0.6M links 18.0M tokens )" href="download.php?f=Wikisource/v1syn/xml/uk-hu.xml.gz">0.6M</a></td>
<td bgcolor='#e4ffc8'><a rel="nofollow" title="Ukrainian-Polish (0.6M links 17.8M tokens )" href="download.php?f=Wikisource/v1syn/xml/uk-pl.xml.gz">0.6M</a></td>
<td bgcolor='#e4ffc8'><a rel="nofollow" title="Ukrainian-Romanian (0.6M links 19.9M tokens )" href="download.php?f=Wikisource/v1syn/xml/uk-ro.xml.gz">0.6M</a></td>
<td></td>
<td bgcolor='#e4ffc8'><a rel="nofollow" title="Ukrainian-Slovak (0.6M links 18.1M tokens )" href="download.php?f=Wikisource/v1syn/xml/uk-sk.xml.gz">0.6M</a></td>
<td bgcolor='#e4ffc8'><a rel="nofollow" title="Ukrainian-Swedish (0.6M links 19.6M tokens )" href="download.php?f=Wikisource/v1syn/xml/uk-sv.xml.gz">0.6M</a></td>
<td></td>
<th>uk</th>
</tr><th><a rel="nofollow" title="vec.zip: untokenized XML documents (1 files, 30.1k sentences, 0.4M tokens)" href="download.php?f=Wikisource/v1syn/raw/vec.zip">vec</a></th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffede9'><a rel="nofollow" title="vec-English (30.1k links 0.9M tokens )" href="download.php?f=Wikisource/v1syn/xml/vec-en.xml.gz">30.1k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>vec</th>
</tr><th><a rel="nofollow" title="vi.zip: untokenized XML documents (1 files, 0.5M sentences, 11.5M tokens)" href="download.php?f=Wikisource/v1syn/raw/vi.zip">vi</a></th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#e7ffca'><a rel="nofollow" title="Vietnamese-English (0.5M links 20.9M tokens )" href="download.php?f=Wikisource/v1syn/xml/vi-en.xml.gz">0.5M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>vi</th>
</tr><th><a rel="nofollow" title="yi.zip: untokenized XML documents (1 files, 0.2k sentences, 2.6k tokens)" href="download.php?f=Wikisource/v1syn/raw/yi.zip">yi</a></th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffd0d0'><a rel="nofollow" title="Yiddish-English (0.2k links 5.3k tokens )" href="download.php?f=Wikisource/v1syn/xml/yi-en.xml.gz">0.2k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>yi</th>
</tr><th><a rel="nofollow" title="zh_Hans.zip: untokenized XML documents (4 files, 3.1M sentences, 3.8M tokens)" href="download.php?f=Wikisource/v1syn/raw/zh_Hans.zip">zh_Hans</a></th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#d2ffcc'><a rel="nofollow" title="Chinese-English (4 aligned documents 3.4M links 62.6M tokens )" href="download.php?f=Wikisource/v1syn/xml/zh_Hans-en.xml.gz">3.4M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>zh_Hans</th>
</tr><th><a rel="nofollow" title="zh_Hant.zip: untokenized XML documents (1 files, 0.1M sentences, 0.2M tokens)" href="download.php?f=Wikisource/v1syn/raw/zh_Hant.zip">zh_Hant</a></th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#f3ffd4'><a rel="nofollow" title="Chinese-English (0.2M links 1.3M tokens )" href="download.php?f=Wikisource/v1syn/xml/zh_Hant-en.xml.gz">0.2M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>zh_Hant</th>
</tr><tr><th></th>
<th>cs</th>
<th>da</th>
<th>de</th>
<th>en</th>
<th>et</th>
<th>fi</th>
<th>hu</th>
<th>pl</th>
<th>ro</th>
<th>ru</th>
<th>sk</th>
<th>sv</th>
<th>uk</th>
<th></th></tr>
</table>
</div></p></div><div id='download-moses' style='display: none;'><p>Links to zip-files with aligned plain text files, one per language (Moses format).</p><p>
<div class="sample"><table border="0" cellpadding="0">
<tr><th></th>
<th>cs</th>
<th>da</th>
<th>de</th>
<th>en</th>
<th>et</th>
<th>fi</th>
<th>hu</th>
<th>pl</th>
<th>ro</th>
<th>ru</th>
<th>sk</th>
<th>sv</th>
<th>uk</th>
<th></th></tr>
<th>ar</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ddffc6'><a rel="nofollow" title="Arabic-English (1.3M links 61.2M tokens )" href="download.php?f=Wikisource/v1syn/moses/ar-en.txt.zip">1.3M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ar</th>
</tr><th>as</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffd5d5'><a rel="nofollow" title="Assamese-English (4.0k links 0.1M tokens )" href="download.php?f=Wikisource/v1syn/moses/as-en.txt.zip">4.0k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>as</th>
</tr><th>az</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#edffce'><a rel="nofollow" title="Azerbaijani-English (0.3M links 8.1M tokens )" href="download.php?f=Wikisource/v1syn/moses/az-en.txt.zip">0.3M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>az</th>
</tr><th>be</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffffe8'><a rel="nofollow" title="Belarusian-English (0.1M links 3.8M tokens )" href="download.php?f=Wikisource/v1syn/moses/be-en.txt.zip">0.1M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>be</th>
</tr><th>bg</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffffe9'><a rel="nofollow" title="Bulgarian-English (0.1M links 4.7M tokens )" href="download.php?f=Wikisource/v1syn/moses/bg-en.txt.zip">0.1M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>bg</th>
</tr><th>bn</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffe3e1'><a rel="nofollow" title="Bengali-English (16.3k links 0.6M tokens )" href="download.php?f=Wikisource/v1syn/moses/bn-en.txt.zip">16.3k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>bn</th>
</tr><th>br</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#edffce'><a rel="nofollow" title="Breton-English (0.3M links 12.5M tokens )" href="download.php?f=Wikisource/v1syn/moses/br-en.txt.zip">0.3M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>br</th>
</tr><th>bs</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#fffdf1'><a rel="nofollow" title="Bosnian-English (79.3k links 3.1M tokens )" href="download.php?f=Wikisource/v1syn/moses/bs-en.txt.zip">79.3k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>bs</th>
</tr><th>ca</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffffe7'><a rel="nofollow" title="Catalan-English (0.2M links 7.0M tokens )" href="download.php?f=Wikisource/v1syn/moses/ca-en.txt.zip">0.2M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ca</th>
</tr><th>cs</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#daffc7'><a rel="nofollow" title="Czech-English (1.7M links 54.5M tokens )" href="download.php?f=Wikisource/v1syn/moses/cs-en.txt.zip">1.7M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#deffc6'><a rel="nofollow" title="Czech-Ukrainian (1.1M links 37.3M tokens )" href="download.php?f=Wikisource/v1syn/moses/cs-uk.txt.zip">1.1M</a></td>
<th>cs</th>
</tr><th>cy</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffe4e2'><a rel="nofollow" title="Welsh-English (18.2k links 0.9M tokens )" href="download.php?f=Wikisource/v1syn/moses/cy-en.txt.zip">18.2k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>cy</th>
</tr><th>da</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#e9ffcb'><a rel="nofollow" title="Danish-English (0.4M links 15.1M tokens )" href="download.php?f=Wikisource/v1syn/moses/da-en.txt.zip">0.4M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>da</th>
</tr><th>de</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#cbffcb'><a rel="nofollow" title="German-English (5.8M links 261.3M tokens )" href="download.php?f=Wikisource/v1syn/moses/de-en.txt.zip">5.8M</a></td>
<td></td>
<td bgcolor='#cdffcd'><a rel="nofollow" title="German-Finnish (5.0M links 185.8M tokens )" href="download.php?f=Wikisource/v1syn/moses/de-fi.txt.zip">5.0M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>de</th>
</tr><th>el</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ecffcd'><a rel="nofollow" title="Greek-English (0.3M links 12.2M tokens )" href="download.php?f=Wikisource/v1syn/moses/el-en.txt.zip">0.3M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>el</th>
</tr><th>eo</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#f2ffd3'><a rel="nofollow" title="Esperanto-English (0.2M links 7.4M tokens )" href="download.php?f=Wikisource/v1syn/moses/eo-en.txt.zip">0.2M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>eo</th>
</tr><th>es</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#d5ffca'><a rel="nofollow" title="Spanish-English (2.7M links 132.9M tokens )" href="download.php?f=Wikisource/v1syn/moses/es-en.txt.zip">2.7M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>es</th>
</tr><th>et</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ebffcd'><a rel="nofollow" title="Estonian-Finnish (0.3M links 8.7M tokens )" href="download.php?f=Wikisource/v1syn/moses/et-fi.txt.zip">0.3M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>et</th>
</tr><th>eu</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#fff8f0'><a rel="nofollow" title="Basque-English (53.4k links 2.0M tokens )" href="download.php?f=Wikisource/v1syn/moses/eu-en.txt.zip">53.4k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>eu</th>
</tr><th>fa</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#f3ffd4'><a rel="nofollow" title="Persian-English (0.2M links 10.5M tokens )" href="download.php?f=Wikisource/v1syn/moses/fa-en.txt.zip">0.2M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>fa</th>
</tr><th>fi</th>
<td></td>
<td></td>
<td bgcolor='#f1ffd2'><a rel="nofollow" title="Finnish-German (0.2M links 6.3M tokens )" href="download.php?f=Wikisource/v1syn/moses/fi-de.txt.zip">0.2M</a></td>
<td bgcolor='#efffd0'><a rel="nofollow" title="Finnish-English (0.3M links 6.9M tokens )" href="download.php?f=Wikisource/v1syn/moses/fi-en.txt.zip">0.3M</a></td>
<td bgcolor='#f1ffd2'><a rel="nofollow" title="Finnish-Estonian (0.2M links 5.2M tokens )" href="download.php?f=Wikisource/v1syn/moses/fi-et.txt.zip">0.2M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#f2ffd3'><a rel="nofollow" title="Finnish-Russian (0.2M links 5.4M tokens )" href="download.php?f=Wikisource/v1syn/moses/fi-ru.txt.zip">0.2M</a></td>
<td></td>
<td bgcolor='#efffd0'><a rel="nofollow" title="Finnish-Swedish (0.3M links 6.4M tokens )" href="download.php?f=Wikisource/v1syn/moses/fi-sv.txt.zip">0.3M</a></td>
<td></td>
<th>fi</th>
</tr><th>fo</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffd1d1'><a rel="nofollow" title="Faroese-English (1.3k links 54.6k tokens )" href="download.php?f=Wikisource/v1syn/moses/fo-en.txt.zip">1.3k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>fo</th>
</tr><th>fr</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#bfffbf'><a rel="nofollow" title="French-English (24.7M links 1.1G tokens )" href="download.php?f=Wikisource/v1syn/moses/fr-en.txt.zip">24.7M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>fr</th>
</tr><th>gl</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffe7e4'><a rel="nofollow" title="Galician-English (21.4k links 1.1M tokens )" href="download.php?f=Wikisource/v1syn/moses/gl-en.txt.zip">21.4k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>gl</th>
</tr><th>gu</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#e6ffc9'><a rel="nofollow" title="Gujarati-English (0.5M links 13.6M tokens )" href="download.php?f=Wikisource/v1syn/moses/gu-en.txt.zip">0.5M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>gu</th>
</tr><th>hr</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#e8ffca'><a rel="nofollow" title="Croatian-English (0.4M links 16.1M tokens )" href="download.php?f=Wikisource/v1syn/moses/hr-en.txt.zip">0.4M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>hr</th>
</tr><tr><th></th>
<th>cs</th>
<th>da</th>
<th>de</th>
<th>en</th>
<th>et</th>
<th>fi</th>
<th>hu</th>
<th>pl</th>
<th>ro</th>
<th>ru</th>
<th>sk</th>
<th>sv</th>
<th>uk</th>
<th></th></tr>
<th>ht</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffd1d1'><a rel="nofollow" title="Haitian-English (1.4k links 54.2k tokens )" href="download.php?f=Wikisource/v1syn/moses/ht-en.txt.zip">1.4k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ht</th>
</tr><th>hu</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#e4ffc8'><a rel="nofollow" title="Hungarian-English (0.6M links 21.7M tokens )" href="download.php?f=Wikisource/v1syn/moses/hu-en.txt.zip">0.6M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#e4ffc8'><a rel="nofollow" title="Hungarian-Ukrainian (0.7M links 19.1M tokens )" href="download.php?f=Wikisource/v1syn/moses/hu-uk.txt.zip">0.7M</a></td>
<th>hu</th>
</tr><th>hy</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ddffc7'><a rel="nofollow" title="Armenian-English (1.3M links 39.7M tokens )" href="download.php?f=Wikisource/v1syn/moses/hy-en.txt.zip">1.3M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>hy</th>
</tr><th>id</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#f3ffd4'><a rel="nofollow" title="Indonesian-English (0.2M links 8.9M tokens )" href="download.php?f=Wikisource/v1syn/moses/id-en.txt.zip">0.2M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>id</th>
</tr><th>it</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#daffc7'><a rel="nofollow" title="Italian-English (1.8M links 71.7M tokens )" href="download.php?f=Wikisource/v1syn/moses/it-en.txt.zip">1.8M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>it</th>
</tr><th>kn</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#fff4ee'><a rel="nofollow" title="Kannada-English (42.2k links 1.3M tokens )" href="download.php?f=Wikisource/v1syn/moses/kn-en.txt.zip">42.2k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>kn</th>
</tr><th>ko</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#e8ffca'><a rel="nofollow" title="Korean-English (0.4M links 15.9M tokens )" href="download.php?f=Wikisource/v1syn/moses/ko-en.txt.zip">0.4M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ko</th>
</tr><th>lt</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#fff8f0'><a rel="nofollow" title="Lithuanian-English (53.0k links 1.6M tokens )" href="download.php?f=Wikisource/v1syn/moses/lt-en.txt.zip">53.0k</a></td>
<td></td>
<td bgcolor='#fff8f0'><a rel="nofollow" title="Lithuanian-Finnish (52.7k links 1.3M tokens )" href="download.php?f=Wikisource/v1syn/moses/lt-fi.txt.zip">52.7k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>lt</th>
</tr><th>mk</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffe6e3'><a rel="nofollow" title="Macedonian-English (19.7k links 0.9M tokens )" href="download.php?f=Wikisource/v1syn/moses/mk-en.txt.zip">19.7k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>mk</th>
</tr><th>ml</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffffeb'><a rel="nofollow" title="Malayalam-English (0.1M links 3.0M tokens )" href="download.php?f=Wikisource/v1syn/moses/ml-en.txt.zip">0.1M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ml</th>
</tr><th>mr</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#e5ffc8'><a rel="nofollow" title="Marathi-English (0.6M links 13.7M tokens )" href="download.php?f=Wikisource/v1syn/moses/mr-en.txt.zip">0.6M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>mr</th>
</tr><th>nb</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#efffd0'><a rel="nofollow" title="BokmÃ¥l, Norwegian-English (0.3M links 8.2M tokens )" href="download.php?f=Wikisource/v1syn/moses/nb-en.txt.zip">0.3M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>nb</th>
</tr><th>nl</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#edffce'><a rel="nofollow" title="Dutch-English (0.3M links 13.8M tokens )" href="download.php?f=Wikisource/v1syn/moses/nl-en.txt.zip">0.3M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>nl</th>
</tr><th>no</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffffe1'><a rel="nofollow" title="Norwegian-English (0.2M links 6.0M tokens )" href="download.php?f=Wikisource/v1syn/moses/no-en.txt.zip">0.2M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>no</th>
</tr><th>or</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffd5d5'><a rel="nofollow" title="Oriya-English (3.9k links 0.1M tokens )" href="download.php?f=Wikisource/v1syn/moses/or-en.txt.zip">3.9k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>or</th>
</tr><th>pa</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffe1df'><a rel="nofollow" title="Panjabi-English (14.9k links 0.5M tokens )" href="download.php?f=Wikisource/v1syn/moses/pa-en.txt.zip">14.9k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>pa</th>
</tr><th>pl</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#c9ffc9'><a rel="nofollow" title="Polish-English (6.7M links 217.9M tokens )" href="download.php?f=Wikisource/v1syn/moses/pl-en.txt.zip">6.7M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#e1ffc7'><a rel="nofollow" title="Polish-Ukrainian (0.9M links 32.1M tokens )" href="download.php?f=Wikisource/v1syn/moses/pl-uk.txt.zip">0.9M</a></td>
<th>pl</th>
</tr><th>pms</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#fffbf1'><a rel="nofollow" title="pms-English (63.9k links 2.4M tokens )" href="download.php?f=Wikisource/v1syn/moses/pms-en.txt.zip">63.9k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>pms</th>
</tr><th>pt</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#dfffc6'><a rel="nofollow" title="Portuguese-English (1.0M links 42.2M tokens )" href="download.php?f=Wikisource/v1syn/moses/pt-en.txt.zip">1.0M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>pt</th>
</tr><th>ro</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#e2ffc7'><a rel="nofollow" title="Romanian-English (0.8M links 30.9M tokens )" href="download.php?f=Wikisource/v1syn/moses/ro-en.txt.zip">0.8M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#e2ffc7'><a rel="nofollow" title="Romanian-Ukrainian (0.8M links 28.2M tokens )" href="download.php?f=Wikisource/v1syn/moses/ro-uk.txt.zip">0.8M</a></td>
<th>ro</th>
</tr><th>ru</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#c8ffc8'><a rel="nofollow" title="Russian-English (7.5M links 288.4M tokens )" href="download.php?f=Wikisource/v1syn/moses/ru-en.txt.zip">7.5M</a></td>
<td></td>
<td bgcolor='#c8ffc8'><a rel="nofollow" title="Russian-Finnish (7.3M links 216.1M tokens )" href="download.php?f=Wikisource/v1syn/moses/ru-fi.txt.zip">7.3M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ru</th>
</tr><th>sa</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#fff6ef'><a rel="nofollow" title="Sanskrit-English (47.1k links 1.4M tokens )" href="download.php?f=Wikisource/v1syn/moses/sa-en.txt.zip">47.1k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>sa</th>
</tr><th>sah</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#fff8f0'><a rel="nofollow" title="Yakut-English (51.7k links 1.8M tokens )" href="download.php?f=Wikisource/v1syn/moses/sah-en.txt.zip">51.7k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>sah</th>
</tr><th>sk</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffe5e2'><a rel="nofollow" title="Slovak-Ukrainian (19.0k links 0.7M tokens )" href="download.php?f=Wikisource/v1syn/moses/sk-uk.txt.zip">19.0k</a></td>
<th>sk</th>
</tr><th>sl</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#d6ffc8'><a rel="nofollow" title="Slovenian-English (2.4M links 80.2M tokens )" href="download.php?f=Wikisource/v1syn/moses/sl-en.txt.zip">2.4M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>sl</th>
</tr><th>sr_Cyrl</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#e5ffc8'><a rel="nofollow" title="Serbian-English (0.6M links 18.5M tokens )" href="download.php?f=Wikisource/v1syn/moses/sr_Cyrl-en.txt.zip">0.6M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>sr_Cyrl</th>
</tr><tr><th></th>
<th>cs</th>
<th>da</th>
<th>de</th>
<th>en</th>
<th>et</th>
<th>fi</th>
<th>hu</th>
<th>pl</th>
<th>ro</th>
<th>ru</th>
<th>sk</th>
<th>sv</th>
<th>uk</th>
<th></th></tr>
<th>sv</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#deffc6'><a rel="nofollow" title="Swedish-English (1.2M links 52.0M tokens )" href="download.php?f=Wikisource/v1syn/moses/sv-en.txt.zip">1.2M</a></td>
<td></td>
<td bgcolor='#e0ffc6'><a rel="nofollow" title="Swedish-Finnish (0.9M links 35.2M tokens )" href="download.php?f=Wikisource/v1syn/moses/sv-fi.txt.zip">0.9M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>sv</th>
</tr><th>ta</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#e0ffc7'><a rel="nofollow" title="Tamil-English (1.0M links 28.9M tokens )" href="download.php?f=Wikisource/v1syn/moses/ta-en.txt.zip">1.0M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ta</th>
</tr><th>te</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#e2ffc7'><a rel="nofollow" title="Telugu-English (0.8M links 18.4M tokens )" href="download.php?f=Wikisource/v1syn/moses/te-en.txt.zip">0.8M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>te</th>
</tr><th>th</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffd2d2'><a rel="nofollow" title="Thai-English (2.1k links 66.3k tokens )" href="download.php?f=Wikisource/v1syn/moses/th-en.txt.zip">2.1k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>th</th>
</tr><th>tr</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#eeffcf'><a rel="nofollow" title="Turkish-English (0.3M links 8.9M tokens )" href="download.php?f=Wikisource/v1syn/moses/tr-en.txt.zip">0.3M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>tr</th>
</tr><th>uk</th>
<td bgcolor='#e4ffc8'><a rel="nofollow" title="Ukrainian-Czech (0.6M links 17.3M tokens )" href="download.php?f=Wikisource/v1syn/moses/uk-cs.txt.zip">0.6M</a></td>
<td bgcolor='#e4ffc8'><a rel="nofollow" title="Ukrainian-Danish (0.6M links 19.5M tokens )" href="download.php?f=Wikisource/v1syn/moses/uk-da.txt.zip">0.6M</a></td>
<td bgcolor='#e4ffc8'><a rel="nofollow" title="Ukrainian-German (0.6M links 19.8M tokens )" href="download.php?f=Wikisource/v1syn/moses/uk-de.txt.zip">0.6M</a></td>
<td bgcolor='#e4ffc8'><a rel="nofollow" title="Ukrainian-English (0.6M links 18.5M tokens )" href="download.php?f=Wikisource/v1syn/moses/uk-en.txt.zip">0.6M</a></td>
<td></td>
<td></td>
<td bgcolor='#e4ffc8'><a rel="nofollow" title="Ukrainian-Hungarian (0.6M links 18.0M tokens )" href="download.php?f=Wikisource/v1syn/moses/uk-hu.txt.zip">0.6M</a></td>
<td bgcolor='#e4ffc8'><a rel="nofollow" title="Ukrainian-Polish (0.6M links 17.8M tokens )" href="download.php?f=Wikisource/v1syn/moses/uk-pl.txt.zip">0.6M</a></td>
<td bgcolor='#e4ffc8'><a rel="nofollow" title="Ukrainian-Romanian (0.6M links 19.9M tokens )" href="download.php?f=Wikisource/v1syn/moses/uk-ro.txt.zip">0.6M</a></td>
<td></td>
<td bgcolor='#e4ffc8'><a rel="nofollow" title="Ukrainian-Slovak (0.6M links 18.1M tokens )" href="download.php?f=Wikisource/v1syn/moses/uk-sk.txt.zip">0.6M</a></td>
<td bgcolor='#e4ffc8'><a rel="nofollow" title="Ukrainian-Swedish (0.6M links 19.6M tokens )" href="download.php?f=Wikisource/v1syn/moses/uk-sv.txt.zip">0.6M</a></td>
<td></td>
<th>uk</th>
</tr><th>vec</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffede9'><a rel="nofollow" title="vec-English (30.1k links 0.9M tokens )" href="download.php?f=Wikisource/v1syn/moses/vec-en.txt.zip">30.1k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>vec</th>
</tr><th>vi</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#e7ffca'><a rel="nofollow" title="Vietnamese-English (0.5M links 20.9M tokens )" href="download.php?f=Wikisource/v1syn/moses/vi-en.txt.zip">0.5M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>vi</th>
</tr><th>yi</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffd0d0'><a rel="nofollow" title="Yiddish-English (0.2k links 5.3k tokens )" href="download.php?f=Wikisource/v1syn/moses/yi-en.txt.zip">0.2k</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>yi</th>
</tr><th>zh_Hans</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#d2ffcc'><a rel="nofollow" title="Chinese-English (3.4M links 62.6M tokens )" href="download.php?f=Wikisource/v1syn/moses/zh_Hans-en.txt.zip">3.4M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>zh_Hans</th>
</tr><th>zh_Hant</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#f3ffd4'><a rel="nofollow" title="Chinese-English (0.2M links 1.3M tokens )" href="download.php?f=Wikisource/v1syn/moses/zh_Hant-en.txt.zip">0.2M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>zh_Hant</th>
</tr><tr><th></th>
<th>cs</th>
<th>da</th>
<th>de</th>
<th>en</th>
<th>et</th>
<th>fi</th>
<th>hu</th>
<th>pl</th>
<th>ro</th>
<th>ru</th>
<th>sk</th>
<th>sv</th>
<th>uk</th>
<th></th></tr>
</table>
</div></p></div><div id='download-tmx' style='display: none;'><p>Links to compressed TMX files, one per language pair.</p><p>
<div class="sample"><table border="0" cellpadding="0">
<tr><th></th>
<th>cs</th>
<th>da</th>
<th>de</th>
<th>en</th>
<th>et</th>
<th>fi</th>
<th>hu</th>
<th>pl</th>
<th>ro</th>
<th>ru</th>
<th>sk</th>
<th>sv</th>
<th>uk</th>
<th></th></tr>
<th>ar</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Arabic-English ()" href="download.php?f=Wikisource/v1syn/tmx/ar-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ar</th>
</tr><th>as</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Assamese-English ()" href="download.php?f=Wikisource/v1syn/tmx/as-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>as</th>
</tr><th>az</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Azerbaijani-English ()" href="download.php?f=Wikisource/v1syn/tmx/az-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>az</th>
</tr><th>be</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Belarusian-English ()" href="download.php?f=Wikisource/v1syn/tmx/be-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>be</th>
</tr><th>bg</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Bulgarian-English ()" href="download.php?f=Wikisource/v1syn/tmx/bg-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>bg</th>
</tr><th>bn</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Bengali-English ()" href="download.php?f=Wikisource/v1syn/tmx/bn-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>bn</th>
</tr><th>br</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Breton-English ()" href="download.php?f=Wikisource/v1syn/tmx/br-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>br</th>
</tr><th>bs</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Bosnian-English ()" href="download.php?f=Wikisource/v1syn/tmx/bs-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>bs</th>
</tr><th>ca</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Catalan-English ()" href="download.php?f=Wikisource/v1syn/tmx/ca-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ca</th>
</tr><th>cs</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Czech-English ()" href="download.php?f=Wikisource/v1syn/tmx/cs-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Czech-Ukrainian ()" href="download.php?f=Wikisource/v1syn/tmx/cs-uk.tmx.gz">0</a></td>
<th>cs</th>
</tr><th>cy</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Welsh-English ()" href="download.php?f=Wikisource/v1syn/tmx/cy-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>cy</th>
</tr><th>da</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Danish-English ()" href="download.php?f=Wikisource/v1syn/tmx/da-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>da</th>
</tr><th>de</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="German-English ()" href="download.php?f=Wikisource/v1syn/tmx/de-en.tmx.gz">0</a></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="German-Finnish ()" href="download.php?f=Wikisource/v1syn/tmx/de-fi.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>de</th>
</tr><th>el</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Greek-English ()" href="download.php?f=Wikisource/v1syn/tmx/el-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>el</th>
</tr><th>eo</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Esperanto-English ()" href="download.php?f=Wikisource/v1syn/tmx/eo-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>eo</th>
</tr><th>es</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Spanish-English ()" href="download.php?f=Wikisource/v1syn/tmx/es-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>es</th>
</tr><th>et</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Estonian-Finnish ()" href="download.php?f=Wikisource/v1syn/tmx/et-fi.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>et</th>
</tr><th>eu</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Basque-English ()" href="download.php?f=Wikisource/v1syn/tmx/eu-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>eu</th>
</tr><th>fa</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Persian-English ()" href="download.php?f=Wikisource/v1syn/tmx/fa-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>fa</th>
</tr><th>fi</th>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Finnish-German ()" href="download.php?f=Wikisource/v1syn/tmx/fi-de.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Finnish-English ()" href="download.php?f=Wikisource/v1syn/tmx/fi-en.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Finnish-Estonian ()" href="download.php?f=Wikisource/v1syn/tmx/fi-et.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Finnish-Russian ()" href="download.php?f=Wikisource/v1syn/tmx/fi-ru.tmx.gz">0</a></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Finnish-Swedish ()" href="download.php?f=Wikisource/v1syn/tmx/fi-sv.tmx.gz">0</a></td>
<td></td>
<th>fi</th>
</tr><th>fo</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Faroese-English ()" href="download.php?f=Wikisource/v1syn/tmx/fo-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>fo</th>
</tr><th>fr</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="French-English ()" href="download.php?f=Wikisource/v1syn/tmx/fr-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>fr</th>
</tr><th>gl</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Galician-English ()" href="download.php?f=Wikisource/v1syn/tmx/gl-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>gl</th>
</tr><th>gu</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Gujarati-English ()" href="download.php?f=Wikisource/v1syn/tmx/gu-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>gu</th>
</tr><th>hr</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Croatian-English ()" href="download.php?f=Wikisource/v1syn/tmx/hr-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>hr</th>
</tr><tr><th></th>
<th>cs</th>
<th>da</th>
<th>de</th>
<th>en</th>
<th>et</th>
<th>fi</th>
<th>hu</th>
<th>pl</th>
<th>ro</th>
<th>ru</th>
<th>sk</th>
<th>sv</th>
<th>uk</th>
<th></th></tr>
<th>ht</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Haitian-English ()" href="download.php?f=Wikisource/v1syn/tmx/ht-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ht</th>
</tr><th>hu</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Hungarian-English ()" href="download.php?f=Wikisource/v1syn/tmx/hu-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Hungarian-Ukrainian ()" href="download.php?f=Wikisource/v1syn/tmx/hu-uk.tmx.gz">0</a></td>
<th>hu</th>
</tr><th>hy</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Armenian-English ()" href="download.php?f=Wikisource/v1syn/tmx/hy-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>hy</th>
</tr><th>id</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Indonesian-English ()" href="download.php?f=Wikisource/v1syn/tmx/id-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>id</th>
</tr><th>it</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Italian-English ()" href="download.php?f=Wikisource/v1syn/tmx/it-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>it</th>
</tr><th>kn</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Kannada-English ()" href="download.php?f=Wikisource/v1syn/tmx/kn-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>kn</th>
</tr><th>ko</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Korean-English ()" href="download.php?f=Wikisource/v1syn/tmx/ko-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ko</th>
</tr><th>lt</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Lithuanian-English ()" href="download.php?f=Wikisource/v1syn/tmx/lt-en.tmx.gz">0</a></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Lithuanian-Finnish ()" href="download.php?f=Wikisource/v1syn/tmx/lt-fi.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>lt</th>
</tr><th>mk</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Macedonian-English ()" href="download.php?f=Wikisource/v1syn/tmx/mk-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>mk</th>
</tr><th>ml</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Malayalam-English ()" href="download.php?f=Wikisource/v1syn/tmx/ml-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ml</th>
</tr><th>mr</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Marathi-English ()" href="download.php?f=Wikisource/v1syn/tmx/mr-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>mr</th>
</tr><th>nb</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="BokmÃ¥l, Norwegian-English ()" href="download.php?f=Wikisource/v1syn/tmx/nb-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>nb</th>
</tr><th>nl</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Dutch-English ()" href="download.php?f=Wikisource/v1syn/tmx/nl-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>nl</th>
</tr><th>no</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Norwegian-English ()" href="download.php?f=Wikisource/v1syn/tmx/no-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>no</th>
</tr><th>or</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Oriya-English ()" href="download.php?f=Wikisource/v1syn/tmx/or-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>or</th>
</tr><th>pa</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Panjabi-English ()" href="download.php?f=Wikisource/v1syn/tmx/pa-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>pa</th>
</tr><th>pl</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Polish-English ()" href="download.php?f=Wikisource/v1syn/tmx/pl-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Polish-Ukrainian ()" href="download.php?f=Wikisource/v1syn/tmx/pl-uk.tmx.gz">0</a></td>
<th>pl</th>
</tr><th>pms</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="pms-English ()" href="download.php?f=Wikisource/v1syn/tmx/pms-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>pms</th>
</tr><th>pt</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Portuguese-English ()" href="download.php?f=Wikisource/v1syn/tmx/pt-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>pt</th>
</tr><th>ro</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Romanian-English ()" href="download.php?f=Wikisource/v1syn/tmx/ro-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Romanian-Ukrainian ()" href="download.php?f=Wikisource/v1syn/tmx/ro-uk.tmx.gz">0</a></td>
<th>ro</th>
</tr><th>ru</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Russian-English ()" href="download.php?f=Wikisource/v1syn/tmx/ru-en.tmx.gz">0</a></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Russian-Finnish ()" href="download.php?f=Wikisource/v1syn/tmx/ru-fi.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ru</th>
</tr><th>sa</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Sanskrit-English ()" href="download.php?f=Wikisource/v1syn/tmx/sa-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>sa</th>
</tr><th>sah</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Yakut-English ()" href="download.php?f=Wikisource/v1syn/tmx/sah-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>sah</th>
</tr><th>sk</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Slovak-Ukrainian ()" href="download.php?f=Wikisource/v1syn/tmx/sk-uk.tmx.gz">0</a></td>
<th>sk</th>
</tr><th>sl</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Slovenian-English ()" href="download.php?f=Wikisource/v1syn/tmx/sl-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>sl</th>
</tr><th>sr_Cyrl</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Serbian-English ()" href="download.php?f=Wikisource/v1syn/tmx/sr_Cyrl-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>sr_Cyrl</th>
</tr><tr><th></th>
<th>cs</th>
<th>da</th>
<th>de</th>
<th>en</th>
<th>et</th>
<th>fi</th>
<th>hu</th>
<th>pl</th>
<th>ro</th>
<th>ru</th>
<th>sk</th>
<th>sv</th>
<th>uk</th>
<th></th></tr>
<th>sv</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Swedish-English ()" href="download.php?f=Wikisource/v1syn/tmx/sv-en.tmx.gz">0</a></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Swedish-Finnish ()" href="download.php?f=Wikisource/v1syn/tmx/sv-fi.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>sv</th>
</tr><th>ta</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Tamil-English ()" href="download.php?f=Wikisource/v1syn/tmx/ta-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ta</th>
</tr><th>te</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Telugu-English ()" href="download.php?f=Wikisource/v1syn/tmx/te-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>te</th>
</tr><th>th</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Thai-English ()" href="download.php?f=Wikisource/v1syn/tmx/th-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>th</th>
</tr><th>tr</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Turkish-English ()" href="download.php?f=Wikisource/v1syn/tmx/tr-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>tr</th>
</tr><th>uk</th>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Ukrainian-Czech ()" href="download.php?f=Wikisource/v1syn/tmx/uk-cs.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Ukrainian-Danish ()" href="download.php?f=Wikisource/v1syn/tmx/uk-da.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Ukrainian-German ()" href="download.php?f=Wikisource/v1syn/tmx/uk-de.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Ukrainian-English ()" href="download.php?f=Wikisource/v1syn/tmx/uk-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Ukrainian-Hungarian ()" href="download.php?f=Wikisource/v1syn/tmx/uk-hu.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Ukrainian-Polish ()" href="download.php?f=Wikisource/v1syn/tmx/uk-pl.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Ukrainian-Romanian ()" href="download.php?f=Wikisource/v1syn/tmx/uk-ro.tmx.gz">0</a></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Ukrainian-Slovak ()" href="download.php?f=Wikisource/v1syn/tmx/uk-sk.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Ukrainian-Swedish ()" href="download.php?f=Wikisource/v1syn/tmx/uk-sv.tmx.gz">0</a></td>
<td></td>
<th>uk</th>
</tr><th>vec</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="vec-English ()" href="download.php?f=Wikisource/v1syn/tmx/vec-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>vec</th>
</tr><th>vi</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Vietnamese-English ()" href="download.php?f=Wikisource/v1syn/tmx/vi-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>vi</th>
</tr><th>yi</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Yiddish-English ()" href="download.php?f=Wikisource/v1syn/tmx/yi-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>yi</th>
</tr><th>zh_Hans</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Chinese-English ()" href="download.php?f=Wikisource/v1syn/tmx/zh_Hans-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>zh_Hans</th>
</tr><th>zh_Hant</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Chinese-English ()" href="download.php?f=Wikisource/v1syn/tmx/zh_Hant-en.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>zh_Hant</th>
</tr><tr><th></th>
<th>cs</th>
<th>da</th>
<th>de</th>
<th>en</th>
<th>et</th>
<th>fi</th>
<th>hu</th>
<th>pl</th>
<th>ro</th>
<th>ru</th>
<th>sk</th>
<th>sv</th>
<th>uk</th>
<th></th></tr>
</table>
</div></p></div><hr><h3>Disclaimer</h3> <ul> <li>We do not own any of the text from which the data has been extracted.</li> <li>We only offer files that we believe we are free to redistribute. If any doubt occurs about the legality of any of our file downloads we will take them off right away after contacting us.</li> </ul> <h3>Notice and take down policy</h3> Notice: Should you consider that our data contains material that is owned by you and should therefore not be reproduced here, please: <ul> <li>Clearly identify yourself, with detailed contact data such as an address, telephone number or email address at which you can be contacted.</li> <li>Clearly identify the copyrighted work claimed to be infringed.</li> <li>Clearly identify the material that is claimed to be infringing and information reasonably sufficient to allow us to locate the material.</li> <li>And contact the OPUS project at the following email address: opus-project at helsinki.fi.</li> </ul> Take down: We will comply to legitimate requests by removing the affected sources from the next release of the corpus.<div class="footer"></div>
</body>
</html>