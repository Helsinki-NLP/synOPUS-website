<?php include("count.php"); ?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	 "http://www.w3.org/TR/html4/loose.dtd">
<html><head><title>Europarl</title>
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
</script><h1>Europarl v8syn</h1>This is a collection of automatically translated documents from English Europarl v8 into other languages using GPT-4o. This release includes translations from English into Basque (eu), Scottish Gaelic (gd), Icelandic (is), Georgian (ka), Macedonian (mk), Somali (so) and Ukrainian (uk). The translated files are also linked to other official languages in the Europarl corpus v8 by pivoting the links through the English documents used as input. The translations of the languages listed above are produced by prompting <a href="https://openai.com/index/gpt-4o-system-card/">GPT-4o provided by OpenAI</a>. When downloading the data you confirm that you agree with the terms and conditions as defined by the <a href="https://openai.com/policies/usage-policies/">usage policies of OpenAI</a>.<p>28 languages, 154 bitexts</br>
total number of files: 245,964</br>
total number of tokens: 1.0G</br>
total number of sentences: 46.2M</br></p>
Please <a href="http://opus.lingfil.uu.se/LREC2012.txt">cite the following article</a> if you use the OPUS packages and downloads in your own work:<br/> J. Tiedemann, 2012, <a href="http://www.lrec-conf.org/proceedings/lrec2012/pdf/463_Paper.pdf"><i>Parallel Data, Tools and Interfaces in OPUS.</i></a> In Proceedings of the 8th International Conference on Language Resources and Evaluation (LREC 2012)<br/><h3>Download</h3><p>Below you can download data files for all language pairs in different formats and with different kind of annotation (if available). You can click on the various links as explained below.</p><p></p><ul><li><a onclick="toggleSection('samples')">Corpus sample files (click to show)</a></li><li><a onclick="toggleSection('download-xml')">Download corpus in their native XML format (click to show)</a></li>
<li><a onclick="toggleSection('download-moses')">Download corpus in plain text format (click to show)</a></li>
</ul><div id='samples' style='display: none;'>
<p>Links to sample files from monolingual corpus files (language-ID links) and bitexts (click on 'view')</p><p><div class="sample"><table border="0" cellpadding="0">
<tr><th></th>
<th><a rel="nofollow" href="Europarl/v8syn/eu_sample.html">eu</a></th>
<th><a rel="nofollow" href="Europarl/v8syn/fi_sample.html">fi</a></th>
<th><a rel="nofollow" href="Europarl/v8syn/fr_sample.html">fr</a></th>
<th><a rel="nofollow" href="Europarl/v8syn/gd_sample.html">gd</a></th>
<th><a rel="nofollow" href="Europarl/v8syn/hu_sample.html">hu</a></th>
<th><a rel="nofollow" href="Europarl/v8syn/is_sample.html">is</a></th>
<th><a rel="nofollow" href="Europarl/v8syn/it_sample.html">it</a></th>
<th><a rel="nofollow" href="Europarl/v8syn/ka_sample.html">ka</a></th>
<th><a rel="nofollow" href="Europarl/v8syn/lt_sample.html">lt</a></th>
<th><a rel="nofollow" href="Europarl/v8syn/lv_sample.html">lv</a></th>
<th><a rel="nofollow" href="Europarl/v8syn/mk_sample.html">mk</a></th>
<th><a rel="nofollow" href="Europarl/v8syn/nl_sample.html">nl</a></th>
<th><a rel="nofollow" href="Europarl/v8syn/pl_sample.html">pl</a></th>
<th><a rel="nofollow" href="Europarl/v8syn/pt_sample.html">pt</a></th>
<th><a rel="nofollow" href="Europarl/v8syn/ro_sample.html">ro</a></th>
<th><a rel="nofollow" href="Europarl/v8syn/sk_sample.html">sk</a></th>
<th><a rel="nofollow" href="Europarl/v8syn/sl_sample.html">sl</a></th>
<th><a rel="nofollow" href="Europarl/v8syn/so_sample.html">so</a></th>
<th><a rel="nofollow" href="Europarl/v8syn/sv_sample.html">sv</a></th>
<th><a rel="nofollow" href="Europarl/v8syn/uk_sample.html">uk</a></th>
<th></th></tr>
<tr><th><a rel="nofollow" href="Europarl/v8syn/bg_sample.html">bg</a></th>
<td><a rel="nofollow" title="Bulgarian-Basque (sample file)" href="Europarl/v8syn/bg-eu_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Bulgarian-Gaelic (sample file)" href="Europarl/v8syn/bg-gd_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Bulgarian-Icelandic (sample file)" href="Europarl/v8syn/bg-is_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Bulgarian-Georgian (sample file)" href="Europarl/v8syn/bg-ka_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Bulgarian-Macedonian (sample file)" href="Europarl/v8syn/bg-mk_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Bulgarian-Somali (sample file)" href="Europarl/v8syn/bg-so_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Bulgarian-Ukrainian (sample file)" href="Europarl/v8syn/bg-uk_sample.html">view</a></td><th><a rel="nofollow" href="Europarl/v8syn/bg_sample.html">bg</a></th></tr>
<tr><th><a rel="nofollow" href="Europarl/v8syn/cs_sample.html">cs</a></th>
<td><a rel="nofollow" title="Czech-Basque (sample file)" href="Europarl/v8syn/cs-eu_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Czech-Gaelic (sample file)" href="Europarl/v8syn/cs-gd_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Czech-Icelandic (sample file)" href="Europarl/v8syn/cs-is_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Czech-Georgian (sample file)" href="Europarl/v8syn/cs-ka_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Czech-Macedonian (sample file)" href="Europarl/v8syn/cs-mk_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Czech-Somali (sample file)" href="Europarl/v8syn/cs-so_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Czech-Ukrainian (sample file)" href="Europarl/v8syn/cs-uk_sample.html">view</a></td><th><a rel="nofollow" href="Europarl/v8syn/cs_sample.html">cs</a></th></tr>
<tr><th><a rel="nofollow" href="Europarl/v8syn/da_sample.html">da</a></th>
<td><a rel="nofollow" title="Danish-Basque (sample file)" href="Europarl/v8syn/da-eu_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Danish-Gaelic (sample file)" href="Europarl/v8syn/da-gd_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Danish-Icelandic (sample file)" href="Europarl/v8syn/da-is_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Danish-Georgian (sample file)" href="Europarl/v8syn/da-ka_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Danish-Macedonian (sample file)" href="Europarl/v8syn/da-mk_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Danish-Somali (sample file)" href="Europarl/v8syn/da-so_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Danish-Ukrainian (sample file)" href="Europarl/v8syn/da-uk_sample.html">view</a></td><th><a rel="nofollow" href="Europarl/v8syn/da_sample.html">da</a></th></tr>
<tr><th><a rel="nofollow" href="Europarl/v8syn/de_sample.html">de</a></th>
<td><a rel="nofollow" title="German-Basque (sample file)" href="Europarl/v8syn/de-eu_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="German-Gaelic (sample file)" href="Europarl/v8syn/de-gd_sample.html">view</a></td><td></td><td><a rel="nofollow" title="German-Icelandic (sample file)" href="Europarl/v8syn/de-is_sample.html">view</a></td><td></td><td><a rel="nofollow" title="German-Georgian (sample file)" href="Europarl/v8syn/de-ka_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="German-Macedonian (sample file)" href="Europarl/v8syn/de-mk_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="German-Somali (sample file)" href="Europarl/v8syn/de-so_sample.html">view</a></td><td></td><td><a rel="nofollow" title="German-Ukrainian (sample file)" href="Europarl/v8syn/de-uk_sample.html">view</a></td><th><a rel="nofollow" href="Europarl/v8syn/de_sample.html">de</a></th></tr>
<tr><th><a rel="nofollow" href="Europarl/v8syn/el_sample.html">el</a></th>
<td><a rel="nofollow" title="Greek-Basque (sample file)" href="Europarl/v8syn/el-eu_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Greek-Gaelic (sample file)" href="Europarl/v8syn/el-gd_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Greek-Icelandic (sample file)" href="Europarl/v8syn/el-is_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Greek-Georgian (sample file)" href="Europarl/v8syn/el-ka_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Greek-Macedonian (sample file)" href="Europarl/v8syn/el-mk_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Greek-Somali (sample file)" href="Europarl/v8syn/el-so_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Greek-Ukrainian (sample file)" href="Europarl/v8syn/el-uk_sample.html">view</a></td><th><a rel="nofollow" href="Europarl/v8syn/el_sample.html">el</a></th></tr>
<tr><th><a rel="nofollow" href="Europarl/v8syn/en_sample.html">en</a></th>
<td><a rel="nofollow" title="English-Basque (sample file)" href="Europarl/v8syn/en-eu_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="English-Gaelic (sample file)" href="Europarl/v8syn/en-gd_sample.html">view</a></td><td></td><td><a rel="nofollow" title="English-Icelandic (sample file)" href="Europarl/v8syn/en-is_sample.html">view</a></td><td></td><td><a rel="nofollow" title="English-Georgian (sample file)" href="Europarl/v8syn/en-ka_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="English-Macedonian (sample file)" href="Europarl/v8syn/en-mk_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="English-Somali (sample file)" href="Europarl/v8syn/en-so_sample.html">view</a></td><td></td><td><a rel="nofollow" title="English-Ukrainian (sample file)" href="Europarl/v8syn/en-uk_sample.html">view</a></td><th><a rel="nofollow" href="Europarl/v8syn/en_sample.html">en</a></th></tr>
<tr><th><a rel="nofollow" href="Europarl/v8syn/eu_sample.html">eu</a></th>
<td></td><td><a rel="nofollow" title="Basque-Finnish (sample file)" href="Europarl/v8syn/eu-fi_sample.html">view</a></td><td><a rel="nofollow" title="Basque-French (sample file)" href="Europarl/v8syn/eu-fr_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Gaelic (sample file)" href="Europarl/v8syn/eu-gd_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Hungarian (sample file)" href="Europarl/v8syn/eu-hu_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Icelandic (sample file)" href="Europarl/v8syn/eu-is_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Italian (sample file)" href="Europarl/v8syn/eu-it_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Georgian (sample file)" href="Europarl/v8syn/eu-ka_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Lithuanian (sample file)" href="Europarl/v8syn/eu-lt_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Latvian (sample file)" href="Europarl/v8syn/eu-lv_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Macedonian (sample file)" href="Europarl/v8syn/eu-mk_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Dutch (sample file)" href="Europarl/v8syn/eu-nl_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Polish (sample file)" href="Europarl/v8syn/eu-pl_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Portuguese (sample file)" href="Europarl/v8syn/eu-pt_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Romanian (sample file)" href="Europarl/v8syn/eu-ro_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Slovak (sample file)" href="Europarl/v8syn/eu-sk_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Slovenian (sample file)" href="Europarl/v8syn/eu-sl_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Somali (sample file)" href="Europarl/v8syn/eu-so_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Swedish (sample file)" href="Europarl/v8syn/eu-sv_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Ukrainian (sample file)" href="Europarl/v8syn/eu-uk_sample.html">view</a></td><th><a rel="nofollow" href="Europarl/v8syn/eu_sample.html">eu</a></th></tr>
<tr><th><a rel="nofollow" href="Europarl/v8syn/fi_sample.html">fi</a></th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Finnish-Gaelic (sample file)" href="Europarl/v8syn/fi-gd_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Finnish-Icelandic (sample file)" href="Europarl/v8syn/fi-is_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Finnish-Georgian (sample file)" href="Europarl/v8syn/fi-ka_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Finnish-Macedonian (sample file)" href="Europarl/v8syn/fi-mk_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Finnish-Somali (sample file)" href="Europarl/v8syn/fi-so_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Finnish-Ukrainian (sample file)" href="Europarl/v8syn/fi-uk_sample.html">view</a></td><th><a rel="nofollow" href="Europarl/v8syn/fi_sample.html">fi</a></th></tr>
<tr><th><a rel="nofollow" href="Europarl/v8syn/fr_sample.html">fr</a></th>
<td></td><td></td><td></td><td><a rel="nofollow" title="French-Gaelic (sample file)" href="Europarl/v8syn/fr-gd_sample.html">view</a></td><td></td><td><a rel="nofollow" title="French-Icelandic (sample file)" href="Europarl/v8syn/fr-is_sample.html">view</a></td><td></td><td><a rel="nofollow" title="French-Georgian (sample file)" href="Europarl/v8syn/fr-ka_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="French-Macedonian (sample file)" href="Europarl/v8syn/fr-mk_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="French-Somali (sample file)" href="Europarl/v8syn/fr-so_sample.html">view</a></td><td></td><td><a rel="nofollow" title="French-Ukrainian (sample file)" href="Europarl/v8syn/fr-uk_sample.html">view</a></td><th><a rel="nofollow" href="Europarl/v8syn/fr_sample.html">fr</a></th></tr>
<tr><th><a rel="nofollow" href="Europarl/v8syn/gd_sample.html">gd</a></th>
<td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Gaelic-Hungarian (sample file)" href="Europarl/v8syn/gd-hu_sample.html">view</a></td><td><a rel="nofollow" title="Gaelic-Icelandic (sample file)" href="Europarl/v8syn/gd-is_sample.html">view</a></td><td><a rel="nofollow" title="Gaelic-Italian (sample file)" href="Europarl/v8syn/gd-it_sample.html">view</a></td><td><a rel="nofollow" title="Gaelic-Georgian (sample file)" href="Europarl/v8syn/gd-ka_sample.html">view</a></td><td><a rel="nofollow" title="Gaelic-Lithuanian (sample file)" href="Europarl/v8syn/gd-lt_sample.html">view</a></td><td><a rel="nofollow" title="Gaelic-Latvian (sample file)" href="Europarl/v8syn/gd-lv_sample.html">view</a></td><td><a rel="nofollow" title="Gaelic-Macedonian (sample file)" href="Europarl/v8syn/gd-mk_sample.html">view</a></td><td><a rel="nofollow" title="Gaelic-Dutch (sample file)" href="Europarl/v8syn/gd-nl_sample.html">view</a></td><td><a rel="nofollow" title="Gaelic-Polish (sample file)" href="Europarl/v8syn/gd-pl_sample.html">view</a></td><td><a rel="nofollow" title="Gaelic-Portuguese (sample file)" href="Europarl/v8syn/gd-pt_sample.html">view</a></td><td><a rel="nofollow" title="Gaelic-Romanian (sample file)" href="Europarl/v8syn/gd-ro_sample.html">view</a></td><td><a rel="nofollow" title="Gaelic-Slovak (sample file)" href="Europarl/v8syn/gd-sk_sample.html">view</a></td><td><a rel="nofollow" title="Gaelic-Slovenian (sample file)" href="Europarl/v8syn/gd-sl_sample.html">view</a></td><td><a rel="nofollow" title="Gaelic-Somali (sample file)" href="Europarl/v8syn/gd-so_sample.html">view</a></td><td><a rel="nofollow" title="Gaelic-Swedish (sample file)" href="Europarl/v8syn/gd-sv_sample.html">view</a></td><td><a rel="nofollow" title="Gaelic-Ukrainian (sample file)" href="Europarl/v8syn/gd-uk_sample.html">view</a></td><th><a rel="nofollow" href="Europarl/v8syn/gd_sample.html">gd</a></th></tr>
<tr><th><a rel="nofollow" href="Europarl/v8syn/hu_sample.html">hu</a></th>
<td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Hungarian-Icelandic (sample file)" href="Europarl/v8syn/hu-is_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Hungarian-Georgian (sample file)" href="Europarl/v8syn/hu-ka_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Hungarian-Macedonian (sample file)" href="Europarl/v8syn/hu-mk_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Hungarian-Somali (sample file)" href="Europarl/v8syn/hu-so_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Hungarian-Ukrainian (sample file)" href="Europarl/v8syn/hu-uk_sample.html">view</a></td><th><a rel="nofollow" href="Europarl/v8syn/hu_sample.html">hu</a></th></tr>
<tr><th><a rel="nofollow" href="Europarl/v8syn/is_sample.html">is</a></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Icelandic-Italian (sample file)" href="Europarl/v8syn/is-it_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Georgian (sample file)" href="Europarl/v8syn/is-ka_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Lithuanian (sample file)" href="Europarl/v8syn/is-lt_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Latvian (sample file)" href="Europarl/v8syn/is-lv_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Macedonian (sample file)" href="Europarl/v8syn/is-mk_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Dutch (sample file)" href="Europarl/v8syn/is-nl_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Polish (sample file)" href="Europarl/v8syn/is-pl_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Portuguese (sample file)" href="Europarl/v8syn/is-pt_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Romanian (sample file)" href="Europarl/v8syn/is-ro_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Slovak (sample file)" href="Europarl/v8syn/is-sk_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Slovenian (sample file)" href="Europarl/v8syn/is-sl_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Somali (sample file)" href="Europarl/v8syn/is-so_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Swedish (sample file)" href="Europarl/v8syn/is-sv_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Ukrainian (sample file)" href="Europarl/v8syn/is-uk_sample.html">view</a></td><th><a rel="nofollow" href="Europarl/v8syn/is_sample.html">is</a></th></tr>
<tr><th><a rel="nofollow" href="Europarl/v8syn/it_sample.html">it</a></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Italian-Georgian (sample file)" href="Europarl/v8syn/it-ka_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Italian-Macedonian (sample file)" href="Europarl/v8syn/it-mk_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Italian-Somali (sample file)" href="Europarl/v8syn/it-so_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Italian-Ukrainian (sample file)" href="Europarl/v8syn/it-uk_sample.html">view</a></td><th><a rel="nofollow" href="Europarl/v8syn/it_sample.html">it</a></th></tr>
<tr><th><a rel="nofollow" href="Europarl/v8syn/ka_sample.html">ka</a></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Georgian-Lithuanian (sample file)" href="Europarl/v8syn/ka-lt_sample.html">view</a></td><td><a rel="nofollow" title="Georgian-Latvian (sample file)" href="Europarl/v8syn/ka-lv_sample.html">view</a></td><td><a rel="nofollow" title="Georgian-Macedonian (sample file)" href="Europarl/v8syn/ka-mk_sample.html">view</a></td><td><a rel="nofollow" title="Georgian-Dutch (sample file)" href="Europarl/v8syn/ka-nl_sample.html">view</a></td><td><a rel="nofollow" title="Georgian-Polish (sample file)" href="Europarl/v8syn/ka-pl_sample.html">view</a></td><td><a rel="nofollow" title="Georgian-Portuguese (sample file)" href="Europarl/v8syn/ka-pt_sample.html">view</a></td><td><a rel="nofollow" title="Georgian-Romanian (sample file)" href="Europarl/v8syn/ka-ro_sample.html">view</a></td><td><a rel="nofollow" title="Georgian-Slovak (sample file)" href="Europarl/v8syn/ka-sk_sample.html">view</a></td><td><a rel="nofollow" title="Georgian-Slovenian (sample file)" href="Europarl/v8syn/ka-sl_sample.html">view</a></td><td><a rel="nofollow" title="Georgian-Somali (sample file)" href="Europarl/v8syn/ka-so_sample.html">view</a></td><td><a rel="nofollow" title="Georgian-Swedish (sample file)" href="Europarl/v8syn/ka-sv_sample.html">view</a></td><td><a rel="nofollow" title="Georgian-Ukrainian (sample file)" href="Europarl/v8syn/ka-uk_sample.html">view</a></td><th><a rel="nofollow" href="Europarl/v8syn/ka_sample.html">ka</a></th></tr>
<tr><th><a rel="nofollow" href="Europarl/v8syn/lt_sample.html">lt</a></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Lithuanian-Macedonian (sample file)" href="Europarl/v8syn/lt-mk_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Lithuanian-Somali (sample file)" href="Europarl/v8syn/lt-so_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Lithuanian-Ukrainian (sample file)" href="Europarl/v8syn/lt-uk_sample.html">view</a></td><th><a rel="nofollow" href="Europarl/v8syn/lt_sample.html">lt</a></th></tr>
<tr><th><a rel="nofollow" href="Europarl/v8syn/lv_sample.html">lv</a></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Latvian-Macedonian (sample file)" href="Europarl/v8syn/lv-mk_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Latvian-Somali (sample file)" href="Europarl/v8syn/lv-so_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Latvian-Ukrainian (sample file)" href="Europarl/v8syn/lv-uk_sample.html">view</a></td><th><a rel="nofollow" href="Europarl/v8syn/lv_sample.html">lv</a></th></tr>
<tr><th><a rel="nofollow" href="Europarl/v8syn/mk_sample.html">mk</a></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Macedonian-Dutch (sample file)" href="Europarl/v8syn/mk-nl_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Polish (sample file)" href="Europarl/v8syn/mk-pl_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Portuguese (sample file)" href="Europarl/v8syn/mk-pt_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Romanian (sample file)" href="Europarl/v8syn/mk-ro_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Slovak (sample file)" href="Europarl/v8syn/mk-sk_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Slovenian (sample file)" href="Europarl/v8syn/mk-sl_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Somali (sample file)" href="Europarl/v8syn/mk-so_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Swedish (sample file)" href="Europarl/v8syn/mk-sv_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Ukrainian (sample file)" href="Europarl/v8syn/mk-uk_sample.html">view</a></td><th><a rel="nofollow" href="Europarl/v8syn/mk_sample.html">mk</a></th></tr>
<tr><th><a rel="nofollow" href="Europarl/v8syn/nl_sample.html">nl</a></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Dutch-Somali (sample file)" href="Europarl/v8syn/nl-so_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Dutch-Ukrainian (sample file)" href="Europarl/v8syn/nl-uk_sample.html">view</a></td><th><a rel="nofollow" href="Europarl/v8syn/nl_sample.html">nl</a></th></tr>
<tr><th><a rel="nofollow" href="Europarl/v8syn/pl_sample.html">pl</a></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Polish-Somali (sample file)" href="Europarl/v8syn/pl-so_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Polish-Ukrainian (sample file)" href="Europarl/v8syn/pl-uk_sample.html">view</a></td><th><a rel="nofollow" href="Europarl/v8syn/pl_sample.html">pl</a></th></tr>
<tr><th><a rel="nofollow" href="Europarl/v8syn/pt_sample.html">pt</a></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Portuguese-Somali (sample file)" href="Europarl/v8syn/pt-so_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Portuguese-Ukrainian (sample file)" href="Europarl/v8syn/pt-uk_sample.html">view</a></td><th><a rel="nofollow" href="Europarl/v8syn/pt_sample.html">pt</a></th></tr>
<tr><th><a rel="nofollow" href="Europarl/v8syn/ro_sample.html">ro</a></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Romanian-Somali (sample file)" href="Europarl/v8syn/ro-so_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Romanian-Ukrainian (sample file)" href="Europarl/v8syn/ro-uk_sample.html">view</a></td><th><a rel="nofollow" href="Europarl/v8syn/ro_sample.html">ro</a></th></tr>
<tr><th><a rel="nofollow" href="Europarl/v8syn/sk_sample.html">sk</a></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Slovak-Somali (sample file)" href="Europarl/v8syn/sk-so_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Slovak-Ukrainian (sample file)" href="Europarl/v8syn/sk-uk_sample.html">view</a></td><th><a rel="nofollow" href="Europarl/v8syn/sk_sample.html">sk</a></th></tr>
<tr><th><a rel="nofollow" href="Europarl/v8syn/sl_sample.html">sl</a></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Slovenian-Somali (sample file)" href="Europarl/v8syn/sl-so_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Slovenian-Ukrainian (sample file)" href="Europarl/v8syn/sl-uk_sample.html">view</a></td><th><a rel="nofollow" href="Europarl/v8syn/sl_sample.html">sl</a></th></tr>
<tr><th><a rel="nofollow" href="Europarl/v8syn/so_sample.html">so</a></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Somali-Swedish (sample file)" href="Europarl/v8syn/so-sv_sample.html">view</a></td><td><a rel="nofollow" title="Somali-Ukrainian (sample file)" href="Europarl/v8syn/so-uk_sample.html">view</a></td><th><a rel="nofollow" href="Europarl/v8syn/so_sample.html">so</a></th></tr>
<tr><th><a rel="nofollow" href="Europarl/v8syn/sv_sample.html">sv</a></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Swedish-Ukrainian (sample file)" href="Europarl/v8syn/sv-uk_sample.html">view</a></td><th><a rel="nofollow" href="Europarl/v8syn/sv_sample.html">sv</a></th></tr>
<tr><th></th>
<th><a rel="nofollow" href="Europarl/v8syn/eu_sample.html">eu</a></th>
<th><a rel="nofollow" href="Europarl/v8syn/fi_sample.html">fi</a></th>
<th><a rel="nofollow" href="Europarl/v8syn/fr_sample.html">fr</a></th>
<th><a rel="nofollow" href="Europarl/v8syn/gd_sample.html">gd</a></th>
<th><a rel="nofollow" href="Europarl/v8syn/hu_sample.html">hu</a></th>
<th><a rel="nofollow" href="Europarl/v8syn/is_sample.html">is</a></th>
<th><a rel="nofollow" href="Europarl/v8syn/it_sample.html">it</a></th>
<th><a rel="nofollow" href="Europarl/v8syn/ka_sample.html">ka</a></th>
<th><a rel="nofollow" href="Europarl/v8syn/lt_sample.html">lt</a></th>
<th><a rel="nofollow" href="Europarl/v8syn/lv_sample.html">lv</a></th>
<th><a rel="nofollow" href="Europarl/v8syn/mk_sample.html">mk</a></th>
<th><a rel="nofollow" href="Europarl/v8syn/nl_sample.html">nl</a></th>
<th><a rel="nofollow" href="Europarl/v8syn/pl_sample.html">pl</a></th>
<th><a rel="nofollow" href="Europarl/v8syn/pt_sample.html">pt</a></th>
<th><a rel="nofollow" href="Europarl/v8syn/ro_sample.html">ro</a></th>
<th><a rel="nofollow" href="Europarl/v8syn/sk_sample.html">sk</a></th>
<th><a rel="nofollow" href="Europarl/v8syn/sl_sample.html">sl</a></th>
<th><a rel="nofollow" href="Europarl/v8syn/so_sample.html">so</a></th>
<th><a rel="nofollow" href="Europarl/v8syn/sv_sample.html">sv</a></th>
<th><a rel="nofollow" href="Europarl/v8syn/uk_sample.html">uk</a></th>
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
<th><a rel="nofollow" title="eu.zip: untokenized XML documents (5,207 files, 2.2M sentences, 38.6M tokens)" href="download.php?f=Europarl/v8syn/raw/eu.zip">eu</a></th>
<th><a rel="nofollow" title="fi.zip: untokenized XML documents (10,268 files, 2.2M sentences, 34.6M tokens)" href="download.php?f=Europarl/v8syn/raw/fi.zip">fi</a></th>
<th><a rel="nofollow" title="fr.zip: untokenized XML documents (10,410 files, 2.2M sentences, 56.7M tokens)" href="download.php?f=Europarl/v8syn/raw/fr.zip">fr</a></th>
<th><a rel="nofollow" title="gd.zip: untokenized XML documents (5,308 files, 2.2M sentences, 63.1M tokens)" href="download.php?f=Europarl/v8syn/raw/gd.zip">gd</a></th>
<th><a rel="nofollow" title="hu.zip: untokenized XML documents (9,718 files, 0.7M sentences, 12.6M tokens)" href="download.php?f=Europarl/v8syn/raw/hu.zip">hu</a></th>
<th><a rel="nofollow" title="is.zip: untokenized XML documents (5,695 files, 2.4M sentences, 52.4M tokens)" href="download.php?f=Europarl/v8syn/raw/is.zip">is</a></th>
<th><a rel="nofollow" title="it.zip: untokenized XML documents (10,470 files, 2.1M sentences, 52.1M tokens)" href="download.php?f=Europarl/v8syn/raw/it.zip">it</a></th>
<th><a rel="nofollow" title="ka.zip: untokenized XML documents (5,698 files, 2.5M sentences, 40.4M tokens)" href="download.php?f=Europarl/v8syn/raw/ka.zip">ka</a></th>
<th><a rel="nofollow" title="lt.zip: untokenized XML documents (9,766 files, 0.7M sentences, 11.6M tokens)" href="download.php?f=Europarl/v8syn/raw/lt.zip">lt</a></th>
<th><a rel="nofollow" title="lv.zip: untokenized XML documents (9,736 files, 0.7M sentences, 12.1M tokens)" href="download.php?f=Europarl/v8syn/raw/lv.zip">lv</a></th>
<th><a rel="nofollow" title="mk.zip: untokenized XML documents (4,893 files, 2.0M sentences, 47.4M tokens)" href="download.php?f=Europarl/v8syn/raw/mk.zip">mk</a></th>
<th><a rel="nofollow" title="nl.zip: untokenized XML documents (10,383 files, 2.4M sentences, 54.8M tokens)" href="download.php?f=Europarl/v8syn/raw/nl.zip">nl</a></th>
<th><a rel="nofollow" title="pl.zip: untokenized XML documents (9,793 files, 0.7M sentences, 13.1M tokens)" href="download.php?f=Europarl/v8syn/raw/pl.zip">pl</a></th>
<th><a rel="nofollow" title="pt.zip: untokenized XML documents (10,385 files, 2.2M sentences, 54.4M tokens)" href="download.php?f=Europarl/v8syn/raw/pt.zip">pt</a></th>
<th><a rel="nofollow" title="ro.zip: untokenized XML documents (7,530 files, 0.4M sentences, 9.7M tokens)" href="download.php?f=Europarl/v8syn/raw/ro.zip">ro</a></th>
<th><a rel="nofollow" title="sk.zip: untokenized XML documents (9,740 files, 0.7M sentences, 13.1M tokens)" href="download.php?f=Europarl/v8syn/raw/sk.zip">sk</a></th>
<th><a rel="nofollow" title="sl.zip: untokenized XML documents (9,703 files, 0.6M sentences, 12.7M tokens)" href="download.php?f=Europarl/v8syn/raw/sl.zip">sl</a></th>
<th><a rel="nofollow" title="so.zip: untokenized XML documents (5,689 files, 2.4M sentences, 59.0M tokens)" href="download.php?f=Europarl/v8syn/raw/so.zip">so</a></th>
<th><a rel="nofollow" title="sv.zip: untokenized XML documents (10,345 files, 2.3M sentences, 46.9M tokens)" href="download.php?f=Europarl/v8syn/raw/sv.zip">sv</a></th>
<th><a rel="nofollow" title="uk.zip: untokenized XML documents (5,699 files, 2.3M sentences, 46.9M tokens)" href="download.php?f=Europarl/v8syn/raw/uk.zip">uk</a></th>
<th></th></tr>
<th><a rel="nofollow" title="bg.zip: untokenized XML documents (7,554 files, 0.4M sentences, 9.3M tokens)" href="download.php?f=Europarl/v8syn/raw/bg.zip">bg</a></th>
<td bgcolor='#eaffcc'><a rel="nofollow" title="Bulgarian-Basque (2,265 aligned documents 0.4M links 15.1M tokens )" href="download.php?f=Europarl/v8syn/xml/bg-eu.xml.gz">0.4M</a></td>
<td></td>
<td></td>
<td bgcolor='#eaffcc'><a rel="nofollow" title="Bulgarian-Gaelic (2,284 aligned documents 0.4M links 19.0M tokens )" href="download.php?f=Europarl/v8syn/xml/bg-gd.xml.gz">0.4M</a></td>
<td></td>
<td bgcolor='#e9ffcb'><a rel="nofollow" title="Bulgarian-Icelandic (2,450 aligned documents 0.4M links 17.8M tokens )" href="download.php?f=Europarl/v8syn/xml/bg-is.xml.gz">0.4M</a></td>
<td></td>
<td bgcolor='#eaffcc'><a rel="nofollow" title="Bulgarian-Georgian (2,454 aligned documents 0.4M links 15.5M tokens )" href="download.php?f=Europarl/v8syn/xml/bg-ka.xml.gz">0.4M</a></td>
<td></td>
<td></td>
<td bgcolor='#ebffcd'><a rel="nofollow" title="Bulgarian-Macedonian (2,125 aligned documents 0.3M links 16.1M tokens )" href="download.php?f=Europarl/v8syn/xml/bg-mk.xml.gz">0.3M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#e9ffcb'><a rel="nofollow" title="Bulgarian-Somali (2,446 aligned documents 0.4M links 18.9M tokens )" href="download.php?f=Europarl/v8syn/xml/bg-so.xml.gz">0.4M</a></td>
<td></td>
<td bgcolor='#e9ffcb'><a rel="nofollow" title="Bulgarian-Ukrainian (2,454 aligned documents 0.4M links 16.7M tokens )" href="download.php?f=Europarl/v8syn/xml/bg-uk.xml.gz">0.4M</a></td>
<th>bg</th>
</tr><th><a rel="nofollow" title="cs.zip: untokenized XML documents (9,790 files, 0.7M sentences, 13.2M tokens)" href="download.php?f=Europarl/v8syn/raw/cs.zip">cs</a></th>
<td bgcolor='#e5ffc8'><a rel="nofollow" title="Czech-Basque (3,353 aligned documents 0.6M links 22.2M tokens )" href="download.php?f=Europarl/v8syn/xml/cs-eu.xml.gz">0.6M</a></td>
<td></td>
<td></td>
<td bgcolor='#e5ffc9'><a rel="nofollow" title="Czech-Gaelic (3,417 aligned documents 0.6M links 28.6M tokens )" href="download.php?f=Europarl/v8syn/xml/cs-gd.xml.gz">0.6M</a></td>
<td></td>
<td bgcolor='#e4ffc8'><a rel="nofollow" title="Czech-Icelandic (3,659 aligned documents 0.6M links 26.4M tokens )" href="download.php?f=Europarl/v8syn/xml/cs-is.xml.gz">0.6M</a></td>
<td></td>
<td bgcolor='#e5ffc9'><a rel="nofollow" title="Czech-Georgian (3,662 aligned documents 0.6M links 22.9M tokens )" href="download.php?f=Europarl/v8syn/xml/cs-ka.xml.gz">0.6M</a></td>
<td></td>
<td></td>
<td bgcolor='#e6ffc9'><a rel="nofollow" title="Czech-Macedonian (3,154 aligned documents 0.5M links 23.9M tokens )" href="download.php?f=Europarl/v8syn/xml/cs-mk.xml.gz">0.5M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#e4ffc8'><a rel="nofollow" title="Czech-Somali (3,656 aligned documents 0.6M links 28.3M tokens )" href="download.php?f=Europarl/v8syn/xml/cs-so.xml.gz">0.6M</a></td>
<td></td>
<td bgcolor='#e4ffc8'><a rel="nofollow" title="Czech-Ukrainian (3,663 aligned documents 0.6M links 24.8M tokens )" href="download.php?f=Europarl/v8syn/xml/cs-uk.xml.gz">0.6M</a></td>
<th>cs</th>
</tr><th><a rel="nofollow" title="da.zip: untokenized XML documents (10,316 files, 2.3M sentences, 48.9M tokens)" href="download.php?f=Europarl/v8syn/raw/da.zip">da</a></th>
<td bgcolor='#daffc7'><a rel="nofollow" title="Danish-Basque (4,431 aligned documents 1.7M links 72.8M tokens )" href="download.php?f=Europarl/v8syn/xml/da-eu.xml.gz">1.7M</a></td>
<td></td>
<td></td>
<td bgcolor='#daffc7'><a rel="nofollow" title="Danish-Gaelic (4,512 aligned documents 1.8M links 93.2M tokens )" href="download.php?f=Europarl/v8syn/xml/da-gd.xml.gz">1.8M</a></td>
<td></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="Danish-Icelandic (4,854 aligned documents 1.9M links 88.3M tokens )" href="download.php?f=Europarl/v8syn/xml/da-is.xml.gz">1.9M</a></td>
<td></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="Danish-Georgian (4,857 aligned documents 1.9M links 77.4M tokens )" href="download.php?f=Europarl/v8syn/xml/da-ka.xml.gz">1.9M</a></td>
<td></td>
<td></td>
<td bgcolor='#daffc6'><a rel="nofollow" title="Danish-Macedonian (4,176 aligned documents 1.7M links 78.4M tokens )" href="download.php?f=Europarl/v8syn/xml/da-mk.xml.gz">1.7M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="Danish-Somali (4,850 aligned documents 1.9M links 93.7M tokens )" href="download.php?f=Europarl/v8syn/xml/da-so.xml.gz">1.9M</a></td>
<td></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="Danish-Ukrainian (4,858 aligned documents 1.9M links 83.7M tokens )" href="download.php?f=Europarl/v8syn/xml/da-uk.xml.gz">1.9M</a></td>
<th>da</th>
</tr><th><a rel="nofollow" title="de.zip: untokenized XML documents (10,254 files, 2.2M sentences, 48.4M tokens)" href="download.php?f=Europarl/v8syn/raw/de.zip">de</a></th>
<td bgcolor='#daffc7'><a rel="nofollow" title="German-Basque (4,320 aligned documents 1.7M links 72.4M tokens )" href="download.php?f=Europarl/v8syn/xml/de-eu.xml.gz">1.7M</a></td>
<td></td>
<td></td>
<td bgcolor='#daffc7'><a rel="nofollow" title="German-Gaelic (4,397 aligned documents 1.7M links 92.4M tokens )" href="download.php?f=Europarl/v8syn/xml/de-gd.xml.gz">1.7M</a></td>
<td></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="German-Icelandic (4,726 aligned documents 1.9M links 87.5M tokens )" href="download.php?f=Europarl/v8syn/xml/de-is.xml.gz">1.9M</a></td>
<td></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="German-Georgian (4,729 aligned documents 1.8M links 76.7M tokens )" href="download.php?f=Europarl/v8syn/xml/de-ka.xml.gz">1.8M</a></td>
<td></td>
<td></td>
<td bgcolor='#daffc6'><a rel="nofollow" title="German-Macedonian (4,082 aligned documents 1.6M links 78.3M tokens )" href="download.php?f=Europarl/v8syn/xml/de-mk.xml.gz">1.6M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="German-Somali (4,722 aligned documents 1.9M links 92.8M tokens )" href="download.php?f=Europarl/v8syn/xml/de-so.xml.gz">1.9M</a></td>
<td></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="German-Ukrainian (4,730 aligned documents 1.9M links 83.0M tokens )" href="download.php?f=Europarl/v8syn/xml/de-uk.xml.gz">1.9M</a></td>
<th>de</th>
</tr><th><a rel="nofollow" title="el.zip: untokenized XML documents (10,242 files, 1.6M sentences, 39.3M tokens)" href="download.php?f=Europarl/v8syn/raw/el.zip">el</a></th>
<td bgcolor='#deffc6'><a rel="nofollow" title="Greek-Basque (4,337 aligned documents 1.1M links 50.4M tokens )" href="download.php?f=Europarl/v8syn/xml/el-eu.xml.gz">1.1M</a></td>
<td></td>
<td></td>
<td bgcolor='#deffc6'><a rel="nofollow" title="Greek-Gaelic (4,417 aligned documents 1.1M links 64.8M tokens )" href="download.php?f=Europarl/v8syn/xml/el-gd.xml.gz">1.1M</a></td>
<td></td>
<td bgcolor='#ddffc6'><a rel="nofollow" title="Greek-Icelandic (4,746 aligned documents 1.2M links 60.7M tokens )" href="download.php?f=Europarl/v8syn/xml/el-is.xml.gz">1.2M</a></td>
<td></td>
<td bgcolor='#deffc7'><a rel="nofollow" title="Greek-Georgian (4,749 aligned documents 1.2M links 53.6M tokens )" href="download.php?f=Europarl/v8syn/xml/el-ka.xml.gz">1.2M</a></td>
<td></td>
<td></td>
<td bgcolor='#dfffc6'><a rel="nofollow" title="Greek-Macedonian (4,080 aligned documents 1.1M links 53.7M tokens )" href="download.php?f=Europarl/v8syn/xml/el-mk.xml.gz">1.1M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ddffc6'><a rel="nofollow" title="Greek-Somali (4,742 aligned documents 1.2M links 64.3M tokens )" href="download.php?f=Europarl/v8syn/xml/el-so.xml.gz">1.2M</a></td>
<td></td>
<td bgcolor='#ddffc6'><a rel="nofollow" title="Greek-Ukrainian (4,750 aligned documents 1.2M links 57.6M tokens )" href="download.php?f=Europarl/v8syn/xml/el-uk.xml.gz">1.2M</a></td>
<th>el</th>
</tr><th><a rel="nofollow" title="en.zip: untokenized XML documents (11,199 files, 2.5M sentences, 59.8M tokens)" href="download.php?f=Europarl/v8syn/raw/en.zip">en</a></th>
<td bgcolor='#d7ffc7'><a rel="nofollow" title="English-Basque (5,207 aligned documents 2.1M links 92.3M tokens )" href="download.php?f=Europarl/v8syn/xml/en-eu.xml.gz">2.1M</a></td>
<td></td>
<td></td>
<td bgcolor='#d7ffc7'><a rel="nofollow" title="English-Gaelic (5,308 aligned documents 2.2M links 117.1M tokens )" href="download.php?f=Europarl/v8syn/xml/en-gd.xml.gz">2.2M</a></td>
<td></td>
<td bgcolor='#d6ffc8'><a rel="nofollow" title="English-Icelandic (5,695 aligned documents 2.3M links 111.5M tokens )" href="download.php?f=Europarl/v8syn/xml/en-is.xml.gz">2.3M</a></td>
<td></td>
<td bgcolor='#d7ffc8'><a rel="nofollow" title="English-Georgian (5,698 aligned documents 2.3M links 98.1M tokens )" href="download.php?f=Europarl/v8syn/xml/en-ka.xml.gz">2.3M</a></td>
<td></td>
<td></td>
<td bgcolor='#d8ffc7'><a rel="nofollow" title="English-Macedonian (4,893 aligned documents 2.0M links 98.3M tokens )" href="download.php?f=Europarl/v8syn/xml/en-mk.xml.gz">2.0M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#d6ffc8'><a rel="nofollow" title="English-Somali (5,689 aligned documents 2.4M links 118.0M tokens )" href="download.php?f=Europarl/v8syn/xml/en-so.xml.gz">2.4M</a></td>
<td></td>
<td bgcolor='#d6ffc8'><a rel="nofollow" title="English-Ukrainian (5,699 aligned documents 2.3M links 105.7M tokens )" href="download.php?f=Europarl/v8syn/xml/en-uk.xml.gz">2.3M</a></td>
<th>en</th>
</tr><th><a rel="nofollow" title="eu.zip: untokenized XML documents (5,207 files, 2.2M sentences, 38.6M tokens)" href="download.php?f=Europarl/v8syn/raw/eu.zip">eu</a></th>
<td></td>
<td bgcolor='#daffc7'><a rel="nofollow" title="Basque-Finnish (4,403 aligned documents 1.7M links 61.3M tokens )" href="download.php?f=Europarl/v8syn/xml/eu-fi.xml.gz">1.7M</a></td>
<td bgcolor='#d9ffc6'><a rel="nofollow" title="Basque-French (4,505 aligned documents 1.8M links 81.1M tokens )" href="download.php?f=Europarl/v8syn/xml/eu-fr.xml.gz">1.8M</a></td>
<td bgcolor='#d8ffc7'><a rel="nofollow" title="Basque-Gaelic (4,947 aligned documents 2.0M links 94.8M tokens )" href="download.php?f=Europarl/v8syn/xml/eu-gd.xml.gz">2.0M</a></td>
<td bgcolor='#e5ffc8'><a rel="nofollow" title="Basque-Hungarian (3,278 aligned documents 0.5M links 21.3M tokens )" href="download.php?f=Europarl/v8syn/xml/eu-hu.xml.gz">0.5M</a></td>
<td bgcolor='#d8ffc8'><a rel="nofollow" title="Basque-Icelandic (5,204 aligned documents 2.1M links 85.9M tokens )" href="download.php?f=Europarl/v8syn/xml/eu-is.xml.gz">2.1M</a></td>
<td bgcolor='#daffc6'><a rel="nofollow" title="Basque-Italian (4,533 aligned documents 1.7M links 76.2M tokens )" href="download.php?f=Europarl/v8syn/xml/eu-it.xml.gz">1.7M</a></td>
<td bgcolor='#d8ffc7'><a rel="nofollow" title="Basque-Georgian (5,206 aligned documents 2.1M links 74.0M tokens )" href="download.php?f=Europarl/v8syn/xml/eu-ka.xml.gz">2.1M</a></td>
<td bgcolor='#e5ffc8'><a rel="nofollow" title="Basque-Lithuanian (3,339 aligned documents 0.6M links 20.5M tokens )" href="download.php?f=Europarl/v8syn/xml/eu-lt.xml.gz">0.6M</a></td>
<td bgcolor='#e5ffc8'><a rel="nofollow" title="Basque-Latvian (3,314 aligned documents 0.6M links 21.1M tokens )" href="download.php?f=Europarl/v8syn/xml/eu-lv.xml.gz">0.6M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="Basque-Macedonian (4,751 aligned documents 1.9M links 80.5M tokens )" href="download.php?f=Europarl/v8syn/xml/eu-mk.xml.gz">1.9M</a></td>
<td bgcolor='#daffc7'><a rel="nofollow" title="Basque-Dutch (4,488 aligned documents 1.8M links 78.6M tokens )" href="download.php?f=Europarl/v8syn/xml/eu-nl.xml.gz">1.8M</a></td>
<td bgcolor='#e5ffc8'><a rel="nofollow" title="Basque-Polish (3,344 aligned documents 0.6M links 21.8M tokens )" href="download.php?f=Europarl/v8syn/xml/eu-pl.xml.gz">0.6M</a></td>
<td bgcolor='#daffc7'><a rel="nofollow" title="Basque-Portuguese (4,491 aligned documents 1.7M links 78.1M tokens )" href="download.php?f=Europarl/v8syn/xml/eu-pt.xml.gz">1.7M</a></td>
<td bgcolor='#eaffcc'><a rel="nofollow" title="Basque-Romanian (2,262 aligned documents 0.4M links 15.3M tokens )" href="download.php?f=Europarl/v8syn/xml/eu-ro.xml.gz">0.4M</a></td>
<td bgcolor='#e5ffc8'><a rel="nofollow" title="Basque-Slovak (3,322 aligned documents 0.6M links 22.0M tokens )" href="download.php?f=Europarl/v8syn/xml/eu-sk.xml.gz">0.6M</a></td>
<td bgcolor='#e5ffc8'><a rel="nofollow" title="Basque-Slovenian (3,281 aligned documents 0.5M links 21.3M tokens )" href="download.php?f=Europarl/v8syn/xml/eu-sl.xml.gz">0.5M</a></td>
<td bgcolor='#d8ffc8'><a rel="nofollow" title="Basque-Somali (5,198 aligned documents 2.1M links 91.8M tokens )" href="download.php?f=Europarl/v8syn/xml/eu-so.xml.gz">2.1M</a></td>
<td bgcolor='#daffc6'><a rel="nofollow" title="Basque-Swedish (4,461 aligned documents 1.7M links 68.5M tokens )" href="download.php?f=Europarl/v8syn/xml/eu-sv.xml.gz">1.7M</a></td>
<td bgcolor='#d8ffc8'><a rel="nofollow" title="Basque-Ukrainian (5,207 aligned documents 2.1M links 80.8M tokens )" href="download.php?f=Europarl/v8syn/xml/eu-uk.xml.gz">2.1M</a></td>
<th>eu</th>
</tr><th><a rel="nofollow" title="fi.zip: untokenized XML documents (10,268 files, 2.2M sentences, 34.6M tokens)" href="download.php?f=Europarl/v8syn/raw/fi.zip">fi</a></th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#daffc7'><a rel="nofollow" title="Finnish-Gaelic (4,477 aligned documents 1.7M links 80.9M tokens )" href="download.php?f=Europarl/v8syn/xml/fi-gd.xml.gz">1.7M</a></td>
<td></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="Finnish-Icelandic (4,816 aligned documents 1.9M links 74.9M tokens )" href="download.php?f=Europarl/v8syn/xml/fi-is.xml.gz">1.9M</a></td>
<td></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="Finnish-Georgian (4,819 aligned documents 1.8M links 64.4M tokens )" href="download.php?f=Europarl/v8syn/xml/fi-ka.xml.gz">1.8M</a></td>
<td></td>
<td></td>
<td bgcolor='#daffc6'><a rel="nofollow" title="Finnish-Macedonian (4,148 aligned documents 1.6M links 67.2M tokens )" href="download.php?f=Europarl/v8syn/xml/fi-mk.xml.gz">1.6M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="Finnish-Somali (4,812 aligned documents 1.9M links 80.1M tokens )" href="download.php?f=Europarl/v8syn/xml/fi-so.xml.gz">1.9M</a></td>
<td></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="Finnish-Ukrainian (4,820 aligned documents 1.9M links 70.4M tokens )" href="download.php?f=Europarl/v8syn/xml/fi-uk.xml.gz">1.9M</a></td>
<th>fi</th>
</tr><th><a rel="nofollow" title="fr.zip: untokenized XML documents (10,410 files, 2.2M sentences, 56.7M tokens)" href="download.php?f=Europarl/v8syn/raw/fr.zip">fr</a></th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#d9ffc6'><a rel="nofollow" title="French-Gaelic (4,585 aligned documents 1.8M links 102.1M tokens )" href="download.php?f=Europarl/v8syn/xml/fr-gd.xml.gz">1.8M</a></td>
<td></td>
<td bgcolor='#d8ffc7'><a rel="nofollow" title="French-Icelandic (4,932 aligned documents 2.0M links 97.5M tokens )" href="download.php?f=Europarl/v8syn/xml/fr-is.xml.gz">2.0M</a></td>
<td></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="French-Georgian (4,935 aligned documents 1.9M links 86.1M tokens )" href="download.php?f=Europarl/v8syn/xml/fr-ka.xml.gz">1.9M</a></td>
<td></td>
<td></td>
<td bgcolor='#daffc7'><a rel="nofollow" title="French-Macedonian (4,246 aligned documents 1.7M links 86.5M tokens )" href="download.php?f=Europarl/v8syn/xml/fr-mk.xml.gz">1.7M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#d8ffc7'><a rel="nofollow" title="French-Somali (4,927 aligned documents 2.0M links 103.0M tokens )" href="download.php?f=Europarl/v8syn/xml/fr-so.xml.gz">2.0M</a></td>
<td></td>
<td bgcolor='#d8ffc7'><a rel="nofollow" title="French-Ukrainian (4,936 aligned documents 2.0M links 92.7M tokens )" href="download.php?f=Europarl/v8syn/xml/fr-uk.xml.gz">2.0M</a></td>
<th>fr</th>
</tr><th><a rel="nofollow" title="gd.zip: untokenized XML documents (5,308 files, 2.2M sentences, 63.1M tokens)" href="download.php?f=Europarl/v8syn/raw/gd.zip">gd</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#e5ffc8'><a rel="nofollow" title="Gaelic-Hungarian (3,347 aligned documents 0.6M links 27.6M tokens )" href="download.php?f=Europarl/v8syn/xml/gd-hu.xml.gz">0.6M</a></td>
<td bgcolor='#d7ffc7'><a rel="nofollow" title="Gaelic-Icelandic (5,305 aligned documents 2.1M links 110.6M tokens )" href="download.php?f=Europarl/v8syn/xml/gd-is.xml.gz">2.1M</a></td>
<td bgcolor='#daffc7'><a rel="nofollow" title="Gaelic-Italian (4,613 aligned documents 1.7M links 96.8M tokens )" href="download.php?f=Europarl/v8syn/xml/gd-it.xml.gz">1.7M</a></td>
<td bgcolor='#d8ffc8'><a rel="nofollow" title="Gaelic-Georgian (5,307 aligned documents 2.1M links 98.2M tokens )" href="download.php?f=Europarl/v8syn/xml/gd-ka.xml.gz">2.1M</a></td>
<td bgcolor='#e5ffc8'><a rel="nofollow" title="Gaelic-Lithuanian (3,402 aligned documents 0.6M links 26.8M tokens )" href="download.php?f=Europarl/v8syn/xml/gd-lt.xml.gz">0.6M</a></td>
<td bgcolor='#e5ffc8'><a rel="nofollow" title="Gaelic-Latvian (3,380 aligned documents 0.6M links 27.5M tokens )" href="download.php?f=Europarl/v8syn/xml/gd-lv.xml.gz">0.6M</a></td>
<td bgcolor='#d9ffc6'><a rel="nofollow" title="Gaelic-Macedonian (4,502 aligned documents 1.8M links 95.9M tokens )" href="download.php?f=Europarl/v8syn/xml/gd-mk.xml.gz">1.8M</a></td>
<td bgcolor='#d9ffc6'><a rel="nofollow" title="Gaelic-Dutch (4,565 aligned documents 1.8M links 99.2M tokens )" href="download.php?f=Europarl/v8syn/xml/gd-nl.xml.gz">1.8M</a></td>
<td bgcolor='#e5ffc8'><a rel="nofollow" title="Gaelic-Polish (3,409 aligned documents 0.6M links 28.1M tokens )" href="download.php?f=Europarl/v8syn/xml/gd-pl.xml.gz">0.6M</a></td>
<td bgcolor='#daffc7'><a rel="nofollow" title="Gaelic-Portuguese (4,565 aligned documents 1.8M links 98.5M tokens )" href="download.php?f=Europarl/v8syn/xml/gd-pt.xml.gz">1.8M</a></td>
<td bgcolor='#eaffcc'><a rel="nofollow" title="Gaelic-Romanian (2,288 aligned documents 0.4M links 19.3M tokens )" href="download.php?f=Europarl/v8syn/xml/gd-ro.xml.gz">0.4M</a></td>
<td bgcolor='#e5ffc8'><a rel="nofollow" title="Gaelic-Slovak (3,389 aligned documents 0.6M links 28.4M tokens )" href="download.php?f=Europarl/v8syn/xml/gd-sk.xml.gz">0.6M</a></td>
<td bgcolor='#e5ffc8'><a rel="nofollow" title="Gaelic-Slovenian (3,347 aligned documents 0.6M links 27.6M tokens )" href="download.php?f=Europarl/v8syn/xml/gd-sl.xml.gz">0.6M</a></td>
<td bgcolor='#d7ffc7'><a rel="nofollow" title="Gaelic-Somali (5,298 aligned documents 2.1M links 116.5M tokens )" href="download.php?f=Europarl/v8syn/xml/gd-so.xml.gz">2.1M</a></td>
<td bgcolor='#daffc6'><a rel="nofollow" title="Gaelic-Swedish (4,533 aligned documents 1.7M links 87.3M tokens )" href="download.php?f=Europarl/v8syn/xml/gd-sv.xml.gz">1.7M</a></td>
<td bgcolor='#d7ffc7'><a rel="nofollow" title="Gaelic-Ukrainian (5,308 aligned documents 2.1M links 105.3M tokens )" href="download.php?f=Europarl/v8syn/xml/gd-uk.xml.gz">2.1M</a></td>
<th>gd</th>
</tr><th><a rel="nofollow" title="hu.zip: untokenized XML documents (9,718 files, 0.7M sentences, 12.6M tokens)" href="download.php?f=Europarl/v8syn/raw/hu.zip">hu</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#e5ffc9'><a rel="nofollow" title="Hungarian-Icelandic (3,583 aligned documents 0.6M links 25.4M tokens )" href="download.php?f=Europarl/v8syn/xml/hu-is.xml.gz">0.6M</a></td>
<td></td>
<td bgcolor='#e5ffc9'><a rel="nofollow" title="Hungarian-Georgian (3,586 aligned documents 0.6M links 22.0M tokens )" href="download.php?f=Europarl/v8syn/xml/hu-ka.xml.gz">0.6M</a></td>
<td></td>
<td></td>
<td bgcolor='#e6ffc9'><a rel="nofollow" title="Hungarian-Macedonian (3,083 aligned documents 0.5M links 22.9M tokens )" href="download.php?f=Europarl/v8syn/xml/hu-mk.xml.gz">0.5M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#e5ffc9'><a rel="nofollow" title="Hungarian-Somali (3,579 aligned documents 0.6M links 27.2M tokens )" href="download.php?f=Europarl/v8syn/xml/hu-so.xml.gz">0.6M</a></td>
<td></td>
<td bgcolor='#e5ffc9'><a rel="nofollow" title="Hungarian-Ukrainian (3,587 aligned documents 0.6M links 23.9M tokens )" href="download.php?f=Europarl/v8syn/xml/hu-uk.xml.gz">0.6M</a></td>
<th>hu</th>
</tr><th><a rel="nofollow" title="is.zip: untokenized XML documents (5,695 files, 2.4M sentences, 52.4M tokens)" href="download.php?f=Europarl/v8syn/raw/is.zip">is</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="Icelandic-Italian (4,961 aligned documents 1.9M links 92.0M tokens )" href="download.php?f=Europarl/v8syn/xml/is-it.xml.gz">1.9M</a></td>
<td bgcolor='#d7ffc8'><a rel="nofollow" title="Icelandic-Georgian (5,694 aligned documents 2.3M links 91.1M tokens )" href="download.php?f=Europarl/v8syn/xml/is-ka.xml.gz">2.3M</a></td>
<td bgcolor='#e4ffc8'><a rel="nofollow" title="Icelandic-Lithuanian (3,645 aligned documents 0.6M links 24.6M tokens )" href="download.php?f=Europarl/v8syn/xml/is-lt.xml.gz">0.6M</a></td>
<td bgcolor='#e4ffc8'><a rel="nofollow" title="Icelandic-Latvian (3,619 aligned documents 0.6M links 25.2M tokens )" href="download.php?f=Europarl/v8syn/xml/is-lv.xml.gz">0.6M</a></td>
<td bgcolor='#d8ffc7'><a rel="nofollow" title="Icelandic-Macedonian (4,892 aligned documents 2.0M links 92.1M tokens )" href="download.php?f=Europarl/v8syn/xml/is-mk.xml.gz">2.0M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="Icelandic-Dutch (4,913 aligned documents 1.9M links 94.8M tokens )" href="download.php?f=Europarl/v8syn/xml/is-nl.xml.gz">1.9M</a></td>
<td bgcolor='#e5ffc9'><a rel="nofollow" title="Icelandic-Polish (3,651 aligned documents 0.6M links 25.9M tokens )" href="download.php?f=Europarl/v8syn/xml/is-pl.xml.gz">0.6M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="Icelandic-Portuguese (4,913 aligned documents 1.9M links 94.0M tokens )" href="download.php?f=Europarl/v8syn/xml/is-pt.xml.gz">1.9M</a></td>
<td bgcolor='#e9ffcb'><a rel="nofollow" title="Icelandic-Romanian (2,450 aligned documents 0.4M links 17.9M tokens )" href="download.php?f=Europarl/v8syn/xml/is-ro.xml.gz">0.4M</a></td>
<td bgcolor='#e4ffc8'><a rel="nofollow" title="Icelandic-Slovak (3,630 aligned documents 0.6M links 26.2M tokens )" href="download.php?f=Europarl/v8syn/xml/is-sk.xml.gz">0.6M</a></td>
<td bgcolor='#e5ffc9'><a rel="nofollow" title="Icelandic-Slovenian (3,583 aligned documents 0.6M links 25.5M tokens )" href="download.php?f=Europarl/v8syn/xml/is-sl.xml.gz">0.6M</a></td>
<td bgcolor='#d6ffc8'><a rel="nofollow" title="Icelandic-Somali (5,687 aligned documents 2.3M links 110.9M tokens )" href="download.php?f=Europarl/v8syn/xml/is-so.xml.gz">2.3M</a></td>
<td bgcolor='#d9ffc6'><a rel="nofollow" title="Icelandic-Swedish (4,878 aligned documents 1.8M links 82.5M tokens )" href="download.php?f=Europarl/v8syn/xml/is-sv.xml.gz">1.8M</a></td>
<td bgcolor='#d7ffc8'><a rel="nofollow" title="Icelandic-Ukrainian (5,695 aligned documents 2.3M links 98.7M tokens )" href="download.php?f=Europarl/v8syn/xml/is-uk.xml.gz">2.3M</a></td>
<th>is</th>
</tr><th><a rel="nofollow" title="it.zip: untokenized XML documents (10,470 files, 2.1M sentences, 52.1M tokens)" href="download.php?f=Europarl/v8syn/raw/it.zip">it</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#d9ffc6'><a rel="nofollow" title="Italian-Georgian (4,964 aligned documents 1.8M links 80.9M tokens )" href="download.php?f=Europarl/v8syn/xml/it-ka.xml.gz">1.8M</a></td>
<td></td>
<td></td>
<td bgcolor='#daffc6'><a rel="nofollow" title="Italian-Macedonian (4,268 aligned documents 1.6M links 81.8M tokens )" href="download.php?f=Europarl/v8syn/xml/it-mk.xml.gz">1.6M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="Italian-Somali (4,957 aligned documents 1.9M links 97.4M tokens )" href="download.php?f=Europarl/v8syn/xml/it-so.xml.gz">1.9M</a></td>
<td></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="Italian-Ukrainian (4,965 aligned documents 1.9M links 87.3M tokens )" href="download.php?f=Europarl/v8syn/xml/it-uk.xml.gz">1.9M</a></td>
<th>it</th>
</tr><th><a rel="nofollow" title="ka.zip: untokenized XML documents (5,698 files, 2.5M sentences, 40.4M tokens)" href="download.php?f=Europarl/v8syn/raw/ka.zip">ka</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#e5ffc9'><a rel="nofollow" title="Georgian-Lithuanian (3,648 aligned documents 0.6M links 21.2M tokens )" href="download.php?f=Europarl/v8syn/xml/ka-lt.xml.gz">0.6M</a></td>
<td bgcolor='#e5ffc9'><a rel="nofollow" title="Georgian-Latvian (3,622 aligned documents 0.6M links 21.8M tokens )" href="download.php?f=Europarl/v8syn/xml/ka-lv.xml.gz">0.6M</a></td>
<td bgcolor='#d8ffc7'><a rel="nofollow" title="Georgian-Macedonian (4,892 aligned documents 2.0M links 80.7M tokens )" href="download.php?f=Europarl/v8syn/xml/ka-mk.xml.gz">2.0M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="Georgian-Dutch (4,916 aligned documents 1.9M links 83.5M tokens )" href="download.php?f=Europarl/v8syn/xml/ka-nl.xml.gz">1.9M</a></td>
<td bgcolor='#e5ffc9'><a rel="nofollow" title="Georgian-Polish (3,654 aligned documents 0.6M links 22.5M tokens )" href="download.php?f=Europarl/v8syn/xml/ka-pl.xml.gz">0.6M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="Georgian-Portuguese (4,916 aligned documents 1.9M links 82.8M tokens )" href="download.php?f=Europarl/v8syn/xml/ka-pt.xml.gz">1.9M</a></td>
<td bgcolor='#eaffcc'><a rel="nofollow" title="Georgian-Romanian (2,454 aligned documents 0.4M links 15.7M tokens )" href="download.php?f=Europarl/v8syn/xml/ka-ro.xml.gz">0.4M</a></td>
<td bgcolor='#e5ffc9'><a rel="nofollow" title="Georgian-Slovak (3,633 aligned documents 0.6M links 22.8M tokens )" href="download.php?f=Europarl/v8syn/xml/ka-sk.xml.gz">0.6M</a></td>
<td bgcolor='#e5ffc9'><a rel="nofollow" title="Georgian-Slovenian (3,586 aligned documents 0.6M links 22.1M tokens )" href="download.php?f=Europarl/v8syn/xml/ka-sl.xml.gz">0.6M</a></td>
<td bgcolor='#d7ffc8'><a rel="nofollow" title="Georgian-Somali (5,688 aligned documents 2.3M links 97.5M tokens )" href="download.php?f=Europarl/v8syn/xml/ka-so.xml.gz">2.3M</a></td>
<td bgcolor='#daffc7'><a rel="nofollow" title="Georgian-Swedish (4,881 aligned documents 1.8M links 72.2M tokens )" href="download.php?f=Europarl/v8syn/xml/ka-sv.xml.gz">1.8M</a></td>
<td bgcolor='#d7ffc8'><a rel="nofollow" title="Georgian-Ukrainian (5,698 aligned documents 2.3M links 85.9M tokens )" href="download.php?f=Europarl/v8syn/xml/ka-uk.xml.gz">2.3M</a></td>
<th>ka</th>
</tr><th><a rel="nofollow" title="lt.zip: untokenized XML documents (9,766 files, 0.7M sentences, 11.6M tokens)" href="download.php?f=Europarl/v8syn/raw/lt.zip">lt</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#e6ffc9'><a rel="nofollow" title="Lithuanian-Macedonian (3,142 aligned documents 0.5M links 22.2M tokens )" href="download.php?f=Europarl/v8syn/xml/lt-mk.xml.gz">0.5M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#e4ffc8'><a rel="nofollow" title="Lithuanian-Somali (3,641 aligned documents 0.6M links 26.4M tokens )" href="download.php?f=Europarl/v8syn/xml/lt-so.xml.gz">0.6M</a></td>
<td></td>
<td bgcolor='#e5ffc9'><a rel="nofollow" title="Lithuanian-Ukrainian (3,649 aligned documents 0.6M links 23.0M tokens )" href="download.php?f=Europarl/v8syn/xml/lt-uk.xml.gz">0.6M</a></td>
<th>lt</th>
</tr><th><a rel="nofollow" title="lv.zip: untokenized XML documents (9,736 files, 0.7M sentences, 12.1M tokens)" href="download.php?f=Europarl/v8syn/raw/lv.zip">lv</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#e6ffc9'><a rel="nofollow" title="Latvian-Macedonian (3,114 aligned documents 0.5M links 22.7M tokens )" href="download.php?f=Europarl/v8syn/xml/lv-mk.xml.gz">0.5M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#e4ffc8'><a rel="nofollow" title="Latvian-Somali (3,615 aligned documents 0.6M links 27.1M tokens )" href="download.php?f=Europarl/v8syn/xml/lv-so.xml.gz">0.6M</a></td>
<td></td>
<td bgcolor='#e4ffc8'><a rel="nofollow" title="Latvian-Ukrainian (3,623 aligned documents 0.6M links 23.7M tokens )" href="download.php?f=Europarl/v8syn/xml/lv-uk.xml.gz">0.6M</a></td>
<th>lv</th>
</tr><th><a rel="nofollow" title="mk.zip: untokenized XML documents (4,893 files, 2.0M sentences, 47.4M tokens)" href="download.php?f=Europarl/v8syn/raw/mk.zip">mk</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#daffc6'><a rel="nofollow" title="Macedonian-Dutch (4,227 aligned documents 1.7M links 84.1M tokens )" href="download.php?f=Europarl/v8syn/xml/mk-nl.xml.gz">1.7M</a></td>
<td bgcolor='#e6ffc9'><a rel="nofollow" title="Macedonian-Polish (3,146 aligned documents 0.5M links 23.4M tokens )" href="download.php?f=Europarl/v8syn/xml/mk-pl.xml.gz">0.5M</a></td>
<td bgcolor='#daffc6'><a rel="nofollow" title="Macedonian-Portuguese (4,229 aligned documents 1.7M links 83.5M tokens )" href="download.php?f=Europarl/v8syn/xml/mk-pt.xml.gz">1.7M</a></td>
<td bgcolor='#ebffcd'><a rel="nofollow" title="Macedonian-Romanian (2,120 aligned documents 0.3M links 16.1M tokens )" href="download.php?f=Europarl/v8syn/xml/mk-ro.xml.gz">0.3M</a></td>
<td bgcolor='#e6ffc9'><a rel="nofollow" title="Macedonian-Slovak (3,123 aligned documents 0.5M links 23.6M tokens )" href="download.php?f=Europarl/v8syn/xml/mk-sk.xml.gz">0.5M</a></td>
<td bgcolor='#e6ffc9'><a rel="nofollow" title="Macedonian-Slovenian (3,083 aligned documents 0.5M links 22.9M tokens )" href="download.php?f=Europarl/v8syn/xml/mk-sl.xml.gz">0.5M</a></td>
<td bgcolor='#d8ffc7'><a rel="nofollow" title="Macedonian-Somali (4,886 aligned documents 2.0M links 97.7M tokens )" href="download.php?f=Europarl/v8syn/xml/mk-so.xml.gz">2.0M</a></td>
<td bgcolor='#dbffc7'><a rel="nofollow" title="Macedonian-Swedish (4,202 aligned documents 1.6M links 73.6M tokens )" href="download.php?f=Europarl/v8syn/xml/mk-sv.xml.gz">1.6M</a></td>
<td bgcolor='#d8ffc7'><a rel="nofollow" title="Macedonian-Ukrainian (4,893 aligned documents 2.0M links 87.4M tokens )" href="download.php?f=Europarl/v8syn/xml/mk-uk.xml.gz">2.0M</a></td>
<th>mk</th>
</tr><th><a rel="nofollow" title="nl.zip: untokenized XML documents (10,383 files, 2.4M sentences, 54.8M tokens)" href="download.php?f=Europarl/v8syn/raw/nl.zip">nl</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#d8ffc6'><a rel="nofollow" title="Dutch-Somali (4,909 aligned documents 1.9M links 100.2M tokens )" href="download.php?f=Europarl/v8syn/xml/nl-so.xml.gz">1.9M</a></td>
<td></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="Dutch-Ukrainian (4,917 aligned documents 1.9M links 90.0M tokens )" href="download.php?f=Europarl/v8syn/xml/nl-uk.xml.gz">1.9M</a></td>
<th>nl</th>
</tr><th><a rel="nofollow" title="pl.zip: untokenized XML documents (9,793 files, 0.7M sentences, 13.1M tokens)" href="download.php?f=Europarl/v8syn/raw/pl.zip">pl</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#e4ffc8'><a rel="nofollow" title="Polish-Somali (3,647 aligned documents 0.6M links 27.8M tokens )" href="download.php?f=Europarl/v8syn/xml/pl-so.xml.gz">0.6M</a></td>
<td></td>
<td bgcolor='#e5ffc9'><a rel="nofollow" title="Polish-Ukrainian (3,655 aligned documents 0.6M links 24.4M tokens )" href="download.php?f=Europarl/v8syn/xml/pl-uk.xml.gz">0.6M</a></td>
<th>pl</th>
</tr><th><a rel="nofollow" title="pt.zip: untokenized XML documents (10,385 files, 2.2M sentences, 54.4M tokens)" href="download.php?f=Europarl/v8syn/raw/pt.zip">pt</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="Portuguese-Somali (4,909 aligned documents 1.9M links 99.4M tokens )" href="download.php?f=Europarl/v8syn/xml/pt-so.xml.gz">1.9M</a></td>
<td></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="Portuguese-Ukrainian (4,916 aligned documents 1.9M links 89.3M tokens )" href="download.php?f=Europarl/v8syn/xml/pt-uk.xml.gz">1.9M</a></td>
<th>pt</th>
</tr><th><a rel="nofollow" title="ro.zip: untokenized XML documents (7,530 files, 0.4M sentences, 9.7M tokens)" href="download.php?f=Europarl/v8syn/raw/ro.zip">ro</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#e9ffcb'><a rel="nofollow" title="Romanian-Somali (2,446 aligned documents 0.4M links 19.1M tokens )" href="download.php?f=Europarl/v8syn/xml/ro-so.xml.gz">0.4M</a></td>
<td></td>
<td bgcolor='#eaffcc'><a rel="nofollow" title="Romanian-Ukrainian (2,454 aligned documents 0.4M links 16.9M tokens )" href="download.php?f=Europarl/v8syn/xml/ro-uk.xml.gz">0.4M</a></td>
<th>ro</th>
</tr><th><a rel="nofollow" title="sk.zip: untokenized XML documents (9,740 files, 0.7M sentences, 13.1M tokens)" href="download.php?f=Europarl/v8syn/raw/sk.zip">sk</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#e4ffc8'><a rel="nofollow" title="Slovak-Somali (3,626 aligned documents 0.6M links 28.1M tokens )" href="download.php?f=Europarl/v8syn/xml/sk-so.xml.gz">0.6M</a></td>
<td></td>
<td bgcolor='#e4ffc8'><a rel="nofollow" title="Slovak-Ukrainian (3,634 aligned documents 0.6M links 24.6M tokens )" href="download.php?f=Europarl/v8syn/xml/sk-uk.xml.gz">0.6M</a></td>
<th>sk</th>
</tr><th><a rel="nofollow" title="sl.zip: untokenized XML documents (9,703 files, 0.6M sentences, 12.7M tokens)" href="download.php?f=Europarl/v8syn/raw/sl.zip">sl</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#e5ffc9'><a rel="nofollow" title="Slovenian-Somali (3,579 aligned documents 0.6M links 27.2M tokens )" href="download.php?f=Europarl/v8syn/xml/sl-so.xml.gz">0.6M</a></td>
<td></td>
<td bgcolor='#e5ffc9'><a rel="nofollow" title="Slovenian-Ukrainian (3,587 aligned documents 0.6M links 23.9M tokens )" href="download.php?f=Europarl/v8syn/xml/sl-uk.xml.gz">0.6M</a></td>
<th>sl</th>
</tr><th><a rel="nofollow" title="so.zip: untokenized XML documents (5,689 files, 2.4M sentences, 59.0M tokens)" href="download.php?f=Europarl/v8syn/raw/so.zip">so</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#d9ffc6'><a rel="nofollow" title="Somali-Swedish (4,874 aligned documents 1.8M links 87.6M tokens )" href="download.php?f=Europarl/v8syn/xml/so-sv.xml.gz">1.8M</a></td>
<td bgcolor='#d6ffc8'><a rel="nofollow" title="Somali-Ukrainian (5,689 aligned documents 2.3M links 105.2M tokens )" href="download.php?f=Europarl/v8syn/xml/so-uk.xml.gz">2.3M</a></td>
<th>so</th>
</tr><th><a rel="nofollow" title="sv.zip: untokenized XML documents (10,345 files, 2.3M sentences, 46.9M tokens)" href="download.php?f=Europarl/v8syn/raw/sv.zip">sv</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#d9ffc6'><a rel="nofollow" title="Swedish-Ukrainian (4,882 aligned documents 1.8M links 78.1M tokens )" href="download.php?f=Europarl/v8syn/xml/sv-uk.xml.gz">1.8M</a></td>
<th>sv</th>
</tr><tr><th></th>
<th>eu</th>
<th>fi</th>
<th>fr</th>
<th>gd</th>
<th>hu</th>
<th>is</th>
<th>it</th>
<th>ka</th>
<th>lt</th>
<th>lv</th>
<th>mk</th>
<th>nl</th>
<th>pl</th>
<th>pt</th>
<th>ro</th>
<th>sk</th>
<th>sl</th>
<th>so</th>
<th>sv</th>
<th>uk</th>
<th></th></tr>
</table>
</div></p></div><div id='download-moses' style='display: none;'><p>Links to zip-files with aligned plain text files, one per language (Moses format).</p><p>
<div class="sample"><table border="0" cellpadding="0">
<tr><th></th>
<th>eu</th>
<th>fi</th>
<th>fr</th>
<th>gd</th>
<th>hu</th>
<th>is</th>
<th>it</th>
<th>ka</th>
<th>lt</th>
<th>lv</th>
<th>mk</th>
<th>nl</th>
<th>pl</th>
<th>pt</th>
<th>ro</th>
<th>sk</th>
<th>sl</th>
<th>so</th>
<th>sv</th>
<th>uk</th>
<th></th></tr>
<th>bg</th>
<td bgcolor='#eaffcc'><a rel="nofollow" title="Bulgarian-Basque (0.4M links 15.1M tokens )" href="download.php?f=Europarl/v8syn/moses/bg-eu.txt.zip">0.4M</a></td>
<td></td>
<td></td>
<td bgcolor='#eaffcc'><a rel="nofollow" title="Bulgarian-Gaelic (0.4M links 19.0M tokens )" href="download.php?f=Europarl/v8syn/moses/bg-gd.txt.zip">0.4M</a></td>
<td></td>
<td bgcolor='#e9ffcb'><a rel="nofollow" title="Bulgarian-Icelandic (0.4M links 17.8M tokens )" href="download.php?f=Europarl/v8syn/moses/bg-is.txt.zip">0.4M</a></td>
<td></td>
<td bgcolor='#eaffcc'><a rel="nofollow" title="Bulgarian-Georgian (0.4M links 15.5M tokens )" href="download.php?f=Europarl/v8syn/moses/bg-ka.txt.zip">0.4M</a></td>
<td></td>
<td></td>
<td bgcolor='#ebffcd'><a rel="nofollow" title="Bulgarian-Macedonian (0.3M links 16.1M tokens )" href="download.php?f=Europarl/v8syn/moses/bg-mk.txt.zip">0.3M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#e9ffcb'><a rel="nofollow" title="Bulgarian-Somali (0.4M links 18.9M tokens )" href="download.php?f=Europarl/v8syn/moses/bg-so.txt.zip">0.4M</a></td>
<td></td>
<td bgcolor='#e9ffcb'><a rel="nofollow" title="Bulgarian-Ukrainian (0.4M links 16.7M tokens )" href="download.php?f=Europarl/v8syn/moses/bg-uk.txt.zip">0.4M</a></td>
<th>bg</th>
</tr><th>cs</th>
<td bgcolor='#e5ffc8'><a rel="nofollow" title="Czech-Basque (0.6M links 22.2M tokens )" href="download.php?f=Europarl/v8syn/moses/cs-eu.txt.zip">0.6M</a></td>
<td></td>
<td></td>
<td bgcolor='#e5ffc9'><a rel="nofollow" title="Czech-Gaelic (0.6M links 28.6M tokens )" href="download.php?f=Europarl/v8syn/moses/cs-gd.txt.zip">0.6M</a></td>
<td></td>
<td bgcolor='#e4ffc8'><a rel="nofollow" title="Czech-Icelandic (0.6M links 26.4M tokens )" href="download.php?f=Europarl/v8syn/moses/cs-is.txt.zip">0.6M</a></td>
<td></td>
<td bgcolor='#e5ffc9'><a rel="nofollow" title="Czech-Georgian (0.6M links 22.9M tokens )" href="download.php?f=Europarl/v8syn/moses/cs-ka.txt.zip">0.6M</a></td>
<td></td>
<td></td>
<td bgcolor='#e6ffc9'><a rel="nofollow" title="Czech-Macedonian (0.5M links 23.9M tokens )" href="download.php?f=Europarl/v8syn/moses/cs-mk.txt.zip">0.5M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#e4ffc8'><a rel="nofollow" title="Czech-Somali (0.6M links 28.3M tokens )" href="download.php?f=Europarl/v8syn/moses/cs-so.txt.zip">0.6M</a></td>
<td></td>
<td bgcolor='#e4ffc8'><a rel="nofollow" title="Czech-Ukrainian (0.6M links 24.8M tokens )" href="download.php?f=Europarl/v8syn/moses/cs-uk.txt.zip">0.6M</a></td>
<th>cs</th>
</tr><th>da</th>
<td bgcolor='#daffc7'><a rel="nofollow" title="Danish-Basque (1.7M links 72.8M tokens )" href="download.php?f=Europarl/v8syn/moses/da-eu.txt.zip">1.7M</a></td>
<td></td>
<td></td>
<td bgcolor='#daffc7'><a rel="nofollow" title="Danish-Gaelic (1.8M links 93.2M tokens )" href="download.php?f=Europarl/v8syn/moses/da-gd.txt.zip">1.8M</a></td>
<td></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="Danish-Icelandic (1.9M links 88.3M tokens )" href="download.php?f=Europarl/v8syn/moses/da-is.txt.zip">1.9M</a></td>
<td></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="Danish-Georgian (1.9M links 77.4M tokens )" href="download.php?f=Europarl/v8syn/moses/da-ka.txt.zip">1.9M</a></td>
<td></td>
<td></td>
<td bgcolor='#daffc6'><a rel="nofollow" title="Danish-Macedonian (1.7M links 78.4M tokens )" href="download.php?f=Europarl/v8syn/moses/da-mk.txt.zip">1.7M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="Danish-Somali (1.9M links 93.7M tokens )" href="download.php?f=Europarl/v8syn/moses/da-so.txt.zip">1.9M</a></td>
<td></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="Danish-Ukrainian (1.9M links 83.7M tokens )" href="download.php?f=Europarl/v8syn/moses/da-uk.txt.zip">1.9M</a></td>
<th>da</th>
</tr><th>de</th>
<td bgcolor='#daffc7'><a rel="nofollow" title="German-Basque (1.7M links 72.4M tokens )" href="download.php?f=Europarl/v8syn/moses/de-eu.txt.zip">1.7M</a></td>
<td></td>
<td></td>
<td bgcolor='#daffc7'><a rel="nofollow" title="German-Gaelic (1.7M links 92.4M tokens )" href="download.php?f=Europarl/v8syn/moses/de-gd.txt.zip">1.7M</a></td>
<td></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="German-Icelandic (1.9M links 87.5M tokens )" href="download.php?f=Europarl/v8syn/moses/de-is.txt.zip">1.9M</a></td>
<td></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="German-Georgian (1.8M links 76.7M tokens )" href="download.php?f=Europarl/v8syn/moses/de-ka.txt.zip">1.8M</a></td>
<td></td>
<td></td>
<td bgcolor='#daffc6'><a rel="nofollow" title="German-Macedonian (1.6M links 78.3M tokens )" href="download.php?f=Europarl/v8syn/moses/de-mk.txt.zip">1.6M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="German-Somali (1.9M links 92.8M tokens )" href="download.php?f=Europarl/v8syn/moses/de-so.txt.zip">1.9M</a></td>
<td></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="German-Ukrainian (1.9M links 83.0M tokens )" href="download.php?f=Europarl/v8syn/moses/de-uk.txt.zip">1.9M</a></td>
<th>de</th>
</tr><th>el</th>
<td bgcolor='#deffc6'><a rel="nofollow" title="Greek-Basque (1.1M links 50.4M tokens )" href="download.php?f=Europarl/v8syn/moses/el-eu.txt.zip">1.1M</a></td>
<td></td>
<td></td>
<td bgcolor='#deffc6'><a rel="nofollow" title="Greek-Gaelic (1.1M links 64.8M tokens )" href="download.php?f=Europarl/v8syn/moses/el-gd.txt.zip">1.1M</a></td>
<td></td>
<td bgcolor='#ddffc6'><a rel="nofollow" title="Greek-Icelandic (1.2M links 60.7M tokens )" href="download.php?f=Europarl/v8syn/moses/el-is.txt.zip">1.2M</a></td>
<td></td>
<td bgcolor='#deffc7'><a rel="nofollow" title="Greek-Georgian (1.2M links 53.6M tokens )" href="download.php?f=Europarl/v8syn/moses/el-ka.txt.zip">1.2M</a></td>
<td></td>
<td></td>
<td bgcolor='#dfffc6'><a rel="nofollow" title="Greek-Macedonian (1.1M links 53.7M tokens )" href="download.php?f=Europarl/v8syn/moses/el-mk.txt.zip">1.1M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ddffc6'><a rel="nofollow" title="Greek-Somali (1.2M links 64.3M tokens )" href="download.php?f=Europarl/v8syn/moses/el-so.txt.zip">1.2M</a></td>
<td></td>
<td bgcolor='#ddffc6'><a rel="nofollow" title="Greek-Ukrainian (1.2M links 57.6M tokens )" href="download.php?f=Europarl/v8syn/moses/el-uk.txt.zip">1.2M</a></td>
<th>el</th>
</tr><th>en</th>
<td bgcolor='#d7ffc7'><a rel="nofollow" title="English-Basque (2.1M links 92.3M tokens )" href="download.php?f=Europarl/v8syn/moses/en-eu.txt.zip">2.1M</a></td>
<td></td>
<td></td>
<td bgcolor='#d7ffc7'><a rel="nofollow" title="English-Gaelic (2.2M links 117.1M tokens )" href="download.php?f=Europarl/v8syn/moses/en-gd.txt.zip">2.2M</a></td>
<td></td>
<td bgcolor='#d6ffc8'><a rel="nofollow" title="English-Icelandic (2.3M links 111.5M tokens )" href="download.php?f=Europarl/v8syn/moses/en-is.txt.zip">2.3M</a></td>
<td></td>
<td bgcolor='#d7ffc8'><a rel="nofollow" title="English-Georgian (2.3M links 98.1M tokens )" href="download.php?f=Europarl/v8syn/moses/en-ka.txt.zip">2.3M</a></td>
<td></td>
<td></td>
<td bgcolor='#d8ffc7'><a rel="nofollow" title="English-Macedonian (2.0M links 98.3M tokens )" href="download.php?f=Europarl/v8syn/moses/en-mk.txt.zip">2.0M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#d6ffc8'><a rel="nofollow" title="English-Somali (2.4M links 118.0M tokens )" href="download.php?f=Europarl/v8syn/moses/en-so.txt.zip">2.4M</a></td>
<td></td>
<td bgcolor='#d6ffc8'><a rel="nofollow" title="English-Ukrainian (2.3M links 105.7M tokens )" href="download.php?f=Europarl/v8syn/moses/en-uk.txt.zip">2.3M</a></td>
<th>en</th>
</tr><th>eu</th>
<td></td>
<td bgcolor='#daffc7'><a rel="nofollow" title="Basque-Finnish (1.7M links 61.3M tokens )" href="download.php?f=Europarl/v8syn/moses/eu-fi.txt.zip">1.7M</a></td>
<td bgcolor='#d9ffc6'><a rel="nofollow" title="Basque-French (1.8M links 81.1M tokens )" href="download.php?f=Europarl/v8syn/moses/eu-fr.txt.zip">1.8M</a></td>
<td bgcolor='#d8ffc7'><a rel="nofollow" title="Basque-Gaelic (2.0M links 94.8M tokens )" href="download.php?f=Europarl/v8syn/moses/eu-gd.txt.zip">2.0M</a></td>
<td bgcolor='#e5ffc8'><a rel="nofollow" title="Basque-Hungarian (0.5M links 21.3M tokens )" href="download.php?f=Europarl/v8syn/moses/eu-hu.txt.zip">0.5M</a></td>
<td bgcolor='#d8ffc8'><a rel="nofollow" title="Basque-Icelandic (2.1M links 85.9M tokens )" href="download.php?f=Europarl/v8syn/moses/eu-is.txt.zip">2.1M</a></td>
<td bgcolor='#daffc6'><a rel="nofollow" title="Basque-Italian (1.7M links 76.2M tokens )" href="download.php?f=Europarl/v8syn/moses/eu-it.txt.zip">1.7M</a></td>
<td bgcolor='#d8ffc7'><a rel="nofollow" title="Basque-Georgian (2.1M links 74.0M tokens )" href="download.php?f=Europarl/v8syn/moses/eu-ka.txt.zip">2.1M</a></td>
<td bgcolor='#e5ffc8'><a rel="nofollow" title="Basque-Lithuanian (0.6M links 20.5M tokens )" href="download.php?f=Europarl/v8syn/moses/eu-lt.txt.zip">0.6M</a></td>
<td bgcolor='#e5ffc8'><a rel="nofollow" title="Basque-Latvian (0.6M links 21.1M tokens )" href="download.php?f=Europarl/v8syn/moses/eu-lv.txt.zip">0.6M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="Basque-Macedonian (1.9M links 80.5M tokens )" href="download.php?f=Europarl/v8syn/moses/eu-mk.txt.zip">1.9M</a></td>
<td bgcolor='#daffc7'><a rel="nofollow" title="Basque-Dutch (1.8M links 78.6M tokens )" href="download.php?f=Europarl/v8syn/moses/eu-nl.txt.zip">1.8M</a></td>
<td bgcolor='#e5ffc8'><a rel="nofollow" title="Basque-Polish (0.6M links 21.8M tokens )" href="download.php?f=Europarl/v8syn/moses/eu-pl.txt.zip">0.6M</a></td>
<td bgcolor='#daffc7'><a rel="nofollow" title="Basque-Portuguese (1.7M links 78.1M tokens )" href="download.php?f=Europarl/v8syn/moses/eu-pt.txt.zip">1.7M</a></td>
<td bgcolor='#eaffcc'><a rel="nofollow" title="Basque-Romanian (0.4M links 15.3M tokens )" href="download.php?f=Europarl/v8syn/moses/eu-ro.txt.zip">0.4M</a></td>
<td bgcolor='#e5ffc8'><a rel="nofollow" title="Basque-Slovak (0.6M links 22.0M tokens )" href="download.php?f=Europarl/v8syn/moses/eu-sk.txt.zip">0.6M</a></td>
<td bgcolor='#e5ffc8'><a rel="nofollow" title="Basque-Slovenian (0.5M links 21.3M tokens )" href="download.php?f=Europarl/v8syn/moses/eu-sl.txt.zip">0.5M</a></td>
<td bgcolor='#d8ffc8'><a rel="nofollow" title="Basque-Somali (2.1M links 91.8M tokens )" href="download.php?f=Europarl/v8syn/moses/eu-so.txt.zip">2.1M</a></td>
<td bgcolor='#daffc6'><a rel="nofollow" title="Basque-Swedish (1.7M links 68.5M tokens )" href="download.php?f=Europarl/v8syn/moses/eu-sv.txt.zip">1.7M</a></td>
<td bgcolor='#d8ffc8'><a rel="nofollow" title="Basque-Ukrainian (2.1M links 80.8M tokens )" href="download.php?f=Europarl/v8syn/moses/eu-uk.txt.zip">2.1M</a></td>
<th>eu</th>
</tr><th>fi</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#daffc7'><a rel="nofollow" title="Finnish-Gaelic (1.7M links 80.9M tokens )" href="download.php?f=Europarl/v8syn/moses/fi-gd.txt.zip">1.7M</a></td>
<td></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="Finnish-Icelandic (1.9M links 74.9M tokens )" href="download.php?f=Europarl/v8syn/moses/fi-is.txt.zip">1.9M</a></td>
<td></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="Finnish-Georgian (1.8M links 64.4M tokens )" href="download.php?f=Europarl/v8syn/moses/fi-ka.txt.zip">1.8M</a></td>
<td></td>
<td></td>
<td bgcolor='#daffc6'><a rel="nofollow" title="Finnish-Macedonian (1.6M links 67.2M tokens )" href="download.php?f=Europarl/v8syn/moses/fi-mk.txt.zip">1.6M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="Finnish-Somali (1.9M links 80.1M tokens )" href="download.php?f=Europarl/v8syn/moses/fi-so.txt.zip">1.9M</a></td>
<td></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="Finnish-Ukrainian (1.9M links 70.4M tokens )" href="download.php?f=Europarl/v8syn/moses/fi-uk.txt.zip">1.9M</a></td>
<th>fi</th>
</tr><th>fr</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#d9ffc6'><a rel="nofollow" title="French-Gaelic (1.8M links 102.1M tokens )" href="download.php?f=Europarl/v8syn/moses/fr-gd.txt.zip">1.8M</a></td>
<td></td>
<td bgcolor='#d8ffc7'><a rel="nofollow" title="French-Icelandic (2.0M links 97.5M tokens )" href="download.php?f=Europarl/v8syn/moses/fr-is.txt.zip">2.0M</a></td>
<td></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="French-Georgian (1.9M links 86.1M tokens )" href="download.php?f=Europarl/v8syn/moses/fr-ka.txt.zip">1.9M</a></td>
<td></td>
<td></td>
<td bgcolor='#daffc7'><a rel="nofollow" title="French-Macedonian (1.7M links 86.5M tokens )" href="download.php?f=Europarl/v8syn/moses/fr-mk.txt.zip">1.7M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#d8ffc7'><a rel="nofollow" title="French-Somali (2.0M links 103.0M tokens )" href="download.php?f=Europarl/v8syn/moses/fr-so.txt.zip">2.0M</a></td>
<td></td>
<td bgcolor='#d8ffc7'><a rel="nofollow" title="French-Ukrainian (2.0M links 92.7M tokens )" href="download.php?f=Europarl/v8syn/moses/fr-uk.txt.zip">2.0M</a></td>
<th>fr</th>
</tr><th>gd</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#e5ffc8'><a rel="nofollow" title="Gaelic-Hungarian (0.6M links 27.6M tokens )" href="download.php?f=Europarl/v8syn/moses/gd-hu.txt.zip">0.6M</a></td>
<td bgcolor='#d7ffc7'><a rel="nofollow" title="Gaelic-Icelandic (2.1M links 110.6M tokens )" href="download.php?f=Europarl/v8syn/moses/gd-is.txt.zip">2.1M</a></td>
<td bgcolor='#daffc7'><a rel="nofollow" title="Gaelic-Italian (1.7M links 96.8M tokens )" href="download.php?f=Europarl/v8syn/moses/gd-it.txt.zip">1.7M</a></td>
<td bgcolor='#d8ffc8'><a rel="nofollow" title="Gaelic-Georgian (2.1M links 98.2M tokens )" href="download.php?f=Europarl/v8syn/moses/gd-ka.txt.zip">2.1M</a></td>
<td bgcolor='#e5ffc8'><a rel="nofollow" title="Gaelic-Lithuanian (0.6M links 26.8M tokens )" href="download.php?f=Europarl/v8syn/moses/gd-lt.txt.zip">0.6M</a></td>
<td bgcolor='#e5ffc8'><a rel="nofollow" title="Gaelic-Latvian (0.6M links 27.5M tokens )" href="download.php?f=Europarl/v8syn/moses/gd-lv.txt.zip">0.6M</a></td>
<td bgcolor='#d9ffc6'><a rel="nofollow" title="Gaelic-Macedonian (1.8M links 95.9M tokens )" href="download.php?f=Europarl/v8syn/moses/gd-mk.txt.zip">1.8M</a></td>
<td bgcolor='#d9ffc6'><a rel="nofollow" title="Gaelic-Dutch (1.8M links 99.2M tokens )" href="download.php?f=Europarl/v8syn/moses/gd-nl.txt.zip">1.8M</a></td>
<td bgcolor='#e5ffc8'><a rel="nofollow" title="Gaelic-Polish (0.6M links 28.1M tokens )" href="download.php?f=Europarl/v8syn/moses/gd-pl.txt.zip">0.6M</a></td>
<td bgcolor='#daffc7'><a rel="nofollow" title="Gaelic-Portuguese (1.8M links 98.5M tokens )" href="download.php?f=Europarl/v8syn/moses/gd-pt.txt.zip">1.8M</a></td>
<td bgcolor='#eaffcc'><a rel="nofollow" title="Gaelic-Romanian (0.4M links 19.3M tokens )" href="download.php?f=Europarl/v8syn/moses/gd-ro.txt.zip">0.4M</a></td>
<td bgcolor='#e5ffc8'><a rel="nofollow" title="Gaelic-Slovak (0.6M links 28.4M tokens )" href="download.php?f=Europarl/v8syn/moses/gd-sk.txt.zip">0.6M</a></td>
<td bgcolor='#e5ffc8'><a rel="nofollow" title="Gaelic-Slovenian (0.6M links 27.6M tokens )" href="download.php?f=Europarl/v8syn/moses/gd-sl.txt.zip">0.6M</a></td>
<td bgcolor='#d7ffc7'><a rel="nofollow" title="Gaelic-Somali (2.1M links 116.5M tokens )" href="download.php?f=Europarl/v8syn/moses/gd-so.txt.zip">2.1M</a></td>
<td bgcolor='#daffc6'><a rel="nofollow" title="Gaelic-Swedish (1.7M links 87.3M tokens )" href="download.php?f=Europarl/v8syn/moses/gd-sv.txt.zip">1.7M</a></td>
<td bgcolor='#d7ffc7'><a rel="nofollow" title="Gaelic-Ukrainian (2.1M links 105.3M tokens )" href="download.php?f=Europarl/v8syn/moses/gd-uk.txt.zip">2.1M</a></td>
<th>gd</th>
</tr><th>hu</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#e5ffc9'><a rel="nofollow" title="Hungarian-Icelandic (0.6M links 25.4M tokens )" href="download.php?f=Europarl/v8syn/moses/hu-is.txt.zip">0.6M</a></td>
<td></td>
<td bgcolor='#e5ffc9'><a rel="nofollow" title="Hungarian-Georgian (0.6M links 22.0M tokens )" href="download.php?f=Europarl/v8syn/moses/hu-ka.txt.zip">0.6M</a></td>
<td></td>
<td></td>
<td bgcolor='#e6ffc9'><a rel="nofollow" title="Hungarian-Macedonian (0.5M links 22.9M tokens )" href="download.php?f=Europarl/v8syn/moses/hu-mk.txt.zip">0.5M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#e5ffc9'><a rel="nofollow" title="Hungarian-Somali (0.6M links 27.2M tokens )" href="download.php?f=Europarl/v8syn/moses/hu-so.txt.zip">0.6M</a></td>
<td></td>
<td bgcolor='#e5ffc9'><a rel="nofollow" title="Hungarian-Ukrainian (0.6M links 23.9M tokens )" href="download.php?f=Europarl/v8syn/moses/hu-uk.txt.zip">0.6M</a></td>
<th>hu</th>
</tr><th>is</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="Icelandic-Italian (1.9M links 92.0M tokens )" href="download.php?f=Europarl/v8syn/moses/is-it.txt.zip">1.9M</a></td>
<td bgcolor='#d7ffc8'><a rel="nofollow" title="Icelandic-Georgian (2.3M links 91.1M tokens )" href="download.php?f=Europarl/v8syn/moses/is-ka.txt.zip">2.3M</a></td>
<td bgcolor='#e4ffc8'><a rel="nofollow" title="Icelandic-Lithuanian (0.6M links 24.6M tokens )" href="download.php?f=Europarl/v8syn/moses/is-lt.txt.zip">0.6M</a></td>
<td bgcolor='#e4ffc8'><a rel="nofollow" title="Icelandic-Latvian (0.6M links 25.2M tokens )" href="download.php?f=Europarl/v8syn/moses/is-lv.txt.zip">0.6M</a></td>
<td bgcolor='#d8ffc7'><a rel="nofollow" title="Icelandic-Macedonian (2.0M links 92.1M tokens )" href="download.php?f=Europarl/v8syn/moses/is-mk.txt.zip">2.0M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="Icelandic-Dutch (1.9M links 94.8M tokens )" href="download.php?f=Europarl/v8syn/moses/is-nl.txt.zip">1.9M</a></td>
<td bgcolor='#e5ffc9'><a rel="nofollow" title="Icelandic-Polish (0.6M links 25.9M tokens )" href="download.php?f=Europarl/v8syn/moses/is-pl.txt.zip">0.6M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="Icelandic-Portuguese (1.9M links 94.0M tokens )" href="download.php?f=Europarl/v8syn/moses/is-pt.txt.zip">1.9M</a></td>
<td bgcolor='#e9ffcb'><a rel="nofollow" title="Icelandic-Romanian (0.4M links 17.9M tokens )" href="download.php?f=Europarl/v8syn/moses/is-ro.txt.zip">0.4M</a></td>
<td bgcolor='#e4ffc8'><a rel="nofollow" title="Icelandic-Slovak (0.6M links 26.2M tokens )" href="download.php?f=Europarl/v8syn/moses/is-sk.txt.zip">0.6M</a></td>
<td bgcolor='#e5ffc9'><a rel="nofollow" title="Icelandic-Slovenian (0.6M links 25.5M tokens )" href="download.php?f=Europarl/v8syn/moses/is-sl.txt.zip">0.6M</a></td>
<td bgcolor='#d6ffc8'><a rel="nofollow" title="Icelandic-Somali (2.3M links 110.9M tokens )" href="download.php?f=Europarl/v8syn/moses/is-so.txt.zip">2.3M</a></td>
<td bgcolor='#d9ffc6'><a rel="nofollow" title="Icelandic-Swedish (1.8M links 82.5M tokens )" href="download.php?f=Europarl/v8syn/moses/is-sv.txt.zip">1.8M</a></td>
<td bgcolor='#d7ffc8'><a rel="nofollow" title="Icelandic-Ukrainian (2.3M links 98.7M tokens )" href="download.php?f=Europarl/v8syn/moses/is-uk.txt.zip">2.3M</a></td>
<th>is</th>
</tr><th>it</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#d9ffc6'><a rel="nofollow" title="Italian-Georgian (1.8M links 80.9M tokens )" href="download.php?f=Europarl/v8syn/moses/it-ka.txt.zip">1.8M</a></td>
<td></td>
<td></td>
<td bgcolor='#daffc6'><a rel="nofollow" title="Italian-Macedonian (1.6M links 81.8M tokens )" href="download.php?f=Europarl/v8syn/moses/it-mk.txt.zip">1.6M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="Italian-Somali (1.9M links 97.4M tokens )" href="download.php?f=Europarl/v8syn/moses/it-so.txt.zip">1.9M</a></td>
<td></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="Italian-Ukrainian (1.9M links 87.3M tokens )" href="download.php?f=Europarl/v8syn/moses/it-uk.txt.zip">1.9M</a></td>
<th>it</th>
</tr><th>ka</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#e5ffc9'><a rel="nofollow" title="Georgian-Lithuanian (0.6M links 21.2M tokens )" href="download.php?f=Europarl/v8syn/moses/ka-lt.txt.zip">0.6M</a></td>
<td bgcolor='#e5ffc9'><a rel="nofollow" title="Georgian-Latvian (0.6M links 21.8M tokens )" href="download.php?f=Europarl/v8syn/moses/ka-lv.txt.zip">0.6M</a></td>
<td bgcolor='#d8ffc7'><a rel="nofollow" title="Georgian-Macedonian (2.0M links 80.7M tokens )" href="download.php?f=Europarl/v8syn/moses/ka-mk.txt.zip">2.0M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="Georgian-Dutch (1.9M links 83.5M tokens )" href="download.php?f=Europarl/v8syn/moses/ka-nl.txt.zip">1.9M</a></td>
<td bgcolor='#e5ffc9'><a rel="nofollow" title="Georgian-Polish (0.6M links 22.5M tokens )" href="download.php?f=Europarl/v8syn/moses/ka-pl.txt.zip">0.6M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="Georgian-Portuguese (1.9M links 82.8M tokens )" href="download.php?f=Europarl/v8syn/moses/ka-pt.txt.zip">1.9M</a></td>
<td bgcolor='#eaffcc'><a rel="nofollow" title="Georgian-Romanian (0.4M links 15.7M tokens )" href="download.php?f=Europarl/v8syn/moses/ka-ro.txt.zip">0.4M</a></td>
<td bgcolor='#e5ffc9'><a rel="nofollow" title="Georgian-Slovak (0.6M links 22.8M tokens )" href="download.php?f=Europarl/v8syn/moses/ka-sk.txt.zip">0.6M</a></td>
<td bgcolor='#e5ffc9'><a rel="nofollow" title="Georgian-Slovenian (0.6M links 22.1M tokens )" href="download.php?f=Europarl/v8syn/moses/ka-sl.txt.zip">0.6M</a></td>
<td bgcolor='#d7ffc8'><a rel="nofollow" title="Georgian-Somali (2.3M links 97.5M tokens )" href="download.php?f=Europarl/v8syn/moses/ka-so.txt.zip">2.3M</a></td>
<td bgcolor='#daffc7'><a rel="nofollow" title="Georgian-Swedish (1.8M links 72.2M tokens )" href="download.php?f=Europarl/v8syn/moses/ka-sv.txt.zip">1.8M</a></td>
<td bgcolor='#d7ffc8'><a rel="nofollow" title="Georgian-Ukrainian (2.3M links 85.9M tokens )" href="download.php?f=Europarl/v8syn/moses/ka-uk.txt.zip">2.3M</a></td>
<th>ka</th>
</tr><th>lt</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#e6ffc9'><a rel="nofollow" title="Lithuanian-Macedonian (0.5M links 22.2M tokens )" href="download.php?f=Europarl/v8syn/moses/lt-mk.txt.zip">0.5M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#e4ffc8'><a rel="nofollow" title="Lithuanian-Somali (0.6M links 26.4M tokens )" href="download.php?f=Europarl/v8syn/moses/lt-so.txt.zip">0.6M</a></td>
<td></td>
<td bgcolor='#e5ffc9'><a rel="nofollow" title="Lithuanian-Ukrainian (0.6M links 23.0M tokens )" href="download.php?f=Europarl/v8syn/moses/lt-uk.txt.zip">0.6M</a></td>
<th>lt</th>
</tr><th>lv</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#e6ffc9'><a rel="nofollow" title="Latvian-Macedonian (0.5M links 22.7M tokens )" href="download.php?f=Europarl/v8syn/moses/lv-mk.txt.zip">0.5M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#e4ffc8'><a rel="nofollow" title="Latvian-Somali (0.6M links 27.1M tokens )" href="download.php?f=Europarl/v8syn/moses/lv-so.txt.zip">0.6M</a></td>
<td></td>
<td bgcolor='#e4ffc8'><a rel="nofollow" title="Latvian-Ukrainian (0.6M links 23.7M tokens )" href="download.php?f=Europarl/v8syn/moses/lv-uk.txt.zip">0.6M</a></td>
<th>lv</th>
</tr><th>mk</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#daffc6'><a rel="nofollow" title="Macedonian-Dutch (1.7M links 84.1M tokens )" href="download.php?f=Europarl/v8syn/moses/mk-nl.txt.zip">1.7M</a></td>
<td bgcolor='#e6ffc9'><a rel="nofollow" title="Macedonian-Polish (0.5M links 23.4M tokens )" href="download.php?f=Europarl/v8syn/moses/mk-pl.txt.zip">0.5M</a></td>
<td bgcolor='#daffc6'><a rel="nofollow" title="Macedonian-Portuguese (1.7M links 83.5M tokens )" href="download.php?f=Europarl/v8syn/moses/mk-pt.txt.zip">1.7M</a></td>
<td bgcolor='#ebffcd'><a rel="nofollow" title="Macedonian-Romanian (0.3M links 16.1M tokens )" href="download.php?f=Europarl/v8syn/moses/mk-ro.txt.zip">0.3M</a></td>
<td bgcolor='#e6ffc9'><a rel="nofollow" title="Macedonian-Slovak (0.5M links 23.6M tokens )" href="download.php?f=Europarl/v8syn/moses/mk-sk.txt.zip">0.5M</a></td>
<td bgcolor='#e6ffc9'><a rel="nofollow" title="Macedonian-Slovenian (0.5M links 22.9M tokens )" href="download.php?f=Europarl/v8syn/moses/mk-sl.txt.zip">0.5M</a></td>
<td bgcolor='#d8ffc7'><a rel="nofollow" title="Macedonian-Somali (2.0M links 97.7M tokens )" href="download.php?f=Europarl/v8syn/moses/mk-so.txt.zip">2.0M</a></td>
<td bgcolor='#dbffc7'><a rel="nofollow" title="Macedonian-Swedish (1.6M links 73.6M tokens )" href="download.php?f=Europarl/v8syn/moses/mk-sv.txt.zip">1.6M</a></td>
<td bgcolor='#d8ffc7'><a rel="nofollow" title="Macedonian-Ukrainian (2.0M links 87.4M tokens )" href="download.php?f=Europarl/v8syn/moses/mk-uk.txt.zip">2.0M</a></td>
<th>mk</th>
</tr><th>nl</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#d8ffc6'><a rel="nofollow" title="Dutch-Somali (1.9M links 100.2M tokens )" href="download.php?f=Europarl/v8syn/moses/nl-so.txt.zip">1.9M</a></td>
<td></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="Dutch-Ukrainian (1.9M links 90.0M tokens )" href="download.php?f=Europarl/v8syn/moses/nl-uk.txt.zip">1.9M</a></td>
<th>nl</th>
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
<td bgcolor='#e4ffc8'><a rel="nofollow" title="Polish-Somali (0.6M links 27.8M tokens )" href="download.php?f=Europarl/v8syn/moses/pl-so.txt.zip">0.6M</a></td>
<td></td>
<td bgcolor='#e5ffc9'><a rel="nofollow" title="Polish-Ukrainian (0.6M links 24.4M tokens )" href="download.php?f=Europarl/v8syn/moses/pl-uk.txt.zip">0.6M</a></td>
<th>pl</th>
</tr><th>pt</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="Portuguese-Somali (1.9M links 99.4M tokens )" href="download.php?f=Europarl/v8syn/moses/pt-so.txt.zip">1.9M</a></td>
<td></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="Portuguese-Ukrainian (1.9M links 89.3M tokens )" href="download.php?f=Europarl/v8syn/moses/pt-uk.txt.zip">1.9M</a></td>
<th>pt</th>
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
<td bgcolor='#e9ffcb'><a rel="nofollow" title="Romanian-Somali (0.4M links 19.1M tokens )" href="download.php?f=Europarl/v8syn/moses/ro-so.txt.zip">0.4M</a></td>
<td></td>
<td bgcolor='#eaffcc'><a rel="nofollow" title="Romanian-Ukrainian (0.4M links 16.9M tokens )" href="download.php?f=Europarl/v8syn/moses/ro-uk.txt.zip">0.4M</a></td>
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
<td bgcolor='#e4ffc8'><a rel="nofollow" title="Slovak-Somali (0.6M links 28.1M tokens )" href="download.php?f=Europarl/v8syn/moses/sk-so.txt.zip">0.6M</a></td>
<td></td>
<td bgcolor='#e4ffc8'><a rel="nofollow" title="Slovak-Ukrainian (0.6M links 24.6M tokens )" href="download.php?f=Europarl/v8syn/moses/sk-uk.txt.zip">0.6M</a></td>
<th>sk</th>
</tr><th>sl</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#e5ffc9'><a rel="nofollow" title="Slovenian-Somali (0.6M links 27.2M tokens )" href="download.php?f=Europarl/v8syn/moses/sl-so.txt.zip">0.6M</a></td>
<td></td>
<td bgcolor='#e5ffc9'><a rel="nofollow" title="Slovenian-Ukrainian (0.6M links 23.9M tokens )" href="download.php?f=Europarl/v8syn/moses/sl-uk.txt.zip">0.6M</a></td>
<th>sl</th>
</tr><th>so</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#d9ffc6'><a rel="nofollow" title="Somali-Swedish (1.8M links 87.6M tokens )" href="download.php?f=Europarl/v8syn/moses/so-sv.txt.zip">1.8M</a></td>
<td bgcolor='#d6ffc8'><a rel="nofollow" title="Somali-Ukrainian (2.3M links 105.2M tokens )" href="download.php?f=Europarl/v8syn/moses/so-uk.txt.zip">2.3M</a></td>
<th>so</th>
</tr><th>sv</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#d9ffc6'><a rel="nofollow" title="Swedish-Ukrainian (1.8M links 78.1M tokens )" href="download.php?f=Europarl/v8syn/moses/sv-uk.txt.zip">1.8M</a></td>
<th>sv</th>
</tr><tr><th></th>
<th>eu</th>
<th>fi</th>
<th>fr</th>
<th>gd</th>
<th>hu</th>
<th>is</th>
<th>it</th>
<th>ka</th>
<th>lt</th>
<th>lv</th>
<th>mk</th>
<th>nl</th>
<th>pl</th>
<th>pt</th>
<th>ro</th>
<th>sk</th>
<th>sl</th>
<th>so</th>
<th>sv</th>
<th>uk</th>
<th></th></tr>
</table>
</div></p></div><div id='download-tmx' style='display: none;'><p>Links to compressed TMX files, one per language pair.</p><p>
<div class="sample"><table border="0" cellpadding="0">
<tr><th></th>
<th>eu</th>
<th>fi</th>
<th>fr</th>
<th>gd</th>
<th>hu</th>
<th>is</th>
<th>it</th>
<th>ka</th>
<th>lt</th>
<th>lv</th>
<th>mk</th>
<th>nl</th>
<th>pl</th>
<th>pt</th>
<th>ro</th>
<th>sk</th>
<th>sl</th>
<th>so</th>
<th>sv</th>
<th>uk</th>
<th></th></tr>
<th>bg</th>
<td bgcolor='#eaffcc'><a rel="nofollow" title="Bulgarian-Basque (0.4M links 15.1M tokens )" href="download.php?f=Europarl/v8syn/tmx/bg-eu.tmx.gz">0.4M</a></td>
<td></td>
<td></td>
<td bgcolor='#eaffcc'><a rel="nofollow" title="Bulgarian-Gaelic (0.4M links 19.0M tokens )" href="download.php?f=Europarl/v8syn/tmx/bg-gd.tmx.gz">0.4M</a></td>
<td></td>
<td bgcolor='#e9ffcb'><a rel="nofollow" title="Bulgarian-Icelandic (0.4M links 17.7M tokens )" href="download.php?f=Europarl/v8syn/tmx/bg-is.tmx.gz">0.4M</a></td>
<td></td>
<td bgcolor='#eaffcc'><a rel="nofollow" title="Bulgarian-Georgian (0.4M links 15.5M tokens )" href="download.php?f=Europarl/v8syn/tmx/bg-ka.tmx.gz">0.4M</a></td>
<td></td>
<td></td>
<td bgcolor='#ebffcd'><a rel="nofollow" title="Bulgarian-Macedonian (0.3M links 16.1M tokens )" href="download.php?f=Europarl/v8syn/tmx/bg-mk.tmx.gz">0.3M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#e9ffcb'><a rel="nofollow" title="Bulgarian-Somali (0.4M links 18.9M tokens )" href="download.php?f=Europarl/v8syn/tmx/bg-so.tmx.gz">0.4M</a></td>
<td></td>
<td bgcolor='#e9ffcb'><a rel="nofollow" title="Bulgarian-Ukrainian (0.4M links 16.7M tokens )" href="download.php?f=Europarl/v8syn/tmx/bg-uk.tmx.gz">0.4M</a></td>
<th>bg</th>
</tr><th>cs</th>
<td bgcolor='#e5ffc8'><a rel="nofollow" title="Czech-Basque (0.6M links 22.2M tokens )" href="download.php?f=Europarl/v8syn/tmx/cs-eu.tmx.gz">0.6M</a></td>
<td></td>
<td></td>
<td bgcolor='#e5ffc8'><a rel="nofollow" title="Czech-Gaelic (0.6M links 28.6M tokens )" href="download.php?f=Europarl/v8syn/tmx/cs-gd.tmx.gz">0.6M</a></td>
<td></td>
<td bgcolor='#e4ffc8'><a rel="nofollow" title="Czech-Icelandic (0.6M links 26.4M tokens )" href="download.php?f=Europarl/v8syn/tmx/cs-is.tmx.gz">0.6M</a></td>
<td></td>
<td bgcolor='#e5ffc9'><a rel="nofollow" title="Czech-Georgian (0.6M links 22.9M tokens )" href="download.php?f=Europarl/v8syn/tmx/cs-ka.tmx.gz">0.6M</a></td>
<td></td>
<td></td>
<td bgcolor='#e6ffc9'><a rel="nofollow" title="Czech-Macedonian (0.5M links 23.9M tokens )" href="download.php?f=Europarl/v8syn/tmx/cs-mk.tmx.gz">0.5M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#e4ffc8'><a rel="nofollow" title="Czech-Somali (0.6M links 28.3M tokens )" href="download.php?f=Europarl/v8syn/tmx/cs-so.tmx.gz">0.6M</a></td>
<td></td>
<td bgcolor='#e4ffc8'><a rel="nofollow" title="Czech-Ukrainian (0.6M links 24.8M tokens )" href="download.php?f=Europarl/v8syn/tmx/cs-uk.tmx.gz">0.6M</a></td>
<th>cs</th>
</tr><th>da</th>
<td bgcolor='#daffc7'><a rel="nofollow" title="Danish-Basque (1.7M links 72.8M tokens )" href="download.php?f=Europarl/v8syn/tmx/da-eu.tmx.gz">1.7M</a></td>
<td></td>
<td></td>
<td bgcolor='#daffc7'><a rel="nofollow" title="Danish-Gaelic (1.7M links 93.2M tokens )" href="download.php?f=Europarl/v8syn/tmx/da-gd.tmx.gz">1.7M</a></td>
<td></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="Danish-Icelandic (1.9M links 88.3M tokens )" href="download.php?f=Europarl/v8syn/tmx/da-is.tmx.gz">1.9M</a></td>
<td></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="Danish-Georgian (1.9M links 77.4M tokens )" href="download.php?f=Europarl/v8syn/tmx/da-ka.tmx.gz">1.9M</a></td>
<td></td>
<td></td>
<td bgcolor='#daffc6'><a rel="nofollow" title="Danish-Macedonian (1.7M links 78.4M tokens )" href="download.php?f=Europarl/v8syn/tmx/da-mk.tmx.gz">1.7M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="Danish-Somali (1.9M links 93.7M tokens )" href="download.php?f=Europarl/v8syn/tmx/da-so.tmx.gz">1.9M</a></td>
<td></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="Danish-Ukrainian (1.9M links 83.6M tokens )" href="download.php?f=Europarl/v8syn/tmx/da-uk.tmx.gz">1.9M</a></td>
<th>da</th>
</tr><th>de</th>
<td bgcolor='#daffc7'><a rel="nofollow" title="German-Basque (1.7M links 72.4M tokens )" href="download.php?f=Europarl/v8syn/tmx/de-eu.tmx.gz">1.7M</a></td>
<td></td>
<td></td>
<td bgcolor='#daffc7'><a rel="nofollow" title="German-Gaelic (1.7M links 92.4M tokens )" href="download.php?f=Europarl/v8syn/tmx/de-gd.tmx.gz">1.7M</a></td>
<td></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="German-Icelandic (1.9M links 87.5M tokens )" href="download.php?f=Europarl/v8syn/tmx/de-is.tmx.gz">1.9M</a></td>
<td></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="German-Georgian (1.8M links 76.7M tokens )" href="download.php?f=Europarl/v8syn/tmx/de-ka.tmx.gz">1.8M</a></td>
<td></td>
<td></td>
<td bgcolor='#daffc6'><a rel="nofollow" title="German-Macedonian (1.6M links 78.3M tokens )" href="download.php?f=Europarl/v8syn/tmx/de-mk.tmx.gz">1.6M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="German-Somali (1.9M links 92.8M tokens )" href="download.php?f=Europarl/v8syn/tmx/de-so.tmx.gz">1.9M</a></td>
<td></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="German-Ukrainian (1.9M links 82.9M tokens )" href="download.php?f=Europarl/v8syn/tmx/de-uk.tmx.gz">1.9M</a></td>
<th>de</th>
</tr><th>el</th>
<td bgcolor='#deffc6'><a rel="nofollow" title="Greek-Basque (1.1M links 50.4M tokens )" href="download.php?f=Europarl/v8syn/tmx/el-eu.tmx.gz">1.1M</a></td>
<td></td>
<td></td>
<td bgcolor='#deffc6'><a rel="nofollow" title="Greek-Gaelic (1.1M links 64.8M tokens )" href="download.php?f=Europarl/v8syn/tmx/el-gd.tmx.gz">1.1M</a></td>
<td></td>
<td bgcolor='#ddffc6'><a rel="nofollow" title="Greek-Icelandic (1.2M links 60.7M tokens )" href="download.php?f=Europarl/v8syn/tmx/el-is.tmx.gz">1.2M</a></td>
<td></td>
<td bgcolor='#deffc7'><a rel="nofollow" title="Greek-Georgian (1.2M links 53.6M tokens )" href="download.php?f=Europarl/v8syn/tmx/el-ka.tmx.gz">1.2M</a></td>
<td></td>
<td></td>
<td bgcolor='#dfffc6'><a rel="nofollow" title="Greek-Macedonian (1.1M links 53.7M tokens )" href="download.php?f=Europarl/v8syn/tmx/el-mk.tmx.gz">1.1M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#ddffc6'><a rel="nofollow" title="Greek-Somali (1.2M links 64.3M tokens )" href="download.php?f=Europarl/v8syn/tmx/el-so.tmx.gz">1.2M</a></td>
<td></td>
<td bgcolor='#ddffc6'><a rel="nofollow" title="Greek-Ukrainian (1.2M links 57.6M tokens )" href="download.php?f=Europarl/v8syn/tmx/el-uk.tmx.gz">1.2M</a></td>
<th>el</th>
</tr><th>en</th>
<td bgcolor='#d8ffc8'><a rel="nofollow" title="English-Basque (2.1M links 92.3M tokens )" href="download.php?f=Europarl/v8syn/tmx/en-eu.tmx.gz">2.1M</a></td>
<td></td>
<td></td>
<td bgcolor='#d7ffc7'><a rel="nofollow" title="English-Gaelic (2.1M links 117.1M tokens )" href="download.php?f=Europarl/v8syn/tmx/en-gd.tmx.gz">2.1M</a></td>
<td></td>
<td bgcolor='#d6ffc8'><a rel="nofollow" title="English-Icelandic (2.3M links 111.4M tokens )" href="download.php?f=Europarl/v8syn/tmx/en-is.tmx.gz">2.3M</a></td>
<td></td>
<td bgcolor='#d7ffc8'><a rel="nofollow" title="English-Georgian (2.3M links 98.1M tokens )" href="download.php?f=Europarl/v8syn/tmx/en-ka.tmx.gz">2.3M</a></td>
<td></td>
<td></td>
<td bgcolor='#d8ffc7'><a rel="nofollow" title="English-Macedonian (2.0M links 98.3M tokens )" href="download.php?f=Europarl/v8syn/tmx/en-mk.tmx.gz">2.0M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#d6ffc8'><a rel="nofollow" title="English-Somali (2.3M links 117.9M tokens )" href="download.php?f=Europarl/v8syn/tmx/en-so.tmx.gz">2.3M</a></td>
<td></td>
<td bgcolor='#d6ffc8'><a rel="nofollow" title="English-Ukrainian (2.3M links 105.7M tokens )" href="download.php?f=Europarl/v8syn/tmx/en-uk.tmx.gz">2.3M</a></td>
<th>en</th>
</tr><th>eu</th>
<td></td>
<td bgcolor='#daffc7'><a rel="nofollow" title="Basque-Finnish (1.7M links 61.3M tokens )" href="download.php?f=Europarl/v8syn/tmx/eu-fi.tmx.gz">1.7M</a></td>
<td bgcolor='#d9ffc6'><a rel="nofollow" title="Basque-French (1.8M links 81.1M tokens )" href="download.php?f=Europarl/v8syn/tmx/eu-fr.tmx.gz">1.8M</a></td>
<td bgcolor='#d8ffc7'><a rel="nofollow" title="Basque-Gaelic (2.0M links 94.8M tokens )" href="download.php?f=Europarl/v8syn/tmx/eu-gd.tmx.gz">2.0M</a></td>
<td bgcolor='#e5ffc8'><a rel="nofollow" title="Basque-Hungarian (0.5M links 21.2M tokens )" href="download.php?f=Europarl/v8syn/tmx/eu-hu.tmx.gz">0.5M</a></td>
<td bgcolor='#d8ffc8'><a rel="nofollow" title="Basque-Icelandic (2.1M links 85.9M tokens )" href="download.php?f=Europarl/v8syn/tmx/eu-is.tmx.gz">2.1M</a></td>
<td bgcolor='#daffc6'><a rel="nofollow" title="Basque-Italian (1.7M links 76.2M tokens )" href="download.php?f=Europarl/v8syn/tmx/eu-it.tmx.gz">1.7M</a></td>
<td bgcolor='#d8ffc7'><a rel="nofollow" title="Basque-Georgian (2.1M links 73.9M tokens )" href="download.php?f=Europarl/v8syn/tmx/eu-ka.tmx.gz">2.1M</a></td>
<td bgcolor='#e5ffc8'><a rel="nofollow" title="Basque-Lithuanian (0.6M links 20.5M tokens )" href="download.php?f=Europarl/v8syn/tmx/eu-lt.tmx.gz">0.6M</a></td>
<td bgcolor='#e5ffc8'><a rel="nofollow" title="Basque-Latvian (0.6M links 21.1M tokens )" href="download.php?f=Europarl/v8syn/tmx/eu-lv.tmx.gz">0.6M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="Basque-Macedonian (1.9M links 80.4M tokens )" href="download.php?f=Europarl/v8syn/tmx/eu-mk.tmx.gz">1.9M</a></td>
<td bgcolor='#daffc7'><a rel="nofollow" title="Basque-Dutch (1.8M links 78.6M tokens )" href="download.php?f=Europarl/v8syn/tmx/eu-nl.tmx.gz">1.8M</a></td>
<td bgcolor='#e5ffc8'><a rel="nofollow" title="Basque-Polish (0.6M links 21.7M tokens )" href="download.php?f=Europarl/v8syn/tmx/eu-pl.tmx.gz">0.6M</a></td>
<td bgcolor='#daffc7'><a rel="nofollow" title="Basque-Portuguese (1.7M links 78.1M tokens )" href="download.php?f=Europarl/v8syn/tmx/eu-pt.tmx.gz">1.7M</a></td>
<td bgcolor='#eaffcc'><a rel="nofollow" title="Basque-Romanian (0.4M links 15.3M tokens )" href="download.php?f=Europarl/v8syn/tmx/eu-ro.tmx.gz">0.4M</a></td>
<td bgcolor='#e5ffc8'><a rel="nofollow" title="Basque-Slovak (0.6M links 22.0M tokens )" href="download.php?f=Europarl/v8syn/tmx/eu-sk.tmx.gz">0.6M</a></td>
<td bgcolor='#e5ffc8'><a rel="nofollow" title="Basque-Slovenian (0.5M links 21.3M tokens )" href="download.php?f=Europarl/v8syn/tmx/eu-sl.tmx.gz">0.5M</a></td>
<td bgcolor='#d8ffc8'><a rel="nofollow" title="Basque-Somali (2.1M links 91.8M tokens )" href="download.php?f=Europarl/v8syn/tmx/eu-so.tmx.gz">2.1M</a></td>
<td bgcolor='#daffc6'><a rel="nofollow" title="Basque-Swedish (1.7M links 68.5M tokens )" href="download.php?f=Europarl/v8syn/tmx/eu-sv.tmx.gz">1.7M</a></td>
<td bgcolor='#d8ffc8'><a rel="nofollow" title="Basque-Ukrainian (2.1M links 80.7M tokens )" href="download.php?f=Europarl/v8syn/tmx/eu-uk.tmx.gz">2.1M</a></td>
<th>eu</th>
</tr><th>fi</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#daffc7'><a rel="nofollow" title="Finnish-Gaelic (1.7M links 80.8M tokens )" href="download.php?f=Europarl/v8syn/tmx/fi-gd.tmx.gz">1.7M</a></td>
<td></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="Finnish-Icelandic (1.9M links 74.8M tokens )" href="download.php?f=Europarl/v8syn/tmx/fi-is.tmx.gz">1.9M</a></td>
<td></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="Finnish-Georgian (1.8M links 64.4M tokens )" href="download.php?f=Europarl/v8syn/tmx/fi-ka.tmx.gz">1.8M</a></td>
<td></td>
<td></td>
<td bgcolor='#daffc6'><a rel="nofollow" title="Finnish-Macedonian (1.6M links 67.1M tokens )" href="download.php?f=Europarl/v8syn/tmx/fi-mk.tmx.gz">1.6M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="Finnish-Somali (1.9M links 80.1M tokens )" href="download.php?f=Europarl/v8syn/tmx/fi-so.tmx.gz">1.9M</a></td>
<td></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="Finnish-Ukrainian (1.9M links 70.3M tokens )" href="download.php?f=Europarl/v8syn/tmx/fi-uk.tmx.gz">1.9M</a></td>
<th>fi</th>
</tr><th>fr</th>
<td></td>
<td></td>
<td></td>
<td bgcolor='#d9ffc6'><a rel="nofollow" title="French-Gaelic (1.8M links 102.1M tokens )" href="download.php?f=Europarl/v8syn/tmx/fr-gd.tmx.gz">1.8M</a></td>
<td></td>
<td bgcolor='#d8ffc7'><a rel="nofollow" title="French-Icelandic (2.0M links 97.5M tokens )" href="download.php?f=Europarl/v8syn/tmx/fr-is.tmx.gz">2.0M</a></td>
<td></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="French-Georgian (1.9M links 86.0M tokens )" href="download.php?f=Europarl/v8syn/tmx/fr-ka.tmx.gz">1.9M</a></td>
<td></td>
<td></td>
<td bgcolor='#daffc7'><a rel="nofollow" title="French-Macedonian (1.7M links 86.5M tokens )" href="download.php?f=Europarl/v8syn/tmx/fr-mk.tmx.gz">1.7M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#d8ffc7'><a rel="nofollow" title="French-Somali (2.0M links 103.0M tokens )" href="download.php?f=Europarl/v8syn/tmx/fr-so.tmx.gz">2.0M</a></td>
<td></td>
<td bgcolor='#d8ffc7'><a rel="nofollow" title="French-Ukrainian (2.0M links 92.6M tokens )" href="download.php?f=Europarl/v8syn/tmx/fr-uk.tmx.gz">2.0M</a></td>
<th>fr</th>
</tr><th>gd</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#e5ffc8'><a rel="nofollow" title="Gaelic-Hungarian (0.6M links 27.6M tokens )" href="download.php?f=Europarl/v8syn/tmx/gd-hu.tmx.gz">0.6M</a></td>
<td bgcolor='#d7ffc7'><a rel="nofollow" title="Gaelic-Icelandic (2.1M links 110.5M tokens )" href="download.php?f=Europarl/v8syn/tmx/gd-is.tmx.gz">2.1M</a></td>
<td bgcolor='#daffc6'><a rel="nofollow" title="Gaelic-Italian (1.7M links 96.8M tokens )" href="download.php?f=Europarl/v8syn/tmx/gd-it.tmx.gz">1.7M</a></td>
<td bgcolor='#d8ffc8'><a rel="nofollow" title="Gaelic-Georgian (2.1M links 98.2M tokens )" href="download.php?f=Europarl/v8syn/tmx/gd-ka.tmx.gz">2.1M</a></td>
<td bgcolor='#e5ffc8'><a rel="nofollow" title="Gaelic-Lithuanian (0.6M links 26.8M tokens )" href="download.php?f=Europarl/v8syn/tmx/gd-lt.tmx.gz">0.6M</a></td>
<td bgcolor='#e5ffc8'><a rel="nofollow" title="Gaelic-Latvian (0.6M links 27.5M tokens )" href="download.php?f=Europarl/v8syn/tmx/gd-lv.tmx.gz">0.6M</a></td>
<td bgcolor='#d9ffc6'><a rel="nofollow" title="Gaelic-Macedonian (1.8M links 95.9M tokens )" href="download.php?f=Europarl/v8syn/tmx/gd-mk.tmx.gz">1.8M</a></td>
<td bgcolor='#d9ffc6'><a rel="nofollow" title="Gaelic-Dutch (1.8M links 99.2M tokens )" href="download.php?f=Europarl/v8syn/tmx/gd-nl.tmx.gz">1.8M</a></td>
<td bgcolor='#e5ffc8'><a rel="nofollow" title="Gaelic-Polish (0.6M links 28.1M tokens )" href="download.php?f=Europarl/v8syn/tmx/gd-pl.tmx.gz">0.6M</a></td>
<td bgcolor='#daffc7'><a rel="nofollow" title="Gaelic-Portuguese (1.8M links 98.5M tokens )" href="download.php?f=Europarl/v8syn/tmx/gd-pt.tmx.gz">1.8M</a></td>
<td bgcolor='#eaffcc'><a rel="nofollow" title="Gaelic-Romanian (0.4M links 19.3M tokens )" href="download.php?f=Europarl/v8syn/tmx/gd-ro.tmx.gz">0.4M</a></td>
<td bgcolor='#e5ffc8'><a rel="nofollow" title="Gaelic-Slovak (0.6M links 28.4M tokens )" href="download.php?f=Europarl/v8syn/tmx/gd-sk.tmx.gz">0.6M</a></td>
<td bgcolor='#e5ffc8'><a rel="nofollow" title="Gaelic-Slovenian (0.6M links 27.6M tokens )" href="download.php?f=Europarl/v8syn/tmx/gd-sl.tmx.gz">0.6M</a></td>
<td bgcolor='#d7ffc7'><a rel="nofollow" title="Gaelic-Somali (2.1M links 116.5M tokens )" href="download.php?f=Europarl/v8syn/tmx/gd-so.tmx.gz">2.1M</a></td>
<td bgcolor='#daffc6'><a rel="nofollow" title="Gaelic-Swedish (1.7M links 87.3M tokens )" href="download.php?f=Europarl/v8syn/tmx/gd-sv.tmx.gz">1.7M</a></td>
<td bgcolor='#d7ffc7'><a rel="nofollow" title="Gaelic-Ukrainian (2.1M links 105.2M tokens )" href="download.php?f=Europarl/v8syn/tmx/gd-uk.tmx.gz">2.1M</a></td>
<th>gd</th>
</tr><th>hu</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#e5ffc9'><a rel="nofollow" title="Hungarian-Icelandic (0.6M links 25.4M tokens )" href="download.php?f=Europarl/v8syn/tmx/hu-is.tmx.gz">0.6M</a></td>
<td></td>
<td bgcolor='#e5ffc9'><a rel="nofollow" title="Hungarian-Georgian (0.6M links 22.0M tokens )" href="download.php?f=Europarl/v8syn/tmx/hu-ka.tmx.gz">0.6M</a></td>
<td></td>
<td></td>
<td bgcolor='#e6ffc9'><a rel="nofollow" title="Hungarian-Macedonian (0.5M links 22.9M tokens )" href="download.php?f=Europarl/v8syn/tmx/hu-mk.tmx.gz">0.5M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#e5ffc9'><a rel="nofollow" title="Hungarian-Somali (0.6M links 27.2M tokens )" href="download.php?f=Europarl/v8syn/tmx/hu-so.tmx.gz">0.6M</a></td>
<td></td>
<td bgcolor='#e5ffc9'><a rel="nofollow" title="Hungarian-Ukrainian (0.6M links 23.8M tokens )" href="download.php?f=Europarl/v8syn/tmx/hu-uk.tmx.gz">0.6M</a></td>
<th>hu</th>
</tr><th>is</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="Icelandic-Italian (1.9M links 92.0M tokens )" href="download.php?f=Europarl/v8syn/tmx/is-it.tmx.gz">1.9M</a></td>
<td bgcolor='#d7ffc8'><a rel="nofollow" title="Icelandic-Georgian (2.3M links 91.0M tokens )" href="download.php?f=Europarl/v8syn/tmx/is-ka.tmx.gz">2.3M</a></td>
<td bgcolor='#e4ffc8'><a rel="nofollow" title="Icelandic-Lithuanian (0.6M links 24.6M tokens )" href="download.php?f=Europarl/v8syn/tmx/is-lt.tmx.gz">0.6M</a></td>
<td bgcolor='#e4ffc8'><a rel="nofollow" title="Icelandic-Latvian (0.6M links 25.2M tokens )" href="download.php?f=Europarl/v8syn/tmx/is-lv.tmx.gz">0.6M</a></td>
<td bgcolor='#d8ffc7'><a rel="nofollow" title="Icelandic-Macedonian (2.0M links 92.1M tokens )" href="download.php?f=Europarl/v8syn/tmx/is-mk.tmx.gz">2.0M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="Icelandic-Dutch (1.9M links 94.8M tokens )" href="download.php?f=Europarl/v8syn/tmx/is-nl.tmx.gz">1.9M</a></td>
<td bgcolor='#e5ffc9'><a rel="nofollow" title="Icelandic-Polish (0.6M links 25.9M tokens )" href="download.php?f=Europarl/v8syn/tmx/is-pl.tmx.gz">0.6M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="Icelandic-Portuguese (1.9M links 94.0M tokens )" href="download.php?f=Europarl/v8syn/tmx/is-pt.tmx.gz">1.9M</a></td>
<td bgcolor='#e9ffcb'><a rel="nofollow" title="Icelandic-Romanian (0.4M links 17.9M tokens )" href="download.php?f=Europarl/v8syn/tmx/is-ro.tmx.gz">0.4M</a></td>
<td bgcolor='#e4ffc8'><a rel="nofollow" title="Icelandic-Slovak (0.6M links 26.2M tokens )" href="download.php?f=Europarl/v8syn/tmx/is-sk.tmx.gz">0.6M</a></td>
<td bgcolor='#e5ffc9'><a rel="nofollow" title="Icelandic-Slovenian (0.6M links 25.4M tokens )" href="download.php?f=Europarl/v8syn/tmx/is-sl.tmx.gz">0.6M</a></td>
<td bgcolor='#d6ffc8'><a rel="nofollow" title="Icelandic-Somali (2.3M links 110.9M tokens )" href="download.php?f=Europarl/v8syn/tmx/is-so.tmx.gz">2.3M</a></td>
<td bgcolor='#d9ffc6'><a rel="nofollow" title="Icelandic-Swedish (1.8M links 82.5M tokens )" href="download.php?f=Europarl/v8syn/tmx/is-sv.tmx.gz">1.8M</a></td>
<td bgcolor='#d7ffc8'><a rel="nofollow" title="Icelandic-Ukrainian (2.3M links 98.6M tokens )" href="download.php?f=Europarl/v8syn/tmx/is-uk.tmx.gz">2.3M</a></td>
<th>is</th>
</tr><th>it</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#d9ffc6'><a rel="nofollow" title="Italian-Georgian (1.8M links 80.9M tokens )" href="download.php?f=Europarl/v8syn/tmx/it-ka.tmx.gz">1.8M</a></td>
<td></td>
<td></td>
<td bgcolor='#dbffc7'><a rel="nofollow" title="Italian-Macedonian (1.6M links 81.8M tokens )" href="download.php?f=Europarl/v8syn/tmx/it-mk.tmx.gz">1.6M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="Italian-Somali (1.9M links 97.4M tokens )" href="download.php?f=Europarl/v8syn/tmx/it-so.tmx.gz">1.9M</a></td>
<td></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="Italian-Ukrainian (1.8M links 87.2M tokens )" href="download.php?f=Europarl/v8syn/tmx/it-uk.tmx.gz">1.8M</a></td>
<th>it</th>
</tr><th>ka</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#e5ffc9'><a rel="nofollow" title="Georgian-Lithuanian (0.6M links 21.2M tokens )" href="download.php?f=Europarl/v8syn/tmx/ka-lt.tmx.gz">0.6M</a></td>
<td bgcolor='#e5ffc9'><a rel="nofollow" title="Georgian-Latvian (0.6M links 21.8M tokens )" href="download.php?f=Europarl/v8syn/tmx/ka-lv.tmx.gz">0.6M</a></td>
<td bgcolor='#d8ffc7'><a rel="nofollow" title="Georgian-Macedonian (2.0M links 80.7M tokens )" href="download.php?f=Europarl/v8syn/tmx/ka-mk.tmx.gz">2.0M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="Georgian-Dutch (1.9M links 83.5M tokens )" href="download.php?f=Europarl/v8syn/tmx/ka-nl.tmx.gz">1.9M</a></td>
<td bgcolor='#e5ffc9'><a rel="nofollow" title="Georgian-Polish (0.6M links 22.5M tokens )" href="download.php?f=Europarl/v8syn/tmx/ka-pl.tmx.gz">0.6M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="Georgian-Portuguese (1.9M links 82.8M tokens )" href="download.php?f=Europarl/v8syn/tmx/ka-pt.tmx.gz">1.9M</a></td>
<td bgcolor='#eaffcc'><a rel="nofollow" title="Georgian-Romanian (0.4M links 15.7M tokens )" href="download.php?f=Europarl/v8syn/tmx/ka-ro.tmx.gz">0.4M</a></td>
<td bgcolor='#e5ffc9'><a rel="nofollow" title="Georgian-Slovak (0.6M links 22.8M tokens )" href="download.php?f=Europarl/v8syn/tmx/ka-sk.tmx.gz">0.6M</a></td>
<td bgcolor='#e5ffc9'><a rel="nofollow" title="Georgian-Slovenian (0.6M links 22.1M tokens )" href="download.php?f=Europarl/v8syn/tmx/ka-sl.tmx.gz">0.6M</a></td>
<td bgcolor='#d7ffc8'><a rel="nofollow" title="Georgian-Somali (2.3M links 97.5M tokens )" href="download.php?f=Europarl/v8syn/tmx/ka-so.tmx.gz">2.3M</a></td>
<td bgcolor='#daffc7'><a rel="nofollow" title="Georgian-Swedish (1.8M links 72.2M tokens )" href="download.php?f=Europarl/v8syn/tmx/ka-sv.tmx.gz">1.8M</a></td>
<td bgcolor='#d7ffc8'><a rel="nofollow" title="Georgian-Ukrainian (2.3M links 85.8M tokens )" href="download.php?f=Europarl/v8syn/tmx/ka-uk.tmx.gz">2.3M</a></td>
<th>ka</th>
</tr><th>lt</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#e6ffc9'><a rel="nofollow" title="Lithuanian-Macedonian (0.5M links 22.2M tokens )" href="download.php?f=Europarl/v8syn/tmx/lt-mk.tmx.gz">0.5M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#e4ffc8'><a rel="nofollow" title="Lithuanian-Somali (0.6M links 26.4M tokens )" href="download.php?f=Europarl/v8syn/tmx/lt-so.tmx.gz">0.6M</a></td>
<td></td>
<td bgcolor='#e5ffc9'><a rel="nofollow" title="Lithuanian-Ukrainian (0.6M links 23.0M tokens )" href="download.php?f=Europarl/v8syn/tmx/lt-uk.tmx.gz">0.6M</a></td>
<th>lt</th>
</tr><th>lv</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#e6ffc9'><a rel="nofollow" title="Latvian-Macedonian (0.5M links 22.7M tokens )" href="download.php?f=Europarl/v8syn/tmx/lv-mk.tmx.gz">0.5M</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#e4ffc8'><a rel="nofollow" title="Latvian-Somali (0.6M links 27.1M tokens )" href="download.php?f=Europarl/v8syn/tmx/lv-so.tmx.gz">0.6M</a></td>
<td></td>
<td bgcolor='#e5ffc9'><a rel="nofollow" title="Latvian-Ukrainian (0.6M links 23.6M tokens )" href="download.php?f=Europarl/v8syn/tmx/lv-uk.tmx.gz">0.6M</a></td>
<th>lv</th>
</tr><th>mk</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#daffc6'><a rel="nofollow" title="Macedonian-Dutch (1.7M links 84.1M tokens )" href="download.php?f=Europarl/v8syn/tmx/mk-nl.tmx.gz">1.7M</a></td>
<td bgcolor='#e6ffc9'><a rel="nofollow" title="Macedonian-Polish (0.5M links 23.4M tokens )" href="download.php?f=Europarl/v8syn/tmx/mk-pl.tmx.gz">0.5M</a></td>
<td bgcolor='#daffc6'><a rel="nofollow" title="Macedonian-Portuguese (1.7M links 83.4M tokens )" href="download.php?f=Europarl/v8syn/tmx/mk-pt.tmx.gz">1.7M</a></td>
<td bgcolor='#ebffcd'><a rel="nofollow" title="Macedonian-Romanian (0.3M links 16.1M tokens )" href="download.php?f=Europarl/v8syn/tmx/mk-ro.tmx.gz">0.3M</a></td>
<td bgcolor='#e6ffc9'><a rel="nofollow" title="Macedonian-Slovak (0.5M links 23.6M tokens )" href="download.php?f=Europarl/v8syn/tmx/mk-sk.tmx.gz">0.5M</a></td>
<td bgcolor='#e6ffc9'><a rel="nofollow" title="Macedonian-Slovenian (0.5M links 22.9M tokens )" href="download.php?f=Europarl/v8syn/tmx/mk-sl.tmx.gz">0.5M</a></td>
<td bgcolor='#d8ffc7'><a rel="nofollow" title="Macedonian-Somali (2.0M links 97.7M tokens )" href="download.php?f=Europarl/v8syn/tmx/mk-so.tmx.gz">2.0M</a></td>
<td bgcolor='#dbffc6'><a rel="nofollow" title="Macedonian-Swedish (1.6M links 73.6M tokens )" href="download.php?f=Europarl/v8syn/tmx/mk-sv.tmx.gz">1.6M</a></td>
<td bgcolor='#d8ffc7'><a rel="nofollow" title="Macedonian-Ukrainian (2.0M links 87.3M tokens )" href="download.php?f=Europarl/v8syn/tmx/mk-uk.tmx.gz">2.0M</a></td>
<th>mk</th>
</tr><th>nl</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="Dutch-Somali (1.9M links 100.2M tokens )" href="download.php?f=Europarl/v8syn/tmx/nl-so.tmx.gz">1.9M</a></td>
<td></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="Dutch-Ukrainian (1.9M links 90.0M tokens )" href="download.php?f=Europarl/v8syn/tmx/nl-uk.tmx.gz">1.9M</a></td>
<th>nl</th>
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
<td bgcolor='#e4ffc8'><a rel="nofollow" title="Polish-Somali (0.6M links 27.8M tokens )" href="download.php?f=Europarl/v8syn/tmx/pl-so.tmx.gz">0.6M</a></td>
<td></td>
<td bgcolor='#e5ffc9'><a rel="nofollow" title="Polish-Ukrainian (0.6M links 24.4M tokens )" href="download.php?f=Europarl/v8syn/tmx/pl-uk.tmx.gz">0.6M</a></td>
<th>pl</th>
</tr><th>pt</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="Portuguese-Somali (1.9M links 99.4M tokens )" href="download.php?f=Europarl/v8syn/tmx/pt-so.tmx.gz">1.9M</a></td>
<td></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="Portuguese-Ukrainian (1.9M links 89.3M tokens )" href="download.php?f=Europarl/v8syn/tmx/pt-uk.tmx.gz">1.9M</a></td>
<th>pt</th>
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
<td bgcolor='#e9ffcb'><a rel="nofollow" title="Romanian-Somali (0.4M links 19.1M tokens )" href="download.php?f=Europarl/v8syn/tmx/ro-so.tmx.gz">0.4M</a></td>
<td></td>
<td bgcolor='#eaffcc'><a rel="nofollow" title="Romanian-Ukrainian (0.4M links 16.9M tokens )" href="download.php?f=Europarl/v8syn/tmx/ro-uk.tmx.gz">0.4M</a></td>
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
<td bgcolor='#e4ffc8'><a rel="nofollow" title="Slovak-Somali (0.6M links 28.0M tokens )" href="download.php?f=Europarl/v8syn/tmx/sk-so.tmx.gz">0.6M</a></td>
<td></td>
<td bgcolor='#e4ffc8'><a rel="nofollow" title="Slovak-Ukrainian (0.6M links 24.6M tokens )" href="download.php?f=Europarl/v8syn/tmx/sk-uk.tmx.gz">0.6M</a></td>
<th>sk</th>
</tr><th>sl</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#e5ffc9'><a rel="nofollow" title="Slovenian-Somali (0.6M links 27.2M tokens )" href="download.php?f=Europarl/v8syn/tmx/sl-so.tmx.gz">0.6M</a></td>
<td></td>
<td bgcolor='#e5ffc9'><a rel="nofollow" title="Slovenian-Ukrainian (0.6M links 23.9M tokens )" href="download.php?f=Europarl/v8syn/tmx/sl-uk.tmx.gz">0.6M</a></td>
<th>sl</th>
</tr><th>so</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#d9ffc6'><a rel="nofollow" title="Somali-Swedish (1.8M links 87.6M tokens )" href="download.php?f=Europarl/v8syn/tmx/so-sv.tmx.gz">1.8M</a></td>
<td bgcolor='#d7ffc9'><a rel="nofollow" title="Somali-Ukrainian (2.3M links 105.1M tokens )" href="download.php?f=Europarl/v8syn/tmx/so-uk.tmx.gz">2.3M</a></td>
<th>so</th>
</tr><th>sv</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td bgcolor='#d9ffc6'><a rel="nofollow" title="Swedish-Ukrainian (1.8M links 78.1M tokens )" href="download.php?f=Europarl/v8syn/tmx/sv-uk.tmx.gz">1.8M</a></td>
<th>sv</th>
</tr><tr><th></th>
<th>eu</th>
<th>fi</th>
<th>fr</th>
<th>gd</th>
<th>hu</th>
<th>is</th>
<th>it</th>
<th>ka</th>
<th>lt</th>
<th>lv</th>
<th>mk</th>
<th>nl</th>
<th>pl</th>
<th>pt</th>
<th>ro</th>
<th>sk</th>
<th>sl</th>
<th>so</th>
<th>sv</th>
<th>uk</th>
<th></th></tr>
</table>
</div></p></div><hr><h3>Disclaimer</h3> <ul> <li>We do not own any of the text from which the data has been extracted.</li> <li>We only offer files that we believe we are free to redistribute. If any doubt occurs about the legality of any of our file downloads we will take them off right away after contacting us.</li> </ul> <h3>Notice and take down policy</h3> Notice: Should you consider that our data contains material that is owned by you and should therefore not be reproduced here, please: <ul> <li>Clearly identify yourself, with detailed contact data such as an address, telephone number or email address at which you can be contacted.</li> <li>Clearly identify the copyrighted work claimed to be infringed.</li> <li>Clearly identify the material that is claimed to be infringing and information reasonably sufficient to allow us to locate the material.</li> <li>And contact the OPUS project at the following email address: opus-project at helsinki.fi.</li> </ul> Take down: We will comply to legitimate requests by removing the affected sources from the next release of the corpus.<div class="footer"></div>
</body>
</html>