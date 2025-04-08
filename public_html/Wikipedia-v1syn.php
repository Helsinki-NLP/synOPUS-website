<?php include("count.php"); ?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	 "http://www.w3.org/TR/html4/loose.dtd">
<html><head><title>Wikipedia</title>
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
</script><h1>Wikipedia v1syn</h1><a href="https://github.com/Helsinki-NLP/Tatoeba-Challenge/blob/master/data/Backtranslations.md">Automatically translated data sets</a> that can be used for data augmentation Translations have been done with models trained on the Tatoeba MT challenge data. We include translations of Wikipedia, WikiSource, WikiBooks, WikiNews and WikiQuote (if available for the source language we translate from). Translations are done on shuffled, de-duplicated data sets and they come in blocks of at most one million sentences per file. The original datasets are taken from <a href="https://dumps.wikimedia.org/other/cirrussearch/">cirrussearch wiki dumps</a>. The original back-translations have been checked with the <a href="https://pypi.org/project/heliport/">heliport language identification tool</a> and mismatched sentence pairs are excluded from this distribution.<p>62 languages, 80 bitexts</br>
total number of files: 448</br>
total number of tokens: 7.5G</br>
total number of sentences: 447.7M</br></p>
Please, acknowledge the Wikimedia Foundation for the data and cite the following paper if you use data from this distribution: <pre> @inproceedings{tiedemann-2020-ttc,<br/> title = "The {T}atoeba {T}ranslation {C}hallenge -- {R}ealistic Data Sets for Low Resource and Multilingual {MT}",<br/> author = {Tiedemann, J{"o}rg},<br/> booktitle = "Proceedings of the Fifth Conference on Machine Translation (Volume 1: Research Papers)", year = "2020",<br/> publisher = "Association for Computational Linguistics",<br/> url = {https://arxiv.org/abs/2010.06354}<br/> } </pre><h3>Release history:</h3><p><ul><li><a href="Wikipedia-v1syn.php">Wikipedia v1syn</a></li></ul></p><h3>Download</h3><p>Below you can download data files for all language pairs in different formats and with different kind of annotation (if available). You can click on the various links as explained below.</p><p><b>License:</b> <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC-BY-SA 4.0</a><br/></p><ul><li><a onclick="toggleSection('samples')">Corpus sample files (click to show)</a></li><li><a onclick="toggleSection('download-xml')">Download corpus in their native XML format (click to show)</a></li>
<li><a onclick="toggleSection('download-moses')">Download corpus in plain text format (click to show)</a></li>
</ul><div id='samples' style='display: none;'>
<p>Links to sample files from monolingual corpus files (language-ID links) and bitexts (click on 'view')</p><p><div class="sample"><table border="0" cellpadding="0">
<tr><th></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/af_sample.html">af</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/ar_sample.html">ar</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/az_sample.html">az</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/bg_sample.html">bg</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/bn_sample.html">bn</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/br_sample.html">br</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/bs_sample.html">bs</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/ca_sample.html">ca</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/ceb_sample.html">ceb</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/cs_sample.html">cs</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/cy_sample.html">cy</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/da_sample.html">da</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/de_sample.html">de</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/el_sample.html">el</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/en_sample.html">en</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/eo_sample.html">eo</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/et_sample.html">et</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/eu_sample.html">eu</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/fi_sample.html">fi</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/fr_sample.html">fr</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/fy_sample.html">fy</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/ga_sample.html">ga</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/gl_sample.html">gl</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/he_sample.html">he</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/hr_sample.html">hr</a></th>
<th></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/hu_sample.html">hu</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/hy_sample.html">hy</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/ia_sample.html">ia</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/id_sample.html">id</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/ilo_sample.html">ilo</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/it_sample.html">it</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/lb_sample.html">lb</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/lt_sample.html">lt</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/lv_sample.html">lv</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/mk_sample.html">mk</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/ml_sample.html">ml</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/ms_sample.html">ms</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/mt_sample.html">mt</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/nb_sample.html">nb</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/nds_sample.html">nds</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/nn_sample.html">nn</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/pl_sample.html">pl</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/pt_sample.html">pt</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/ro_sample.html">ro</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/ru_sample.html">ru</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/sk_sample.html">sk</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/sq_sample.html">sq</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/sr_Cyrl_sample.html">sr_Cyrl</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/sr_Latn_sample.html">sr_Latn</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/sv_sample.html">sv</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/sw_sample.html">sw</a></th>
<th></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/ta_sample.html">ta</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/th_sample.html">th</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/tl_sample.html">tl</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/tr_sample.html">tr</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/uk_sample.html">uk</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/ur_sample.html">ur</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/uz_sample.html">uz</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/war_sample.html">war</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/zh_sample.html">zh</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/zh_Hans_sample.html">zh_Hans</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/zh_Hant_sample.html">zh_Hant</a></th>
<th></th></tr>
<tr><th><a rel="nofollow" href="Wikipedia/v1syn/bs_sample.html">bs</a></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Bosnian-English (sample file)" href="Wikipedia/v1syn/bs-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>bs</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>bs</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wikipedia/v1syn/bs_sample.html">bs</a></th></tr>
<tr><th><a rel="nofollow" href="Wikipedia/v1syn/ceb_sample.html">ceb</a></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Cebuano-English (sample file)" href="Wikipedia/v1syn/ceb-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ceb</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ceb</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wikipedia/v1syn/ceb_sample.html">ceb</a></th></tr>
<tr><th><a rel="nofollow" href="Wikipedia/v1syn/cs_sample.html">cs</a></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>cs</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>cs</th>
<td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Czech-Ukrainian (sample file)" href="Wikipedia/v1syn/cs-uk_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wikipedia/v1syn/cs_sample.html">cs</a></th></tr>
<tr><th><a rel="nofollow" href="Wikipedia/v1syn/en_sample.html">en</a></th>
<td><a rel="nofollow" title="English-Afrikaans (sample file)" href="Wikipedia/v1syn/en-af_sample.html">view</a></td><td><a rel="nofollow" title="English-Arabic (sample file)" href="Wikipedia/v1syn/en-ar_sample.html">view</a></td><td><a rel="nofollow" title="English-Azerbaijani (sample file)" href="Wikipedia/v1syn/en-az_sample.html">view</a></td><td><a rel="nofollow" title="English-Bulgarian (sample file)" href="Wikipedia/v1syn/en-bg_sample.html">view</a></td><td><a rel="nofollow" title="English-Bengali (sample file)" href="Wikipedia/v1syn/en-bn_sample.html">view</a></td><td><a rel="nofollow" title="English-Breton (sample file)" href="Wikipedia/v1syn/en-br_sample.html">view</a></td><td><a rel="nofollow" title="English-Bosnian (sample file)" href="Wikipedia/v1syn/en-bs_sample.html">view</a></td><td><a rel="nofollow" title="English-Catalan (sample file)" href="Wikipedia/v1syn/en-ca_sample.html">view</a></td><td><a rel="nofollow" title="English-Cebuano (sample file)" href="Wikipedia/v1syn/en-ceb_sample.html">view</a></td><td><a rel="nofollow" title="English-Czech (sample file)" href="Wikipedia/v1syn/en-cs_sample.html">view</a></td><td><a rel="nofollow" title="English-Welsh (sample file)" href="Wikipedia/v1syn/en-cy_sample.html">view</a></td><td><a rel="nofollow" title="English-Danish (sample file)" href="Wikipedia/v1syn/en-da_sample.html">view</a></td><td><a rel="nofollow" title="English-German (sample file)" href="Wikipedia/v1syn/en-de_sample.html">view</a></td><td><a rel="nofollow" title="English-Greek (sample file)" href="Wikipedia/v1syn/en-el_sample.html">view</a></td><td></td><td><a rel="nofollow" title="English-Esperanto (sample file)" href="Wikipedia/v1syn/en-eo_sample.html">view</a></td><td><a rel="nofollow" title="English-Estonian (sample file)" href="Wikipedia/v1syn/en-et_sample.html">view</a></td><td><a rel="nofollow" title="English-Basque (sample file)" href="Wikipedia/v1syn/en-eu_sample.html">view</a></td><td><a rel="nofollow" title="English-Finnish (sample file)" href="Wikipedia/v1syn/en-fi_sample.html">view</a></td><td><a rel="nofollow" title="English-French (sample file)" href="Wikipedia/v1syn/en-fr_sample.html">view</a></td><td><a rel="nofollow" title="English-Western Frisian (sample file)" href="Wikipedia/v1syn/en-fy_sample.html">view</a></td><td><a rel="nofollow" title="English-Irish (sample file)" href="Wikipedia/v1syn/en-ga_sample.html">view</a></td><td><a rel="nofollow" title="English-Galician (sample file)" href="Wikipedia/v1syn/en-gl_sample.html">view</a></td><td><a rel="nofollow" title="English-Hebrew (sample file)" href="Wikipedia/v1syn/en-he_sample.html">view</a></td><td><a rel="nofollow" title="English-Croatian (sample file)" href="Wikipedia/v1syn/en-hr_sample.html">view</a></td><th>en</th>
<td><a rel="nofollow" title="English-Hungarian (sample file)" href="Wikipedia/v1syn/en-hu_sample.html">view</a></td><td><a rel="nofollow" title="English-Armenian (sample file)" href="Wikipedia/v1syn/en-hy_sample.html">view</a></td><td><a rel="nofollow" title="English-Interlingua (International Auxiliary Language Association) (sample file)" href="Wikipedia/v1syn/en-ia_sample.html">view</a></td><td><a rel="nofollow" title="English-Indonesian (sample file)" href="Wikipedia/v1syn/en-id_sample.html">view</a></td><td><a rel="nofollow" title="English-Iloko (sample file)" href="Wikipedia/v1syn/en-ilo_sample.html">view</a></td><td><a rel="nofollow" title="English-Italian (sample file)" href="Wikipedia/v1syn/en-it_sample.html">view</a></td><td><a rel="nofollow" title="English-Luxembourgish (sample file)" href="Wikipedia/v1syn/en-lb_sample.html">view</a></td><td><a rel="nofollow" title="English-Lithuanian (sample file)" href="Wikipedia/v1syn/en-lt_sample.html">view</a></td><td><a rel="nofollow" title="English-Latvian (sample file)" href="Wikipedia/v1syn/en-lv_sample.html">view</a></td><td><a rel="nofollow" title="English-Macedonian (sample file)" href="Wikipedia/v1syn/en-mk_sample.html">view</a></td><td><a rel="nofollow" title="English-Malayalam (sample file)" href="Wikipedia/v1syn/en-ml_sample.html">view</a></td><td><a rel="nofollow" title="English-Malay (sample file)" href="Wikipedia/v1syn/en-ms_sample.html">view</a></td><td><a rel="nofollow" title="English-Maltese (sample file)" href="Wikipedia/v1syn/en-mt_sample.html">view</a></td><td><a rel="nofollow" title="English-BokmÃ¥l, Norwegian (sample file)" href="Wikipedia/v1syn/en-nb_sample.html">view</a></td><td><a rel="nofollow" title="English-Low German (sample file)" href="Wikipedia/v1syn/en-nds_sample.html">view</a></td><td><a rel="nofollow" title="English-Norwegian Nynorsk (sample file)" href="Wikipedia/v1syn/en-nn_sample.html">view</a></td><td><a rel="nofollow" title="English-Polish (sample file)" href="Wikipedia/v1syn/en-pl_sample.html">view</a></td><td><a rel="nofollow" title="English-Portuguese (sample file)" href="Wikipedia/v1syn/en-pt_sample.html">view</a></td><td></td><td><a rel="nofollow" title="English-Russian (sample file)" href="Wikipedia/v1syn/en-ru_sample.html">view</a></td><td></td><td><a rel="nofollow" title="English-Albanian (sample file)" href="Wikipedia/v1syn/en-sq_sample.html">view</a></td><td><a rel="nofollow" title="English-Serbian (sample file)" href="Wikipedia/v1syn/en-sr_Cyrl_sample.html">view</a></td><td><a rel="nofollow" title="English-Serbian (sample file)" href="Wikipedia/v1syn/en-sr_Latn_sample.html">view</a></td><td><a rel="nofollow" title="English-Swedish (sample file)" href="Wikipedia/v1syn/en-sv_sample.html">view</a></td><td><a rel="nofollow" title="English-Swahili (sample file)" href="Wikipedia/v1syn/en-sw_sample.html">view</a></td><th>en</th>
<td><a rel="nofollow" title="English-Tamil (sample file)" href="Wikipedia/v1syn/en-ta_sample.html">view</a></td><td><a rel="nofollow" title="English-Thai (sample file)" href="Wikipedia/v1syn/en-th_sample.html">view</a></td><td><a rel="nofollow" title="English-Tagalog (sample file)" href="Wikipedia/v1syn/en-tl_sample.html">view</a></td><td><a rel="nofollow" title="English-Turkish (sample file)" href="Wikipedia/v1syn/en-tr_sample.html">view</a></td><td><a rel="nofollow" title="English-Ukrainian (sample file)" href="Wikipedia/v1syn/en-uk_sample.html">view</a></td><td><a rel="nofollow" title="English-Urdu (sample file)" href="Wikipedia/v1syn/en-ur_sample.html">view</a></td><td><a rel="nofollow" title="English-Uzbek (sample file)" href="Wikipedia/v1syn/en-uz_sample.html">view</a></td><td><a rel="nofollow" title="English-Waray (sample file)" href="Wikipedia/v1syn/en-war_sample.html">view</a></td><td><a rel="nofollow" title="English-Chinese (sample file)" href="Wikipedia/v1syn/en-zh_sample.html">view</a></td><td><a rel="nofollow" title="English-Chinese (sample file)" href="Wikipedia/v1syn/en-zh_Hans_sample.html">view</a></td><td><a rel="nofollow" title="English-Chinese (sample file)" href="Wikipedia/v1syn/en-zh_Hant_sample.html">view</a></td><th><a rel="nofollow" href="Wikipedia/v1syn/en_sample.html">en</a></th></tr>
<tr><th><a rel="nofollow" href="Wikipedia/v1syn/hr_sample.html">hr</a></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Croatian-English (sample file)" href="Wikipedia/v1syn/hr-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>hr</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>hr</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wikipedia/v1syn/hr_sample.html">hr</a></th></tr>
<tr><th><a rel="nofollow" href="Wikipedia/v1syn/hu_sample.html">hu</a></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>hu</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>hu</th>
<td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Hungarian-Ukrainian (sample file)" href="Wikipedia/v1syn/hu-uk_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wikipedia/v1syn/hu_sample.html">hu</a></th></tr>
<tr><th><a rel="nofollow" href="Wikipedia/v1syn/id_sample.html">id</a></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Indonesian-English (sample file)" href="Wikipedia/v1syn/id-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>id</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>id</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wikipedia/v1syn/id_sample.html">id</a></th></tr>
<tr><th><a rel="nofollow" href="Wikipedia/v1syn/nb_sample.html">nb</a></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-English (sample file)" href="Wikipedia/v1syn/nb-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>nb</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>nb</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wikipedia/v1syn/nb_sample.html">nb</a></th></tr>
<tr><th><a rel="nofollow" href="Wikipedia/v1syn/pl_sample.html">pl</a></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>pl</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>pl</th>
<td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Polish-Ukrainian (sample file)" href="Wikipedia/v1syn/pl-uk_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wikipedia/v1syn/pl_sample.html">pl</a></th></tr>
<tr><th><a rel="nofollow" href="Wikipedia/v1syn/ro_sample.html">ro</a></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ro</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ro</th>
<td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Romanian-Ukrainian (sample file)" href="Wikipedia/v1syn/ro-uk_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wikipedia/v1syn/ro_sample.html">ro</a></th></tr>
<tr><th><a rel="nofollow" href="Wikipedia/v1syn/sk_sample.html">sk</a></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>sk</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>sk</th>
<td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Slovak-Ukrainian (sample file)" href="Wikipedia/v1syn/sk-uk_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wikipedia/v1syn/sk_sample.html">sk</a></th></tr>
<tr><th><a rel="nofollow" href="Wikipedia/v1syn/sr_Cyrl_sample.html">sr_Cyrl</a></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Serbian-English (sample file)" href="Wikipedia/v1syn/sr_Cyrl-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>sr_Cyrl</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>sr_Cyrl</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wikipedia/v1syn/sr_Cyrl_sample.html">sr_Cyrl</a></th></tr>
<tr><th><a rel="nofollow" href="Wikipedia/v1syn/uk_sample.html">uk</a></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Ukrainian-Czech (sample file)" href="Wikipedia/v1syn/uk-cs_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Ukrainian-Danish (sample file)" href="Wikipedia/v1syn/uk-da_sample.html">view</a></td><td><a rel="nofollow" title="Ukrainian-German (sample file)" href="Wikipedia/v1syn/uk-de_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>uk</th>
<td><a rel="nofollow" title="Ukrainian-Hungarian (sample file)" href="Wikipedia/v1syn/uk-hu_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Ukrainian-Polish (sample file)" href="Wikipedia/v1syn/uk-pl_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Ukrainian-Romanian (sample file)" href="Wikipedia/v1syn/uk-ro_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Ukrainian-Slovak (sample file)" href="Wikipedia/v1syn/uk-sk_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Ukrainian-Swedish (sample file)" href="Wikipedia/v1syn/uk-sv_sample.html">view</a></td><td></td><th>uk</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wikipedia/v1syn/uk_sample.html">uk</a></th></tr>
<tr><th><a rel="nofollow" href="Wikipedia/v1syn/zh_Hans_sample.html">zh_Hans</a></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Chinese-English (sample file)" href="Wikipedia/v1syn/zh_Hans-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>zh_Hans</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>zh_Hans</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wikipedia/v1syn/zh_Hans_sample.html">zh_Hans</a></th></tr>
<tr><th><a rel="nofollow" href="Wikipedia/v1syn/zh_Hant_sample.html">zh_Hant</a></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Chinese-English (sample file)" href="Wikipedia/v1syn/zh_Hant-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>zh_Hant</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>zh_Hant</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="Wikipedia/v1syn/zh_Hant_sample.html">zh_Hant</a></th></tr>
<tr><th></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/af_sample.html">af</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/ar_sample.html">ar</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/az_sample.html">az</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/bg_sample.html">bg</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/bn_sample.html">bn</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/br_sample.html">br</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/bs_sample.html">bs</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/ca_sample.html">ca</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/ceb_sample.html">ceb</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/cs_sample.html">cs</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/cy_sample.html">cy</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/da_sample.html">da</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/de_sample.html">de</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/el_sample.html">el</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/en_sample.html">en</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/eo_sample.html">eo</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/et_sample.html">et</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/eu_sample.html">eu</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/fi_sample.html">fi</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/fr_sample.html">fr</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/fy_sample.html">fy</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/ga_sample.html">ga</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/gl_sample.html">gl</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/he_sample.html">he</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/hr_sample.html">hr</a></th>
<th></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/hu_sample.html">hu</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/hy_sample.html">hy</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/ia_sample.html">ia</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/id_sample.html">id</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/ilo_sample.html">ilo</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/it_sample.html">it</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/lb_sample.html">lb</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/lt_sample.html">lt</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/lv_sample.html">lv</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/mk_sample.html">mk</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/ml_sample.html">ml</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/ms_sample.html">ms</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/mt_sample.html">mt</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/nb_sample.html">nb</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/nds_sample.html">nds</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/nn_sample.html">nn</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/pl_sample.html">pl</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/pt_sample.html">pt</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/ro_sample.html">ro</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/ru_sample.html">ru</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/sk_sample.html">sk</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/sq_sample.html">sq</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/sr_Cyrl_sample.html">sr_Cyrl</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/sr_Latn_sample.html">sr_Latn</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/sv_sample.html">sv</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/sw_sample.html">sw</a></th>
<th></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/ta_sample.html">ta</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/th_sample.html">th</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/tl_sample.html">tl</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/tr_sample.html">tr</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/uk_sample.html">uk</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/ur_sample.html">ur</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/uz_sample.html">uz</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/war_sample.html">war</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/zh_sample.html">zh</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/zh_Hans_sample.html">zh_Hans</a></th>
<th><a rel="nofollow" href="Wikipedia/v1syn/zh_Hant_sample.html">zh_Hant</a></th>
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
<th><a rel="nofollow" title="af.zip: untokenized XML documents (4 files, 3.0M sentences, 61.7M tokens)" href="download.php?f=Wikipedia/v1syn/raw/af.zip">af</a></th>
<th><a rel="nofollow" title="ar.zip: untokenized XML documents (4 files, 3.5M sentences, 57.2M tokens)" href="download.php?f=Wikipedia/v1syn/raw/ar.zip">ar</a></th>
<th><a rel="nofollow" title="az.zip: untokenized XML documents (4 files, 19.3k sentences, 0.2M tokens)" href="download.php?f=Wikipedia/v1syn/raw/az.zip">az</a></th>
<th><a rel="nofollow" title="bg.zip: untokenized XML documents (4 files, 3.5M sentences, 62.0M tokens)" href="download.php?f=Wikipedia/v1syn/raw/bg.zip">bg</a></th>
<th><a rel="nofollow" title="bn.zip: untokenized XML documents (4 files, 3.6M sentences, 54.3M tokens)" href="download.php?f=Wikipedia/v1syn/raw/bn.zip">bn</a></th>
<th><a rel="nofollow" title="br.zip: untokenized XML documents (4 files, 3.1M sentences, 65.5M tokens)" href="download.php?f=Wikipedia/v1syn/raw/br.zip">br</a></th>
<th><a rel="nofollow" title="bs.zip: untokenized XML documents (6 files, 3.8M sentences, 67.5M tokens)" href="download.php?f=Wikipedia/v1syn/raw/bs.zip">bs</a></th>
<th><a rel="nofollow" title="ca.zip: untokenized XML documents (4 files, 3.1M sentences, 67.6M tokens)" href="download.php?f=Wikipedia/v1syn/raw/ca.zip">ca</a></th>
<th><a rel="nofollow" title="ceb.zip: untokenized XML documents (21 files, 18.3M sentences, 308.6M tokens)" href="download.php?f=Wikipedia/v1syn/raw/ceb.zip">ceb</a></th>
<th><a rel="nofollow" title="cs.zip: untokenized XML documents (24 files, 23.7M sentences, 370.6M tokens)" href="download.php?f=Wikipedia/v1syn/raw/cs.zip">cs</a></th>
<th><a rel="nofollow" title="cy.zip: untokenized XML documents (4 files, 3.1M sentences, 61.2M tokens)" href="download.php?f=Wikipedia/v1syn/raw/cy.zip">cy</a></th>
<th><a rel="nofollow" title="da.zip: untokenized XML documents (15 files, 15.7M sentences, 281.5M tokens)" href="download.php?f=Wikipedia/v1syn/raw/da.zip">da</a></th>
<th><a rel="nofollow" title="de.zip: untokenized XML documents (15 files, 15.6M sentences, 287.4M tokens)" href="download.php?f=Wikipedia/v1syn/raw/de.zip">de</a></th>
<th><a rel="nofollow" title="el.zip: untokenized XML documents (4 files, 3.1M sentences, 62.2M tokens)" href="download.php?f=Wikipedia/v1syn/raw/el.zip">el</a></th>
<th><a rel="nofollow" title="en.zip: untokenized XML documents (21 files, 61.9M sentences, 1.1G tokens)" href="download.php?f=Wikipedia/v1syn/raw/en.zip">en</a></th>
<th><a rel="nofollow" title="eo.zip: untokenized XML documents (4 files, 3.0M sentences, 58.4M tokens)" href="download.php?f=Wikipedia/v1syn/raw/eo.zip">eo</a></th>
<th><a rel="nofollow" title="et.zip: untokenized XML documents (4 files, 2.9M sentences, 43.3M tokens)" href="download.php?f=Wikipedia/v1syn/raw/et.zip">et</a></th>
<th><a rel="nofollow" title="eu.zip: untokenized XML documents (4 files, 3.0M sentences, 47.1M tokens)" href="download.php?f=Wikipedia/v1syn/raw/eu.zip">eu</a></th>
<th><a rel="nofollow" title="fi.zip: untokenized XML documents (4 files, 3.0M sentences, 43.0M tokens)" href="download.php?f=Wikipedia/v1syn/raw/fi.zip">fi</a></th>
<th><a rel="nofollow" title="fr.zip: untokenized XML documents (4 files, 3.2M sentences, 69.5M tokens)" href="download.php?f=Wikipedia/v1syn/raw/fr.zip">fr</a></th>
<th><a rel="nofollow" title="fy.zip: untokenized XML documents (4 files, 3.1M sentences, 61.8M tokens)" href="download.php?f=Wikipedia/v1syn/raw/fy.zip">fy</a></th>
<th><a rel="nofollow" title="ga.zip: untokenized XML documents (4 files, 3.4M sentences, 68.4M tokens)" href="download.php?f=Wikipedia/v1syn/raw/ga.zip">ga</a></th>
<th><a rel="nofollow" title="gl.zip: untokenized XML documents (3 files, 2.5M sentences, 49.6M tokens)" href="download.php?f=Wikipedia/v1syn/raw/gl.zip">gl</a></th>
<th><a rel="nofollow" title="he.zip: untokenized XML documents (4 files, 3.5M sentences, 51.1M tokens)" href="download.php?f=Wikipedia/v1syn/raw/he.zip">he</a></th>
<th><a rel="nofollow" title="hr.zip: untokenized XML documents (7 files, 5.3M sentences, 94.8M tokens)" href="download.php?f=Wikipedia/v1syn/raw/hr.zip">hr</a></th>
<th></th>
<th><a rel="nofollow" title="hu.zip: untokenized XML documents (16 files, 17.0M sentences, 262.2M tokens)" href="download.php?f=Wikipedia/v1syn/raw/hu.zip">hu</a></th>
<th><a rel="nofollow" title="hy.zip: untokenized XML documents (4 files, 3.3M sentences, 51.5M tokens)" href="download.php?f=Wikipedia/v1syn/raw/hy.zip">hy</a></th>
<th><a rel="nofollow" title="ia.zip: untokenized XML documents (3 files, 36.3k sentences, 0.5M tokens)" href="download.php?f=Wikipedia/v1syn/raw/ia.zip">ia</a></th>
<th><a rel="nofollow" title="id.zip: untokenized XML documents (10 files, 7.0M sentences, 125.9M tokens)" href="download.php?f=Wikipedia/v1syn/raw/id.zip">id</a></th>
<th><a rel="nofollow" title="ilo.zip: untokenized XML documents (4 files, 3.2M sentences, 73.3M tokens)" href="download.php?f=Wikipedia/v1syn/raw/ilo.zip">ilo</a></th>
<th><a rel="nofollow" title="it.zip: untokenized XML documents (4 files, 3.0M sentences, 62.9M tokens)" href="download.php?f=Wikipedia/v1syn/raw/it.zip">it</a></th>
<th><a rel="nofollow" title="lb.zip: untokenized XML documents (4 files, 2.9M sentences, 57.2M tokens)" href="download.php?f=Wikipedia/v1syn/raw/lb.zip">lb</a></th>
<th><a rel="nofollow" title="lt.zip: untokenized XML documents (4 files, 3.1M sentences, 50.3M tokens)" href="download.php?f=Wikipedia/v1syn/raw/lt.zip">lt</a></th>
<th><a rel="nofollow" title="lv.zip: untokenized XML documents (3 files, 2.2M sentences, 36.5M tokens)" href="download.php?f=Wikipedia/v1syn/raw/lv.zip">lv</a></th>
<th><a rel="nofollow" title="mk.zip: untokenized XML documents (4 files, 3.2M sentences, 61.1M tokens)" href="download.php?f=Wikipedia/v1syn/raw/mk.zip">mk</a></th>
<th><a rel="nofollow" title="ml.zip: untokenized XML documents (4 files, 3.7M sentences, 36.5M tokens)" href="download.php?f=Wikipedia/v1syn/raw/ml.zip">ml</a></th>
<th><a rel="nofollow" title="ms.zip: untokenized XML documents (4 files, 4.8M sentences, 89.9M tokens)" href="download.php?f=Wikipedia/v1syn/raw/ms.zip">ms</a></th>
<th><a rel="nofollow" title="mt.zip: untokenized XML documents (4 files, 3.2M sentences, 55.2M tokens)" href="download.php?f=Wikipedia/v1syn/raw/mt.zip">mt</a></th>
<th><a rel="nofollow" title="nb.zip: untokenized XML documents (10 files, 7.7M sentences, 134.7M tokens)" href="download.php?f=Wikipedia/v1syn/raw/nb.zip">nb</a></th>
<th><a rel="nofollow" title="nds.zip: untokenized XML documents (4 files, 0.2M sentences, 3.4M tokens)" href="download.php?f=Wikipedia/v1syn/raw/nds.zip">nds</a></th>
<th><a rel="nofollow" title="nn.zip: untokenized XML documents (4 files, 2.7M sentences, 53.6M tokens)" href="download.php?f=Wikipedia/v1syn/raw/nn.zip">nn</a></th>
<th><a rel="nofollow" title="pl.zip: untokenized XML documents (25 files, 25.4M sentences, 396.1M tokens)" href="download.php?f=Wikipedia/v1syn/raw/pl.zip">pl</a></th>
<th><a rel="nofollow" title="pt.zip: untokenized XML documents (4 files, 3.1M sentences, 63.0M tokens)" href="download.php?f=Wikipedia/v1syn/raw/pt.zip">pt</a></th>
<th><a rel="nofollow" title="ro.zip: untokenized XML documents (19 files, 16.8M sentences, 323.8M tokens)" href="download.php?f=Wikipedia/v1syn/raw/ro.zip">ro</a></th>
<th><a rel="nofollow" title="ru.zip: untokenized XML documents (3 files, 2.2M sentences, 39.5M tokens)" href="download.php?f=Wikipedia/v1syn/raw/ru.zip">ru</a></th>
<th><a rel="nofollow" title="sk.zip: untokenized XML documents (18 files, 15.4M sentences, 247.0M tokens)" href="download.php?f=Wikipedia/v1syn/raw/sk.zip">sk</a></th>
<th><a rel="nofollow" title="sq.zip: untokenized XML documents (3 files, 2.3M sentences, 49.6M tokens)" href="download.php?f=Wikipedia/v1syn/raw/sq.zip">sq</a></th>
<th><a rel="nofollow" title="sr_Cyrl.zip: untokenized XML documents (10 files, 7.0M sentences, 117.9M tokens)" href="download.php?f=Wikipedia/v1syn/raw/sr_Cyrl.zip">sr_Cyrl</a></th>
<th><a rel="nofollow" title="sr_Latn.zip: untokenized XML documents (4 files, 2.7M sentences, 51.7M tokens)" href="download.php?f=Wikipedia/v1syn/raw/sr_Latn.zip">sr_Latn</a></th>
<th><a rel="nofollow" title="sv.zip: untokenized XML documents (15 files, 16.8M sentences, 281.5M tokens)" href="download.php?f=Wikipedia/v1syn/raw/sv.zip">sv</a></th>
<th><a rel="nofollow" title="sw.zip: untokenized XML documents (4 files, 3.3M sentences, 65.6M tokens)" href="download.php?f=Wikipedia/v1syn/raw/sw.zip">sw</a></th>
<th></th>
<th><a rel="nofollow" title="ta.zip: untokenized XML documents (4 files, 3.5M sentences, 38.2M tokens)" href="download.php?f=Wikipedia/v1syn/raw/ta.zip">ta</a></th>
<th><a rel="nofollow" title="th.zip: untokenized XML documents (4 files, 3.3M sentences, 47.1M tokens)" href="download.php?f=Wikipedia/v1syn/raw/th.zip">th</a></th>
<th><a rel="nofollow" title="tl.zip: untokenized XML documents (4 files, 3.1M sentences, 72.2M tokens)" href="download.php?f=Wikipedia/v1syn/raw/tl.zip">tl</a></th>
<th><a rel="nofollow" title="tr.zip: untokenized XML documents (3 files, 2.3M sentences, 36.0M tokens)" href="download.php?f=Wikipedia/v1syn/raw/tr.zip">tr</a></th>
<th><a rel="nofollow" title="uk.zip: untokenized XML documents (29 files, 50.8M sentences, 789.7M tokens)" href="download.php?f=Wikipedia/v1syn/raw/uk.zip">uk</a></th>
<th><a rel="nofollow" title="ur.zip: untokenized XML documents (4 files, 3.0M sentences, 71.9M tokens)" href="download.php?f=Wikipedia/v1syn/raw/ur.zip">ur</a></th>
<th><a rel="nofollow" title="uz.zip: untokenized XML documents (4 files, 2.8M sentences, 35.6M tokens)" href="download.php?f=Wikipedia/v1syn/raw/uz.zip">uz</a></th>
<th><a rel="nofollow" title="war.zip: untokenized XML documents (4 files, 3.1M sentences, 76.7M tokens)" href="download.php?f=Wikipedia/v1syn/raw/war.zip">war</a></th>
<th><a rel="nofollow" title="zh.zip: untokenized XML documents (4 files, 3.2M sentences, 7.4M tokens)" href="download.php?f=Wikipedia/v1syn/raw/zh.zip">zh</a></th>
<th><a rel="nofollow" title="zh_Hans.zip: untokenized XML documents (12 files, 9.0M sentences, 15.2M tokens)" href="download.php?f=Wikipedia/v1syn/raw/zh_Hans.zip">zh_Hans</a></th>
<th><a rel="nofollow" title="zh_Hant.zip: untokenized XML documents (5 files, 3.2M sentences, 7.6M tokens)" href="download.php?f=Wikipedia/v1syn/raw/zh_Hant.zip">zh_Hant</a></th>
<th></th></tr>
<th><a rel="nofollow" title="bs.zip: untokenized XML documents (6 files, 3.8M sentences, 67.5M tokens)" href="download.php?f=Wikipedia/v1syn/raw/bs.zip">bs</a></th>
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
<td></td>
<td></td>
<td bgcolor='#deffc6'><a rel="nofollow" title="Bosnian-English (2 aligned documents 1.1M links 34.3M tokens )" href="download.php?f=Wikipedia/v1syn/xml/bs-en.xml.gz">1.1M</a></td>
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
<th>bs</th>
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
<td></td>
<td></td>
<th>bs</th>
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
<th>bs</th>
</tr><th><a rel="nofollow" title="ceb.zip: untokenized XML documents (21 files, 18.3M sentences, 308.6M tokens)" href="download.php?f=Wikipedia/v1syn/raw/ceb.zip">ceb</a></th>
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
<td></td>
<td></td>
<td bgcolor='#bfffbf'><a rel="nofollow" title="Cebuano-English (17 aligned documents 15.3M links 463.8M tokens )" href="download.php?f=Wikipedia/v1syn/xml/ceb-en.xml.gz">15.3M</a></td>
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
<th>ceb</th>
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
<td></td>
<td></td>
<th>ceb</th>
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
<th>ceb</th>
</tr><th><a rel="nofollow" title="cs.zip: untokenized XML documents (24 files, 23.7M sentences, 370.6M tokens)" href="download.php?f=Wikipedia/v1syn/raw/cs.zip">cs</a></th>
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
<td></td>
<th>cs</th>
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
<td></td>
<td></td>
<th>cs</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#c8ffc8'><a rel="nofollow" title="Czech-Ukrainian (9 aligned documents 7.4M links 225.5M tokens )" href="download.php?f=Wikipedia/v1syn/xml/cs-uk.xml.gz">7.4M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>cs</th>
</tr><th><a rel="nofollow" title="en.zip: untokenized XML documents (21 files, 61.9M sentences, 1.1G tokens)" href="download.php?f=Wikipedia/v1syn/raw/en.zip">en</a></th>
<td bgcolor='#d4ffcb'><a rel="nofollow" title="English-Afrikaans (4 aligned documents 3.0M links 122.0M tokens )" href="download.php?f=Wikipedia/v1syn/xml/en-af.xml.gz">3.0M</a></td>
<td bgcolor='#d2ffcd'><a rel="nofollow" title="English-Arabic (4 aligned documents 3.5M links 121.9M tokens )" href="download.php?f=Wikipedia/v1syn/xml/en-ar.xml.gz">3.5M</a></td>
<td bgcolor='#ffe5e2'><a rel="nofollow" title="English-Azerbaijani (4 aligned documents 19.4k links 0.5M tokens )" href="download.php?f=Wikipedia/v1syn/xml/en-az.xml.gz">19.4k</a></td>
<td bgcolor='#d2ffcd'><a rel="nofollow" title="English-Bulgarian (4 aligned documents 3.5M links 125.8M tokens )" href="download.php?f=Wikipedia/v1syn/xml/en-bg.xml.gz">3.5M</a></td>
<td bgcolor='#d1ffcd'><a rel="nofollow" title="English-Bengali (4 aligned documents 3.6M links 119.7M tokens )" href="download.php?f=Wikipedia/v1syn/xml/en-bn.xml.gz">3.6M</a></td>
<td bgcolor='#d3ffcb'><a rel="nofollow" title="English-Breton (4 aligned documents 3.1M links 126.2M tokens )" href="download.php?f=Wikipedia/v1syn/xml/en-br.xml.gz">3.1M</a></td>
<td bgcolor='#d4ffcb'><a rel="nofollow" title="English-Bosnian (4 aligned documents 3.0M links 116.2M tokens )" href="download.php?f=Wikipedia/v1syn/xml/en-bs.xml.gz">3.0M</a></td>
<td bgcolor='#d3ffcb'><a rel="nofollow" title="English-Catalan (4 aligned documents 3.1M links 127.7M tokens )" href="download.php?f=Wikipedia/v1syn/xml/en-ca.xml.gz">3.1M</a></td>
<td bgcolor='#d4ffcb'><a rel="nofollow" title="English-Cebuano (4 aligned documents 3.0M links 133.0M tokens )" href="download.php?f=Wikipedia/v1syn/xml/en-ceb.xml.gz">3.0M</a></td>
<td bgcolor='#d3ffca'><a rel="nofollow" title="English-Czech (4 aligned documents 3.0M links 112.5M tokens )" href="download.php?f=Wikipedia/v1syn/xml/en-cs.xml.gz">3.0M</a></td>
<td bgcolor='#d3ffca'><a rel="nofollow" title="English-Welsh (4 aligned documents 3.1M links 121.6M tokens )" href="download.php?f=Wikipedia/v1syn/xml/en-cy.xml.gz">3.1M</a></td>
<td bgcolor='#d4ffcb'><a rel="nofollow" title="English-Danish (4 aligned documents 3.0M links 117.1M tokens )" href="download.php?f=Wikipedia/v1syn/xml/en-da.xml.gz">3.0M</a></td>
<td bgcolor='#d4ffc9'><a rel="nofollow" title="English-German (4 aligned documents 2.8M links 110.1M tokens )" href="download.php?f=Wikipedia/v1syn/xml/en-de.xml.gz">2.8M</a></td>
<td bgcolor='#d3ffcb'><a rel="nofollow" title="English-Greek (4 aligned documents 3.1M links 121.8M tokens )" href="download.php?f=Wikipedia/v1syn/xml/en-el.xml.gz">3.1M</a></td>
<td></td>
<td bgcolor='#d4ffcb'><a rel="nofollow" title="English-Esperanto (4 aligned documents 3.0M links 118.6M tokens )" href="download.php?f=Wikipedia/v1syn/xml/en-eo.xml.gz">3.0M</a></td>
<td bgcolor='#d4ffca'><a rel="nofollow" title="English-Estonian (4 aligned documents 2.9M links 101.5M tokens )" href="download.php?f=Wikipedia/v1syn/xml/en-et.xml.gz">2.9M</a></td>
<td bgcolor='#d4ffcb'><a rel="nofollow" title="English-Basque (4 aligned documents 3.0M links 106.4M tokens )" href="download.php?f=Wikipedia/v1syn/xml/en-eu.xml.gz">3.0M</a></td>
<td bgcolor='#d3ffca'><a rel="nofollow" title="English-Finnish (4 aligned documents 3.0M links 102.1M tokens )" href="download.php?f=Wikipedia/v1syn/xml/en-fi.xml.gz">3.0M</a></td>
<td bgcolor='#d3ffcc'><a rel="nofollow" title="English-French (4 aligned documents 3.2M links 132.2M tokens )" href="download.php?f=Wikipedia/v1syn/xml/en-fr.xml.gz">3.2M</a></td>
<td bgcolor='#d3ffcb'><a rel="nofollow" title="English-Western Frisian (4 aligned documents 3.1M links 123.1M tokens )" href="download.php?f=Wikipedia/v1syn/xml/en-fy.xml.gz">3.1M</a></td>
<td bgcolor='#d2ffcc'><a rel="nofollow" title="English-Irish (4 aligned documents 3.4M links 132.5M tokens )" href="download.php?f=Wikipedia/v1syn/xml/en-ga.xml.gz">3.4M</a></td>
<td bgcolor='#d6ffc9'><a rel="nofollow" title="English-Galician (3 aligned documents 2.5M links 97.3M tokens )" href="download.php?f=Wikipedia/v1syn/xml/en-gl.xml.gz">2.5M</a></td>
<td bgcolor='#d2ffcd'><a rel="nofollow" title="English-Hebrew (4 aligned documents 3.5M links 115.5M tokens )" href="download.php?f=Wikipedia/v1syn/xml/en-he.xml.gz">3.5M</a></td>
<td bgcolor='#d4ffca'><a rel="nofollow" title="English-Croatian (4 aligned documents 2.9M links 112.1M tokens )" href="download.php?f=Wikipedia/v1syn/xml/en-hr.xml.gz">2.9M</a></td>
<th>en</th>
<td bgcolor='#d4ffc9'><a rel="nofollow" title="English-Hungarian (4 aligned documents 2.8M links 105.3M tokens )" href="download.php?f=Wikipedia/v1syn/xml/en-hu.xml.gz">2.8M</a></td>
<td bgcolor='#d2ffcc'><a rel="nofollow" title="English-Armenian (4 aligned documents 3.3M links 112.5M tokens )" href="download.php?f=Wikipedia/v1syn/xml/en-hy.xml.gz">3.3M</a></td>
<td bgcolor='#fff1ec'><a rel="nofollow" title="English-Interlingua (International Auxiliary Language Association) (3 aligned documents 36.3k links 1.1M tokens )" href="download.php?f=Wikipedia/v1syn/xml/en-ia.xml.gz">36.3k</a></td>
<td bgcolor='#d5ffca'><a rel="nofollow" title="English-Indonesian (4 aligned documents 2.7M links 107.2M tokens )" href="download.php?f=Wikipedia/v1syn/xml/en-id.xml.gz">2.7M</a></td>
<td bgcolor='#d3ffcb'><a rel="nofollow" title="English-Iloko (4 aligned documents 3.2M links 135.3M tokens )" href="download.php?f=Wikipedia/v1syn/xml/en-ilo.xml.gz">3.2M</a></td>
<td bgcolor='#d3ffca'><a rel="nofollow" title="English-Italian (4 aligned documents 3.0M links 123.3M tokens )" href="download.php?f=Wikipedia/v1syn/xml/en-it.xml.gz">3.0M</a></td>
<td bgcolor='#d4ffca'><a rel="nofollow" title="English-Luxembourgish (4 aligned documents 2.9M links 116.0M tokens )" href="download.php?f=Wikipedia/v1syn/xml/en-lb.xml.gz">2.9M</a></td>
<td bgcolor='#d3ffcb'><a rel="nofollow" title="English-Lithuanian (4 aligned documents 3.1M links 110.9M tokens )" href="download.php?f=Wikipedia/v1syn/xml/en-lt.xml.gz">3.1M</a></td>
<td bgcolor='#d7ffc8'><a rel="nofollow" title="English-Latvian (3 aligned documents 2.2M links 80.2M tokens )" href="download.php?f=Wikipedia/v1syn/xml/en-lv.xml.gz">2.2M</a></td>
<td bgcolor='#d3ffcb'><a rel="nofollow" title="English-Macedonian (4 aligned documents 3.2M links 122.9M tokens )" href="download.php?f=Wikipedia/v1syn/xml/en-mk.xml.gz">3.2M</a></td>
<td bgcolor='#d1ffce'><a rel="nofollow" title="English-Malayalam (4 aligned documents 3.8M links 101.6M tokens )" href="download.php?f=Wikipedia/v1syn/xml/en-ml.xml.gz">3.8M</a></td>
<td bgcolor='#d5ffca'><a rel="nofollow" title="English-Malay (4 aligned documents 2.8M links 111.4M tokens )" href="download.php?f=Wikipedia/v1syn/xml/en-ms.xml.gz">2.8M</a></td>
<td bgcolor='#d3ffcc'><a rel="nofollow" title="English-Maltese (4 aligned documents 3.2M links 117.8M tokens )" href="download.php?f=Wikipedia/v1syn/xml/en-mt.xml.gz">3.2M</a></td>
<td bgcolor='#d4ffc9'><a rel="nofollow" title="English-BokmÃ¥l, Norwegian (4 aligned documents 2.8M links 110.3M tokens )" href="download.php?f=Wikipedia/v1syn/xml/en-nb.xml.gz">2.8M</a></td>
<td bgcolor='#f6ffd7'><a rel="nofollow" title="English-Low German (4 aligned documents 0.2M links 7.0M tokens )" href="download.php?f=Wikipedia/v1syn/xml/en-nds.xml.gz">0.2M</a></td>
<td bgcolor='#d5ffca'><a rel="nofollow" title="English-Norwegian Nynorsk (4 aligned documents 2.7M links 109.9M tokens )" href="download.php?f=Wikipedia/v1syn/xml/en-nn.xml.gz">2.7M</a></td>
<td bgcolor='#d3ffcb'><a rel="nofollow" title="English-Polish (4 aligned documents 3.2M links 115.9M tokens )" href="download.php?f=Wikipedia/v1syn/xml/en-pl.xml.gz">3.2M</a></td>
<td bgcolor='#d3ffca'><a rel="nofollow" title="English-Portuguese (4 aligned documents 3.1M links 123.5M tokens )" href="download.php?f=Wikipedia/v1syn/xml/en-pt.xml.gz">3.1M</a></td>
<td></td>
<td bgcolor='#d7ffc7'><a rel="nofollow" title="English-Russian (3 aligned documents 2.2M links 83.7M tokens )" href="download.php?f=Wikipedia/v1syn/xml/en-ru.xml.gz">2.2M</a></td>
<td></td>
<td bgcolor='#d7ffc8'><a rel="nofollow" title="English-Albanian (3 aligned documents 2.3M links 95.6M tokens )" href="download.php?f=Wikipedia/v1syn/xml/en-sq.xml.gz">2.3M</a></td>
<td bgcolor='#d3ffca'><a rel="nofollow" title="English-Serbian (4 aligned documents 3.0M links 117.9M tokens )" href="download.php?f=Wikipedia/v1syn/xml/en-sr_Cyrl.xml.gz">3.0M</a></td>
<td bgcolor='#d5ffca'><a rel="nofollow" title="English-Serbian (4 aligned documents 2.7M links 111.1M tokens )" href="download.php?f=Wikipedia/v1syn/xml/en-sr_Latn.xml.gz">2.7M</a></td>
<td bgcolor='#d3ffcc'><a rel="nofollow" title="English-Swedish (4 aligned documents 3.2M links 118.5M tokens )" href="download.php?f=Wikipedia/v1syn/xml/en-sv.xml.gz">3.2M</a></td>
<td bgcolor='#d3ffcc'><a rel="nofollow" title="English-Swahili (4 aligned documents 3.3M links 128.9M tokens )" href="download.php?f=Wikipedia/v1syn/xml/en-sw.xml.gz">3.3M</a></td>
<th>en</th>
<td bgcolor='#d2ffcd'><a rel="nofollow" title="English-Tamil (4 aligned documents 3.5M links 101.0M tokens )" href="download.php?f=Wikipedia/v1syn/xml/en-ta.xml.gz">3.5M</a></td>
<td bgcolor='#d2ffcb'><a rel="nofollow" title="English-Thai (4 aligned documents 3.3M links 106.7M tokens )" href="download.php?f=Wikipedia/v1syn/xml/en-th.xml.gz">3.3M</a></td>
<td bgcolor='#d3ffcb'><a rel="nofollow" title="English-Tagalog (4 aligned documents 3.1M links 133.6M tokens )" href="download.php?f=Wikipedia/v1syn/xml/en-tl.xml.gz">3.1M</a></td>
<td bgcolor='#d7ffc8'><a rel="nofollow" title="English-Turkish (3 aligned documents 2.3M links 81.3M tokens )" href="download.php?f=Wikipedia/v1syn/xml/en-tr.xml.gz">2.3M</a></td>
<td bgcolor='#d7ffc8'><a rel="nofollow" title="English-Ukrainian (3 aligned documents 2.2M links 82.5M tokens )" href="download.php?f=Wikipedia/v1syn/xml/en-uk.xml.gz">2.2M</a></td>
<td bgcolor='#d3ffca'><a rel="nofollow" title="English-Urdu (4 aligned documents 3.1M links 131.2M tokens )" href="download.php?f=Wikipedia/v1syn/xml/en-ur.xml.gz">3.1M</a></td>
<td bgcolor='#d4ffc9'><a rel="nofollow" title="English-Uzbek (4 aligned documents 2.8M links 94.4M tokens )" href="download.php?f=Wikipedia/v1syn/xml/en-uz.xml.gz">2.8M</a></td>
<td bgcolor='#d3ffcb'><a rel="nofollow" title="English-Waray (4 aligned documents 3.1M links 138.3M tokens )" href="download.php?f=Wikipedia/v1syn/xml/en-war.xml.gz">3.1M</a></td>
<td bgcolor='#d3ffcc'><a rel="nofollow" title="English-Chinese (4 aligned documents 3.2M links 65.6M tokens )" href="download.php?f=Wikipedia/v1syn/xml/en-zh.xml.gz">3.2M</a></td>
<td bgcolor='#d2ffcc'><a rel="nofollow" title="English-Chinese (4 aligned documents 3.3M links 70.3M tokens )" href="download.php?f=Wikipedia/v1syn/xml/en-zh_Hans.xml.gz">3.3M</a></td>
<td bgcolor='#d3ffcb'><a rel="nofollow" title="English-Chinese (4 aligned documents 3.2M links 68.1M tokens )" href="download.php?f=Wikipedia/v1syn/xml/en-zh_Hant.xml.gz">3.2M</a></td>
<th>en</th>
</tr><th><a rel="nofollow" title="hr.zip: untokenized XML documents (7 files, 5.3M sentences, 94.8M tokens)" href="download.php?f=Wikipedia/v1syn/raw/hr.zip">hr</a></th>
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
<td></td>
<td></td>
<td bgcolor='#d5ffc9'><a rel="nofollow" title="Croatian-English (3 aligned documents 2.7M links 95.0M tokens )" href="download.php?f=Wikipedia/v1syn/xml/hr-en.xml.gz">2.7M</a></td>
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
<th>hr</th>
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
<td></td>
<td></td>
<th>hr</th>
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
<th>hr</th>
</tr><th><a rel="nofollow" title="hu.zip: untokenized XML documents (16 files, 17.0M sentences, 262.2M tokens)" href="download.php?f=Wikipedia/v1syn/raw/hu.zip">hu</a></th>
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
<td></td>
<th>hu</th>
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
<td></td>
<td></td>
<th>hu</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#e0ffc6'><a rel="nofollow" title="Hungarian-Ukrainian (0.9M links 26.8M tokens )" href="download.php?f=Wikipedia/v1syn/xml/hu-uk.xml.gz">0.9M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>hu</th>
</tr><th><a rel="nofollow" title="id.zip: untokenized XML documents (10 files, 7.0M sentences, 125.9M tokens)" href="download.php?f=Wikipedia/v1syn/raw/id.zip">id</a></th>
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
<td></td>
<td></td>
<td bgcolor='#ceffce'><a rel="nofollow" title="Indonesian-English (6 aligned documents 4.9M links 165.2M tokens )" href="download.php?f=Wikipedia/v1syn/xml/id-en.xml.gz">4.9M</a></td>
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
<th>id</th>
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
<td></td>
<td></td>
<th>id</th>
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
<th>id</th>
</tr><th><a rel="nofollow" title="nb.zip: untokenized XML documents (10 files, 7.7M sentences, 134.7M tokens)" href="download.php?f=Wikipedia/v1syn/raw/nb.zip">nb</a></th>
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
<td></td>
<td></td>
<td bgcolor='#cbffcb'><a rel="nofollow" title="BokmÃ¥l, Norwegian-English (6 aligned documents 5.7M links 181.6M tokens )" href="download.php?f=Wikipedia/v1syn/xml/nb-en.xml.gz">5.7M</a></td>
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
<th>nb</th>
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
<td></td>
<td></td>
<th>nb</th>
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
<th>nb</th>
</tr><th><a rel="nofollow" title="pl.zip: untokenized XML documents (25 files, 25.4M sentences, 396.1M tokens)" href="download.php?f=Wikipedia/v1syn/raw/pl.zip">pl</a></th>
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
<td></td>
<th>pl</th>
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
<td></td>
<td></td>
<th>pl</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#c6ffc6'><a rel="nofollow" title="Polish-Ukrainian (10 aligned documents 8.4M links 257.5M tokens )" href="download.php?f=Wikipedia/v1syn/xml/pl-uk.xml.gz">8.4M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>pl</th>
</tr><th><a rel="nofollow" title="ro.zip: untokenized XML documents (19 files, 16.8M sentences, 323.8M tokens)" href="download.php?f=Wikipedia/v1syn/raw/ro.zip">ro</a></th>
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
<td></td>
<th>ro</th>
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
<td></td>
<td></td>
<th>ro</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#d3ffcb'><a rel="nofollow" title="Romanian-Ukrainian (4 aligned documents 3.1M links 121.3M tokens )" href="download.php?f=Wikipedia/v1syn/xml/ro-uk.xml.gz">3.1M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ro</th>
</tr><th><a rel="nofollow" title="sk.zip: untokenized XML documents (18 files, 15.4M sentences, 247.0M tokens)" href="download.php?f=Wikipedia/v1syn/raw/sk.zip">sk</a></th>
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
<td></td>
<th>sk</th>
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
<td></td>
<td></td>
<th>sk</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#d8ffc7'><a rel="nofollow" title="Slovak-Ukrainian (3 aligned documents 2.0M links 67.4M tokens )" href="download.php?f=Wikipedia/v1syn/xml/sk-uk.xml.gz">2.0M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>sk</th>
</tr><th><a rel="nofollow" title="sr_Cyrl.zip: untokenized XML documents (10 files, 7.0M sentences, 117.9M tokens)" href="download.php?f=Wikipedia/v1syn/raw/sr_Cyrl.zip">sr_Cyrl</a></th>
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
<td></td>
<td></td>
<td bgcolor='#cdffcd'><a rel="nofollow" title="Serbian-English (6 aligned documents 5.2M links 165.9M tokens )" href="download.php?f=Wikipedia/v1syn/xml/sr_Cyrl-en.xml.gz">5.2M</a></td>
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
<th>sr_Cyrl</th>
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
<td></td>
<td></td>
<th>sr_Cyrl</th>
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
<th>sr_Cyrl</th>
</tr><th><a rel="nofollow" title="uk.zip: untokenized XML documents (29 files, 50.8M sentences, 789.7M tokens)" href="download.php?f=Wikipedia/v1syn/raw/uk.zip">uk</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#bfffbf'><a rel="nofollow" title="Ukrainian-Czech (15 aligned documents 13.2M links 407.9M tokens )" href="download.php?f=Wikipedia/v1syn/xml/uk-cs.xml.gz">13.2M</a></td>
<td></td>
<td bgcolor='#c0ffc0'><a rel="nofollow" title="Ukrainian-Danish (15 aligned documents 12.8M links 428.5M tokens )" href="download.php?f=Wikipedia/v1syn/xml/uk-da.xml.gz">12.8M</a></td>
<td bgcolor='#c0ffc0'><a rel="nofollow" title="Ukrainian-German (15 aligned documents 12.8M links 436.6M tokens )" href="download.php?f=Wikipedia/v1syn/xml/uk-de.xml.gz">12.8M</a></td>
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
<th>uk</th>
<td bgcolor='#bfffbf'><a rel="nofollow" title="Ukrainian-Hungarian (15 aligned documents 13.3M links 409.1M tokens )" href="download.php?f=Wikipedia/v1syn/xml/uk-hu.xml.gz">13.3M</a></td>
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
<td></td>
<td></td>
<td></td>
<td bgcolor='#bfffbf'><a rel="nofollow" title="Ukrainian-Polish (15 aligned documents 13.9M links 422.8M tokens )" href="download.php?f=Wikipedia/v1syn/xml/uk-pl.xml.gz">13.9M</a></td>
<td></td>
<td bgcolor='#bfffbf'><a rel="nofollow" title="Ukrainian-Romanian (15 aligned documents 13.6M links 470.4M tokens )" href="download.php?f=Wikipedia/v1syn/xml/uk-ro.xml.gz">13.6M</a></td>
<td></td>
<td bgcolor='#bfffbf'><a rel="nofollow" title="Ukrainian-Slovak (15 aligned documents 13.3M links 424.1M tokens )" href="download.php?f=Wikipedia/v1syn/xml/uk-sk.xml.gz">13.3M</a></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#bfffbf'><a rel="nofollow" title="Ukrainian-Swedish (15 aligned documents 13.7M links 438.0M tokens )" href="download.php?f=Wikipedia/v1syn/xml/uk-sv.xml.gz">13.7M</a></td>
<td></td>
<th>uk</th>
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
<th>uk</th>
</tr><th><a rel="nofollow" title="zh_Hans.zip: untokenized XML documents (12 files, 9.0M sentences, 15.2M tokens)" href="download.php?f=Wikipedia/v1syn/raw/zh_Hans.zip">zh_Hans</a></th>
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
<td></td>
<td></td>
<td bgcolor='#caffca'><a rel="nofollow" title="Chinese-English (8 aligned documents 6.5M links 135.9M tokens )" href="download.php?f=Wikipedia/v1syn/xml/zh_Hans-en.xml.gz">6.5M</a></td>
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
<th>zh_Hans</th>
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
<td></td>
<td></td>
<th>zh_Hans</th>
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
<th>zh_Hans</th>
</tr><th><a rel="nofollow" title="zh_Hant.zip: untokenized XML documents (5 files, 3.2M sentences, 7.6M tokens)" href="download.php?f=Wikipedia/v1syn/raw/zh_Hant.zip">zh_Hant</a></th>
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
<td></td>
<td></td>
<td bgcolor='#fff9f0'><a rel="nofollow" title="Chinese-English (58.3k links 0.3M tokens )" href="download.php?f=Wikipedia/v1syn/xml/zh_Hant-en.xml.gz">58.3k</a></td>
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
<th>zh_Hant</th>
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
<td></td>
<td></td>
<th>zh_Hant</th>
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
<th>zh_Hant</th>
</tr><tr><th></th>
<th>af</th>
<th>ar</th>
<th>az</th>
<th>bg</th>
<th>bn</th>
<th>br</th>
<th>bs</th>
<th>ca</th>
<th>ceb</th>
<th>cs</th>
<th>cy</th>
<th>da</th>
<th>de</th>
<th>el</th>
<th>en</th>
<th>eo</th>
<th>et</th>
<th>eu</th>
<th>fi</th>
<th>fr</th>
<th>fy</th>
<th>ga</th>
<th>gl</th>
<th>he</th>
<th>hr</th>
<th></th>
<th>hu</th>
<th>hy</th>
<th>ia</th>
<th>id</th>
<th>ilo</th>
<th>it</th>
<th>lb</th>
<th>lt</th>
<th>lv</th>
<th>mk</th>
<th>ml</th>
<th>ms</th>
<th>mt</th>
<th>nb</th>
<th>nds</th>
<th>nn</th>
<th>pl</th>
<th>pt</th>
<th>ro</th>
<th>ru</th>
<th>sk</th>
<th>sq</th>
<th>sr_Cyrl</th>
<th>sr_Latn</th>
<th>sv</th>
<th>sw</th>
<th></th>
<th>ta</th>
<th>th</th>
<th>tl</th>
<th>tr</th>
<th>uk</th>
<th>ur</th>
<th>uz</th>
<th>war</th>
<th>zh</th>
<th>zh_Hans</th>
<th>zh_Hant</th>
<th></th></tr>
</table>
</div></p></div><div id='download-moses' style='display: none;'><p>Links to zip-files with aligned plain text files, one per language (Moses format).</p><p>
<div class="sample"><table border="0" cellpadding="0">
<tr><th></th>
<th>af</th>
<th>ar</th>
<th>az</th>
<th>bg</th>
<th>bn</th>
<th>br</th>
<th>bs</th>
<th>ca</th>
<th>ceb</th>
<th>cs</th>
<th>cy</th>
<th>da</th>
<th>de</th>
<th>el</th>
<th>en</th>
<th>eo</th>
<th>et</th>
<th>eu</th>
<th>fi</th>
<th>fr</th>
<th>fy</th>
<th>ga</th>
<th>gl</th>
<th>he</th>
<th>hr</th>
<th></th>
<th>hu</th>
<th>hy</th>
<th>ia</th>
<th>id</th>
<th>ilo</th>
<th>it</th>
<th>lb</th>
<th>lt</th>
<th>lv</th>
<th>mk</th>
<th>ml</th>
<th>ms</th>
<th>mt</th>
<th>nb</th>
<th>nds</th>
<th>nn</th>
<th>pl</th>
<th>pt</th>
<th>ro</th>
<th>ru</th>
<th>sk</th>
<th>sq</th>
<th>sr_Cyrl</th>
<th>sr_Latn</th>
<th>sv</th>
<th>sw</th>
<th></th>
<th>ta</th>
<th>th</th>
<th>tl</th>
<th>tr</th>
<th>uk</th>
<th>ur</th>
<th>uz</th>
<th>war</th>
<th>zh</th>
<th>zh_Hans</th>
<th>zh_Hant</th>
<th></th></tr>
<th>bs</th>
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
<td></td>
<td></td>
<td bgcolor='#deffc6'><a rel="nofollow" title="Bosnian-English (1.1M links 34.3M tokens )" href="download.php?f=Wikipedia/v1syn/moses/bs-en.txt.zip">1.1M</a></td>
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
<th>bs</th>
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
<td></td>
<td></td>
<th>bs</th>
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
<th>bs</th>
</tr><th>ceb</th>
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
<td></td>
<td></td>
<td bgcolor='#bfffbf'><a rel="nofollow" title="Cebuano-English (15.3M links 463.8M tokens )" href="download.php?f=Wikipedia/v1syn/moses/ceb-en.txt.zip">15.3M</a></td>
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
<th>ceb</th>
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
<td></td>
<td></td>
<th>ceb</th>
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
<th>ceb</th>
</tr><th>cs</th>
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
<td></td>
<th>cs</th>
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
<td></td>
<td></td>
<th>cs</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#c8ffc8'><a rel="nofollow" title="Czech-Ukrainian (7.4M links 225.5M tokens )" href="download.php?f=Wikipedia/v1syn/moses/cs-uk.txt.zip">7.4M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>cs</th>
</tr><th>en</th>
<td bgcolor='#d4ffcb'><a rel="nofollow" title="English-Afrikaans (3.0M links 122.0M tokens )" href="download.php?f=Wikipedia/v1syn/moses/en-af.txt.zip">3.0M</a></td>
<td bgcolor='#d2ffcd'><a rel="nofollow" title="English-Arabic (3.5M links 121.9M tokens )" href="download.php?f=Wikipedia/v1syn/moses/en-ar.txt.zip">3.5M</a></td>
<td bgcolor='#ffe5e2'><a rel="nofollow" title="English-Azerbaijani (19.4k links 0.5M tokens )" href="download.php?f=Wikipedia/v1syn/moses/en-az.txt.zip">19.4k</a></td>
<td bgcolor='#d2ffcd'><a rel="nofollow" title="English-Bulgarian (3.5M links 125.8M tokens )" href="download.php?f=Wikipedia/v1syn/moses/en-bg.txt.zip">3.5M</a></td>
<td bgcolor='#d1ffcd'><a rel="nofollow" title="English-Bengali (3.6M links 119.7M tokens )" href="download.php?f=Wikipedia/v1syn/moses/en-bn.txt.zip">3.6M</a></td>
<td bgcolor='#d3ffcb'><a rel="nofollow" title="English-Breton (3.1M links 126.2M tokens )" href="download.php?f=Wikipedia/v1syn/moses/en-br.txt.zip">3.1M</a></td>
<td bgcolor='#d4ffcb'><a rel="nofollow" title="English-Bosnian (3.0M links 116.2M tokens )" href="download.php?f=Wikipedia/v1syn/moses/en-bs.txt.zip">3.0M</a></td>
<td bgcolor='#d3ffcb'><a rel="nofollow" title="English-Catalan (3.1M links 127.7M tokens )" href="download.php?f=Wikipedia/v1syn/moses/en-ca.txt.zip">3.1M</a></td>
<td bgcolor='#d4ffcb'><a rel="nofollow" title="English-Cebuano (3.0M links 133.0M tokens )" href="download.php?f=Wikipedia/v1syn/moses/en-ceb.txt.zip">3.0M</a></td>
<td bgcolor='#d3ffca'><a rel="nofollow" title="English-Czech (3.0M links 112.5M tokens )" href="download.php?f=Wikipedia/v1syn/moses/en-cs.txt.zip">3.0M</a></td>
<td bgcolor='#d3ffca'><a rel="nofollow" title="English-Welsh (3.1M links 121.6M tokens )" href="download.php?f=Wikipedia/v1syn/moses/en-cy.txt.zip">3.1M</a></td>
<td bgcolor='#d4ffcb'><a rel="nofollow" title="English-Danish (3.0M links 117.1M tokens )" href="download.php?f=Wikipedia/v1syn/moses/en-da.txt.zip">3.0M</a></td>
<td bgcolor='#d4ffc9'><a rel="nofollow" title="English-German (2.8M links 110.1M tokens )" href="download.php?f=Wikipedia/v1syn/moses/en-de.txt.zip">2.8M</a></td>
<td bgcolor='#d3ffcb'><a rel="nofollow" title="English-Greek (3.1M links 121.8M tokens )" href="download.php?f=Wikipedia/v1syn/moses/en-el.txt.zip">3.1M</a></td>
<td></td>
<td bgcolor='#d4ffcb'><a rel="nofollow" title="English-Esperanto (3.0M links 118.6M tokens )" href="download.php?f=Wikipedia/v1syn/moses/en-eo.txt.zip">3.0M</a></td>
<td bgcolor='#d4ffca'><a rel="nofollow" title="English-Estonian (2.9M links 101.5M tokens )" href="download.php?f=Wikipedia/v1syn/moses/en-et.txt.zip">2.9M</a></td>
<td bgcolor='#d4ffcb'><a rel="nofollow" title="English-Basque (3.0M links 106.4M tokens )" href="download.php?f=Wikipedia/v1syn/moses/en-eu.txt.zip">3.0M</a></td>
<td bgcolor='#d3ffca'><a rel="nofollow" title="English-Finnish (3.0M links 102.1M tokens )" href="download.php?f=Wikipedia/v1syn/moses/en-fi.txt.zip">3.0M</a></td>
<td bgcolor='#d3ffcc'><a rel="nofollow" title="English-French (3.2M links 132.2M tokens )" href="download.php?f=Wikipedia/v1syn/moses/en-fr.txt.zip">3.2M</a></td>
<td bgcolor='#d3ffcb'><a rel="nofollow" title="English-Western Frisian (3.1M links 123.1M tokens )" href="download.php?f=Wikipedia/v1syn/moses/en-fy.txt.zip">3.1M</a></td>
<td bgcolor='#d2ffcc'><a rel="nofollow" title="English-Irish (3.4M links 132.5M tokens )" href="download.php?f=Wikipedia/v1syn/moses/en-ga.txt.zip">3.4M</a></td>
<td bgcolor='#d6ffc9'><a rel="nofollow" title="English-Galician (2.5M links 97.3M tokens )" href="download.php?f=Wikipedia/v1syn/moses/en-gl.txt.zip">2.5M</a></td>
<td bgcolor='#d2ffcd'><a rel="nofollow" title="English-Hebrew (3.5M links 115.5M tokens )" href="download.php?f=Wikipedia/v1syn/moses/en-he.txt.zip">3.5M</a></td>
<td bgcolor='#d4ffca'><a rel="nofollow" title="English-Croatian (2.9M links 112.1M tokens )" href="download.php?f=Wikipedia/v1syn/moses/en-hr.txt.zip">2.9M</a></td>
<th>en</th>
<td bgcolor='#d4ffc9'><a rel="nofollow" title="English-Hungarian (2.8M links 105.3M tokens )" href="download.php?f=Wikipedia/v1syn/moses/en-hu.txt.zip">2.8M</a></td>
<td bgcolor='#d2ffcc'><a rel="nofollow" title="English-Armenian (3.3M links 112.5M tokens )" href="download.php?f=Wikipedia/v1syn/moses/en-hy.txt.zip">3.3M</a></td>
<td bgcolor='#fff1ec'><a rel="nofollow" title="English-Interlingua (International Auxiliary Language Association) (36.3k links 1.1M tokens )" href="download.php?f=Wikipedia/v1syn/moses/en-ia.txt.zip">36.3k</a></td>
<td bgcolor='#d5ffca'><a rel="nofollow" title="English-Indonesian (2.7M links 107.2M tokens )" href="download.php?f=Wikipedia/v1syn/moses/en-id.txt.zip">2.7M</a></td>
<td bgcolor='#d3ffcb'><a rel="nofollow" title="English-Iloko (3.2M links 135.3M tokens )" href="download.php?f=Wikipedia/v1syn/moses/en-ilo.txt.zip">3.2M</a></td>
<td bgcolor='#d3ffca'><a rel="nofollow" title="English-Italian (3.0M links 123.3M tokens )" href="download.php?f=Wikipedia/v1syn/moses/en-it.txt.zip">3.0M</a></td>
<td bgcolor='#d4ffca'><a rel="nofollow" title="English-Luxembourgish (2.9M links 116.0M tokens )" href="download.php?f=Wikipedia/v1syn/moses/en-lb.txt.zip">2.9M</a></td>
<td bgcolor='#d3ffcb'><a rel="nofollow" title="English-Lithuanian (3.1M links 110.9M tokens )" href="download.php?f=Wikipedia/v1syn/moses/en-lt.txt.zip">3.1M</a></td>
<td bgcolor='#d7ffc8'><a rel="nofollow" title="English-Latvian (2.2M links 80.2M tokens )" href="download.php?f=Wikipedia/v1syn/moses/en-lv.txt.zip">2.2M</a></td>
<td bgcolor='#d3ffcb'><a rel="nofollow" title="English-Macedonian (3.2M links 122.9M tokens )" href="download.php?f=Wikipedia/v1syn/moses/en-mk.txt.zip">3.2M</a></td>
<td bgcolor='#d1ffce'><a rel="nofollow" title="English-Malayalam (3.8M links 101.6M tokens )" href="download.php?f=Wikipedia/v1syn/moses/en-ml.txt.zip">3.8M</a></td>
<td bgcolor='#d5ffca'><a rel="nofollow" title="English-Malay (2.8M links 111.4M tokens )" href="download.php?f=Wikipedia/v1syn/moses/en-ms.txt.zip">2.8M</a></td>
<td bgcolor='#d3ffcc'><a rel="nofollow" title="English-Maltese (3.2M links 117.8M tokens )" href="download.php?f=Wikipedia/v1syn/moses/en-mt.txt.zip">3.2M</a></td>
<td bgcolor='#d4ffc9'><a rel="nofollow" title="English-BokmÃ¥l, Norwegian (2.8M links 110.3M tokens )" href="download.php?f=Wikipedia/v1syn/moses/en-nb.txt.zip">2.8M</a></td>
<td bgcolor='#f6ffd7'><a rel="nofollow" title="English-Low German (0.2M links 7.0M tokens )" href="download.php?f=Wikipedia/v1syn/moses/en-nds.txt.zip">0.2M</a></td>
<td bgcolor='#d5ffca'><a rel="nofollow" title="English-Norwegian Nynorsk (2.7M links 109.9M tokens )" href="download.php?f=Wikipedia/v1syn/moses/en-nn.txt.zip">2.7M</a></td>
<td bgcolor='#d3ffcb'><a rel="nofollow" title="English-Polish (3.2M links 115.9M tokens )" href="download.php?f=Wikipedia/v1syn/moses/en-pl.txt.zip">3.2M</a></td>
<td bgcolor='#d3ffca'><a rel="nofollow" title="English-Portuguese (3.1M links 123.5M tokens )" href="download.php?f=Wikipedia/v1syn/moses/en-pt.txt.zip">3.1M</a></td>
<td></td>
<td bgcolor='#d7ffc7'><a rel="nofollow" title="English-Russian (2.2M links 83.7M tokens )" href="download.php?f=Wikipedia/v1syn/moses/en-ru.txt.zip">2.2M</a></td>
<td></td>
<td bgcolor='#d7ffc8'><a rel="nofollow" title="English-Albanian (2.3M links 95.6M tokens )" href="download.php?f=Wikipedia/v1syn/moses/en-sq.txt.zip">2.3M</a></td>
<td bgcolor='#d3ffca'><a rel="nofollow" title="English-Serbian (3.0M links 117.9M tokens )" href="download.php?f=Wikipedia/v1syn/moses/en-sr_Cyrl.txt.zip">3.0M</a></td>
<td bgcolor='#d5ffca'><a rel="nofollow" title="English-Serbian (2.7M links 111.1M tokens )" href="download.php?f=Wikipedia/v1syn/moses/en-sr_Latn.txt.zip">2.7M</a></td>
<td bgcolor='#d3ffcc'><a rel="nofollow" title="English-Swedish (3.2M links 118.5M tokens )" href="download.php?f=Wikipedia/v1syn/moses/en-sv.txt.zip">3.2M</a></td>
<td bgcolor='#d3ffcc'><a rel="nofollow" title="English-Swahili (3.3M links 128.9M tokens )" href="download.php?f=Wikipedia/v1syn/moses/en-sw.txt.zip">3.3M</a></td>
<th>en</th>
<td bgcolor='#d2ffcd'><a rel="nofollow" title="English-Tamil (3.5M links 101.0M tokens )" href="download.php?f=Wikipedia/v1syn/moses/en-ta.txt.zip">3.5M</a></td>
<td bgcolor='#d2ffcb'><a rel="nofollow" title="English-Thai (3.3M links 106.7M tokens )" href="download.php?f=Wikipedia/v1syn/moses/en-th.txt.zip">3.3M</a></td>
<td bgcolor='#d3ffcb'><a rel="nofollow" title="English-Tagalog (3.1M links 133.6M tokens )" href="download.php?f=Wikipedia/v1syn/moses/en-tl.txt.zip">3.1M</a></td>
<td bgcolor='#d7ffc8'><a rel="nofollow" title="English-Turkish (2.3M links 81.3M tokens )" href="download.php?f=Wikipedia/v1syn/moses/en-tr.txt.zip">2.3M</a></td>
<td bgcolor='#d7ffc8'><a rel="nofollow" title="English-Ukrainian (2.2M links 82.5M tokens )" href="download.php?f=Wikipedia/v1syn/moses/en-uk.txt.zip">2.2M</a></td>
<td bgcolor='#d3ffca'><a rel="nofollow" title="English-Urdu (3.1M links 131.2M tokens )" href="download.php?f=Wikipedia/v1syn/moses/en-ur.txt.zip">3.1M</a></td>
<td bgcolor='#d4ffc9'><a rel="nofollow" title="English-Uzbek (2.8M links 94.4M tokens )" href="download.php?f=Wikipedia/v1syn/moses/en-uz.txt.zip">2.8M</a></td>
<td bgcolor='#d3ffcb'><a rel="nofollow" title="English-Waray (3.1M links 138.3M tokens )" href="download.php?f=Wikipedia/v1syn/moses/en-war.txt.zip">3.1M</a></td>
<td bgcolor='#d3ffcc'><a rel="nofollow" title="English-Chinese (3.2M links 65.6M tokens )" href="download.php?f=Wikipedia/v1syn/moses/en-zh.txt.zip">3.2M</a></td>
<td bgcolor='#d2ffcc'><a rel="nofollow" title="English-Chinese (3.3M links 70.3M tokens )" href="download.php?f=Wikipedia/v1syn/moses/en-zh_Hans.txt.zip">3.3M</a></td>
<td bgcolor='#d3ffcb'><a rel="nofollow" title="English-Chinese (3.2M links 68.1M tokens )" href="download.php?f=Wikipedia/v1syn/moses/en-zh_Hant.txt.zip">3.2M</a></td>
<th>en</th>
</tr><th>hr</th>
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
<td></td>
<td></td>
<td bgcolor='#d5ffc9'><a rel="nofollow" title="Croatian-English (2.7M links 95.0M tokens )" href="download.php?f=Wikipedia/v1syn/moses/hr-en.txt.zip">2.7M</a></td>
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
<th>hr</th>
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
<td></td>
<td></td>
<th>hr</th>
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
<th>hr</th>
</tr><th>hu</th>
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
<td></td>
<th>hu</th>
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
<td></td>
<td></td>
<th>hu</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#e0ffc6'><a rel="nofollow" title="Hungarian-Ukrainian (0.9M links 26.8M tokens )" href="download.php?f=Wikipedia/v1syn/moses/hu-uk.txt.zip">0.9M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>hu</th>
</tr><th>id</th>
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
<td></td>
<td></td>
<td bgcolor='#ceffce'><a rel="nofollow" title="Indonesian-English (4.9M links 165.2M tokens )" href="download.php?f=Wikipedia/v1syn/moses/id-en.txt.zip">4.9M</a></td>
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
<th>id</th>
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
<td></td>
<td></td>
<th>id</th>
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
<th>id</th>
</tr><th>nb</th>
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
<td></td>
<td></td>
<td bgcolor='#cbffcb'><a rel="nofollow" title="BokmÃ¥l, Norwegian-English (5.7M links 181.6M tokens )" href="download.php?f=Wikipedia/v1syn/moses/nb-en.txt.zip">5.7M</a></td>
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
<th>nb</th>
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
<td></td>
<td></td>
<th>nb</th>
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
<th>nb</th>
</tr><th>pl</th>
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
<td></td>
<th>pl</th>
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
<td></td>
<td></td>
<th>pl</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#c6ffc6'><a rel="nofollow" title="Polish-Ukrainian (8.4M links 257.5M tokens )" href="download.php?f=Wikipedia/v1syn/moses/pl-uk.txt.zip">8.4M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>pl</th>
</tr><th>ro</th>
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
<td></td>
<th>ro</th>
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
<td></td>
<td></td>
<th>ro</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#d3ffcb'><a rel="nofollow" title="Romanian-Ukrainian (3.1M links 121.3M tokens )" href="download.php?f=Wikipedia/v1syn/moses/ro-uk.txt.zip">3.1M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ro</th>
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
<td></td>
<th>sk</th>
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
<td></td>
<td></td>
<th>sk</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#d8ffc7'><a rel="nofollow" title="Slovak-Ukrainian (2.0M links 67.4M tokens )" href="download.php?f=Wikipedia/v1syn/moses/sk-uk.txt.zip">2.0M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>sk</th>
</tr><th>sr_Cyrl</th>
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
<td></td>
<td></td>
<td bgcolor='#cdffcd'><a rel="nofollow" title="Serbian-English (5.2M links 165.9M tokens )" href="download.php?f=Wikipedia/v1syn/moses/sr_Cyrl-en.txt.zip">5.2M</a></td>
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
<th>sr_Cyrl</th>
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
<td></td>
<td></td>
<th>sr_Cyrl</th>
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
<th>sr_Cyrl</th>
</tr><th>uk</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#bfffbf'><a rel="nofollow" title="Ukrainian-Czech (13.2M links 407.9M tokens )" href="download.php?f=Wikipedia/v1syn/moses/uk-cs.txt.zip">13.2M</a></td>
<td></td>
<td bgcolor='#c0ffc0'><a rel="nofollow" title="Ukrainian-Danish (12.8M links 428.5M tokens )" href="download.php?f=Wikipedia/v1syn/moses/uk-da.txt.zip">12.8M</a></td>
<td bgcolor='#c0ffc0'><a rel="nofollow" title="Ukrainian-German (12.8M links 436.6M tokens )" href="download.php?f=Wikipedia/v1syn/moses/uk-de.txt.zip">12.8M</a></td>
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
<th>uk</th>
<td bgcolor='#bfffbf'><a rel="nofollow" title="Ukrainian-Hungarian (13.3M links 409.1M tokens )" href="download.php?f=Wikipedia/v1syn/moses/uk-hu.txt.zip">13.3M</a></td>
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
<td></td>
<td></td>
<td></td>
<td bgcolor='#bfffbf'><a rel="nofollow" title="Ukrainian-Polish (13.9M links 422.8M tokens )" href="download.php?f=Wikipedia/v1syn/moses/uk-pl.txt.zip">13.9M</a></td>
<td></td>
<td bgcolor='#bfffbf'><a rel="nofollow" title="Ukrainian-Romanian (13.6M links 470.4M tokens )" href="download.php?f=Wikipedia/v1syn/moses/uk-ro.txt.zip">13.6M</a></td>
<td></td>
<td bgcolor='#bfffbf'><a rel="nofollow" title="Ukrainian-Slovak (13.3M links 424.1M tokens )" href="download.php?f=Wikipedia/v1syn/moses/uk-sk.txt.zip">13.3M</a></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#bfffbf'><a rel="nofollow" title="Ukrainian-Swedish (13.7M links 438.0M tokens )" href="download.php?f=Wikipedia/v1syn/moses/uk-sv.txt.zip">13.7M</a></td>
<td></td>
<th>uk</th>
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
<th>uk</th>
</tr><th>zh_Hans</th>
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
<td></td>
<td></td>
<td bgcolor='#caffca'><a rel="nofollow" title="Chinese-English (6.5M links 135.9M tokens )" href="download.php?f=Wikipedia/v1syn/moses/zh_Hans-en.txt.zip">6.5M</a></td>
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
<th>zh_Hans</th>
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
<td></td>
<td></td>
<th>zh_Hans</th>
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
<th>zh_Hans</th>
</tr><th>zh_Hant</th>
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
<td></td>
<td></td>
<td bgcolor='#fff9f0'><a rel="nofollow" title="Chinese-English (58.3k links 0.3M tokens )" href="download.php?f=Wikipedia/v1syn/moses/zh_Hant-en.txt.zip">58.3k</a></td>
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
<th>zh_Hant</th>
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
<td></td>
<td></td>
<th>zh_Hant</th>
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
<th>zh_Hant</th>
</tr><tr><th></th>
<th>af</th>
<th>ar</th>
<th>az</th>
<th>bg</th>
<th>bn</th>
<th>br</th>
<th>bs</th>
<th>ca</th>
<th>ceb</th>
<th>cs</th>
<th>cy</th>
<th>da</th>
<th>de</th>
<th>el</th>
<th>en</th>
<th>eo</th>
<th>et</th>
<th>eu</th>
<th>fi</th>
<th>fr</th>
<th>fy</th>
<th>ga</th>
<th>gl</th>
<th>he</th>
<th>hr</th>
<th></th>
<th>hu</th>
<th>hy</th>
<th>ia</th>
<th>id</th>
<th>ilo</th>
<th>it</th>
<th>lb</th>
<th>lt</th>
<th>lv</th>
<th>mk</th>
<th>ml</th>
<th>ms</th>
<th>mt</th>
<th>nb</th>
<th>nds</th>
<th>nn</th>
<th>pl</th>
<th>pt</th>
<th>ro</th>
<th>ru</th>
<th>sk</th>
<th>sq</th>
<th>sr_Cyrl</th>
<th>sr_Latn</th>
<th>sv</th>
<th>sw</th>
<th></th>
<th>ta</th>
<th>th</th>
<th>tl</th>
<th>tr</th>
<th>uk</th>
<th>ur</th>
<th>uz</th>
<th>war</th>
<th>zh</th>
<th>zh_Hans</th>
<th>zh_Hant</th>
<th></th></tr>
</table>
</div></p></div><div id='download-tmx' style='display: none;'><p>Links to compressed TMX files, one per language pair.</p><p>
<div class="sample"><table border="0" cellpadding="0">
<tr><th></th>
<th>af</th>
<th>ar</th>
<th>az</th>
<th>bg</th>
<th>bn</th>
<th>br</th>
<th>bs</th>
<th>ca</th>
<th>ceb</th>
<th>cs</th>
<th>cy</th>
<th>da</th>
<th>de</th>
<th>el</th>
<th>en</th>
<th>eo</th>
<th>et</th>
<th>eu</th>
<th>fi</th>
<th>fr</th>
<th>fy</th>
<th>ga</th>
<th>gl</th>
<th>he</th>
<th>hr</th>
<th></th>
<th>hu</th>
<th>hy</th>
<th>ia</th>
<th>id</th>
<th>ilo</th>
<th>it</th>
<th>lb</th>
<th>lt</th>
<th>lv</th>
<th>mk</th>
<th>ml</th>
<th>ms</th>
<th>mt</th>
<th>nb</th>
<th>nds</th>
<th>nn</th>
<th>pl</th>
<th>pt</th>
<th>ro</th>
<th>ru</th>
<th>sk</th>
<th>sq</th>
<th>sr_Cyrl</th>
<th>sr_Latn</th>
<th>sv</th>
<th>sw</th>
<th></th>
<th>ta</th>
<th>th</th>
<th>tl</th>
<th>tr</th>
<th>uk</th>
<th>ur</th>
<th>uz</th>
<th>war</th>
<th>zh</th>
<th>zh_Hans</th>
<th>zh_Hant</th>
<th></th></tr>
<th>bs</th>
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
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Bosnian-English ()" href="download.php?f=Wikipedia/v1syn/tmx/bs-en.tmx.gz">0</a></td>
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
<th>bs</th>
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
<td></td>
<td></td>
<th>bs</th>
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
<th>bs</th>
</tr><th>ceb</th>
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
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Cebuano-English ()" href="download.php?f=Wikipedia/v1syn/tmx/ceb-en.tmx.gz">0</a></td>
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
<th>ceb</th>
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
<td></td>
<td></td>
<th>ceb</th>
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
<th>ceb</th>
</tr><th>cs</th>
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
<td></td>
<th>cs</th>
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
<td></td>
<td></td>
<th>cs</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Czech-Ukrainian ()" href="download.php?f=Wikipedia/v1syn/tmx/cs-uk.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>cs</th>
</tr><th>en</th>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Afrikaans ()" href="download.php?f=Wikipedia/v1syn/tmx/en-af.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Arabic ()" href="download.php?f=Wikipedia/v1syn/tmx/en-ar.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Azerbaijani ()" href="download.php?f=Wikipedia/v1syn/tmx/en-az.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Bulgarian ()" href="download.php?f=Wikipedia/v1syn/tmx/en-bg.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Bengali ()" href="download.php?f=Wikipedia/v1syn/tmx/en-bn.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Breton ()" href="download.php?f=Wikipedia/v1syn/tmx/en-br.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Bosnian ()" href="download.php?f=Wikipedia/v1syn/tmx/en-bs.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Catalan ()" href="download.php?f=Wikipedia/v1syn/tmx/en-ca.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Cebuano ()" href="download.php?f=Wikipedia/v1syn/tmx/en-ceb.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Czech ()" href="download.php?f=Wikipedia/v1syn/tmx/en-cs.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Welsh ()" href="download.php?f=Wikipedia/v1syn/tmx/en-cy.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Danish ()" href="download.php?f=Wikipedia/v1syn/tmx/en-da.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-German ()" href="download.php?f=Wikipedia/v1syn/tmx/en-de.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Greek ()" href="download.php?f=Wikipedia/v1syn/tmx/en-el.tmx.gz">0</a></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Esperanto ()" href="download.php?f=Wikipedia/v1syn/tmx/en-eo.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Estonian ()" href="download.php?f=Wikipedia/v1syn/tmx/en-et.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Basque ()" href="download.php?f=Wikipedia/v1syn/tmx/en-eu.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Finnish ()" href="download.php?f=Wikipedia/v1syn/tmx/en-fi.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-French ()" href="download.php?f=Wikipedia/v1syn/tmx/en-fr.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Western Frisian ()" href="download.php?f=Wikipedia/v1syn/tmx/en-fy.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Irish ()" href="download.php?f=Wikipedia/v1syn/tmx/en-ga.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Galician ()" href="download.php?f=Wikipedia/v1syn/tmx/en-gl.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Hebrew ()" href="download.php?f=Wikipedia/v1syn/tmx/en-he.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Croatian ()" href="download.php?f=Wikipedia/v1syn/tmx/en-hr.tmx.gz">0</a></td>
<th>en</th>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Hungarian ()" href="download.php?f=Wikipedia/v1syn/tmx/en-hu.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Armenian ()" href="download.php?f=Wikipedia/v1syn/tmx/en-hy.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Interlingua (International Auxiliary Language Association) ()" href="download.php?f=Wikipedia/v1syn/tmx/en-ia.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Indonesian ()" href="download.php?f=Wikipedia/v1syn/tmx/en-id.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Iloko ()" href="download.php?f=Wikipedia/v1syn/tmx/en-ilo.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Italian ()" href="download.php?f=Wikipedia/v1syn/tmx/en-it.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Luxembourgish ()" href="download.php?f=Wikipedia/v1syn/tmx/en-lb.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Lithuanian ()" href="download.php?f=Wikipedia/v1syn/tmx/en-lt.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Latvian ()" href="download.php?f=Wikipedia/v1syn/tmx/en-lv.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Macedonian ()" href="download.php?f=Wikipedia/v1syn/tmx/en-mk.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Malayalam ()" href="download.php?f=Wikipedia/v1syn/tmx/en-ml.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Malay ()" href="download.php?f=Wikipedia/v1syn/tmx/en-ms.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Maltese ()" href="download.php?f=Wikipedia/v1syn/tmx/en-mt.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-BokmÃ¥l, Norwegian ()" href="download.php?f=Wikipedia/v1syn/tmx/en-nb.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Low German ()" href="download.php?f=Wikipedia/v1syn/tmx/en-nds.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Norwegian Nynorsk ()" href="download.php?f=Wikipedia/v1syn/tmx/en-nn.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Polish ()" href="download.php?f=Wikipedia/v1syn/tmx/en-pl.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Portuguese ()" href="download.php?f=Wikipedia/v1syn/tmx/en-pt.tmx.gz">0</a></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Russian ()" href="download.php?f=Wikipedia/v1syn/tmx/en-ru.tmx.gz">0</a></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Albanian ()" href="download.php?f=Wikipedia/v1syn/tmx/en-sq.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Serbian ()" href="download.php?f=Wikipedia/v1syn/tmx/en-sr_Cyrl.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Serbian ()" href="download.php?f=Wikipedia/v1syn/tmx/en-sr_Latn.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Swedish ()" href="download.php?f=Wikipedia/v1syn/tmx/en-sv.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Swahili ()" href="download.php?f=Wikipedia/v1syn/tmx/en-sw.tmx.gz">0</a></td>
<th>en</th>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Tamil ()" href="download.php?f=Wikipedia/v1syn/tmx/en-ta.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Thai ()" href="download.php?f=Wikipedia/v1syn/tmx/en-th.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Tagalog ()" href="download.php?f=Wikipedia/v1syn/tmx/en-tl.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Turkish ()" href="download.php?f=Wikipedia/v1syn/tmx/en-tr.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Ukrainian ()" href="download.php?f=Wikipedia/v1syn/tmx/en-uk.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Urdu ()" href="download.php?f=Wikipedia/v1syn/tmx/en-ur.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Uzbek ()" href="download.php?f=Wikipedia/v1syn/tmx/en-uz.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Waray ()" href="download.php?f=Wikipedia/v1syn/tmx/en-war.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Chinese ()" href="download.php?f=Wikipedia/v1syn/tmx/en-zh.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Chinese ()" href="download.php?f=Wikipedia/v1syn/tmx/en-zh_Hans.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Chinese ()" href="download.php?f=Wikipedia/v1syn/tmx/en-zh_Hant.tmx.gz">0</a></td>
<th>en</th>
</tr><th>hr</th>
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
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Croatian-English ()" href="download.php?f=Wikipedia/v1syn/tmx/hr-en.tmx.gz">0</a></td>
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
<th>hr</th>
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
<td></td>
<td></td>
<th>hr</th>
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
<th>hr</th>
</tr><th>hu</th>
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
<td></td>
<th>hu</th>
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
<td></td>
<td></td>
<th>hu</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Hungarian-Ukrainian ()" href="download.php?f=Wikipedia/v1syn/tmx/hu-uk.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>hu</th>
</tr><th>id</th>
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
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Indonesian-English ()" href="download.php?f=Wikipedia/v1syn/tmx/id-en.tmx.gz">0</a></td>
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
<th>id</th>
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
<td></td>
<td></td>
<th>id</th>
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
<th>id</th>
</tr><th>nb</th>
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
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="BokmÃ¥l, Norwegian-English ()" href="download.php?f=Wikipedia/v1syn/tmx/nb-en.tmx.gz">0</a></td>
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
<th>nb</th>
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
<td></td>
<td></td>
<th>nb</th>
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
<th>nb</th>
</tr><th>pl</th>
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
<td></td>
<th>pl</th>
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
<td></td>
<td></td>
<th>pl</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Polish-Ukrainian ()" href="download.php?f=Wikipedia/v1syn/tmx/pl-uk.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>pl</th>
</tr><th>ro</th>
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
<td></td>
<th>ro</th>
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
<td></td>
<td></td>
<th>ro</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Romanian-Ukrainian ()" href="download.php?f=Wikipedia/v1syn/tmx/ro-uk.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ro</th>
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
<td></td>
<th>sk</th>
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
<td></td>
<td></td>
<th>sk</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Slovak-Ukrainian ()" href="download.php?f=Wikipedia/v1syn/tmx/sk-uk.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>sk</th>
</tr><th>sr_Cyrl</th>
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
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Serbian-English ()" href="download.php?f=Wikipedia/v1syn/tmx/sr_Cyrl-en.tmx.gz">0</a></td>
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
<th>sr_Cyrl</th>
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
<td></td>
<td></td>
<th>sr_Cyrl</th>
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
<th>sr_Cyrl</th>
</tr><th>uk</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Ukrainian-Czech ()" href="download.php?f=Wikipedia/v1syn/tmx/uk-cs.tmx.gz">0</a></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Ukrainian-Danish ()" href="download.php?f=Wikipedia/v1syn/tmx/uk-da.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Ukrainian-German ()" href="download.php?f=Wikipedia/v1syn/tmx/uk-de.tmx.gz">0</a></td>
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
<th>uk</th>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Ukrainian-Hungarian ()" href="download.php?f=Wikipedia/v1syn/tmx/uk-hu.tmx.gz">0</a></td>
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
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Ukrainian-Polish ()" href="download.php?f=Wikipedia/v1syn/tmx/uk-pl.tmx.gz">0</a></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Ukrainian-Romanian ()" href="download.php?f=Wikipedia/v1syn/tmx/uk-ro.tmx.gz">0</a></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Ukrainian-Slovak ()" href="download.php?f=Wikipedia/v1syn/tmx/uk-sk.tmx.gz">0</a></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Ukrainian-Swedish ()" href="download.php?f=Wikipedia/v1syn/tmx/uk-sv.tmx.gz">0</a></td>
<td></td>
<th>uk</th>
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
<th>uk</th>
</tr><th>zh_Hans</th>
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
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Chinese-English ()" href="download.php?f=Wikipedia/v1syn/tmx/zh_Hans-en.tmx.gz">0</a></td>
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
<th>zh_Hans</th>
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
<td></td>
<td></td>
<th>zh_Hans</th>
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
<th>zh_Hans</th>
</tr><th>zh_Hant</th>
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
<td></td>
<td></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="Chinese-English ()" href="download.php?f=Wikipedia/v1syn/tmx/zh_Hant-en.tmx.gz">0</a></td>
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
<th>zh_Hant</th>
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
<td></td>
<td></td>
<th>zh_Hant</th>
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
<th>zh_Hant</th>
</tr><tr><th></th>
<th>af</th>
<th>ar</th>
<th>az</th>
<th>bg</th>
<th>bn</th>
<th>br</th>
<th>bs</th>
<th>ca</th>
<th>ceb</th>
<th>cs</th>
<th>cy</th>
<th>da</th>
<th>de</th>
<th>el</th>
<th>en</th>
<th>eo</th>
<th>et</th>
<th>eu</th>
<th>fi</th>
<th>fr</th>
<th>fy</th>
<th>ga</th>
<th>gl</th>
<th>he</th>
<th>hr</th>
<th></th>
<th>hu</th>
<th>hy</th>
<th>ia</th>
<th>id</th>
<th>ilo</th>
<th>it</th>
<th>lb</th>
<th>lt</th>
<th>lv</th>
<th>mk</th>
<th>ml</th>
<th>ms</th>
<th>mt</th>
<th>nb</th>
<th>nds</th>
<th>nn</th>
<th>pl</th>
<th>pt</th>
<th>ro</th>
<th>ru</th>
<th>sk</th>
<th>sq</th>
<th>sr_Cyrl</th>
<th>sr_Latn</th>
<th>sv</th>
<th>sw</th>
<th></th>
<th>ta</th>
<th>th</th>
<th>tl</th>
<th>tr</th>
<th>uk</th>
<th>ur</th>
<th>uz</th>
<th>war</th>
<th>zh</th>
<th>zh_Hans</th>
<th>zh_Hant</th>
<th></th></tr>
</table>
</div></p></div><hr><h3>Disclaimer</h3> <ul> <li>We do not own any of the text from which the data has been extracted.</li> <li>We only offer files that we believe we are free to redistribute. If any doubt occurs about the legality of any of our file downloads we will take them off right away after contacting us.</li> </ul> <h3>Notice and take down policy</h3> Notice: Should you consider that our data contains material that is owned by you and should therefore not be reproduced here, please: <ul> <li>Clearly identify yourself, with detailed contact data such as an address, telephone number or email address at which you can be contacted.</li> <li>Clearly identify the copyrighted work claimed to be infringed.</li> <li>Clearly identify the material that is claimed to be infringing and information reasonably sufficient to allow us to locate the material.</li> <li>And contact the OPUS project at the following email address: opus-project at helsinki.fi.</li> </ul> Take down: We will comply to legitimate requests by removing the affected sources from the next release of the corpus.<div class="footer"></div>
</body>
</html>