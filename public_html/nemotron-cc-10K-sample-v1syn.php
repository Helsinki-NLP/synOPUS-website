<?php include("count.php"); ?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	 "http://www.w3.org/TR/html4/loose.dtd">
<html><head><title>nemotron-cc-10K-sample</title>
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
</script><h1>nemotron-cc-10K-sample v1syn</h1><a href="https://github.com/Helsinki-NLP/translate-fineweb">Automatically translated data</a> from a small <a href="https://huggingface.co/datasets/spyysalo/nemotron-cc-10K-sample">10K sample taken out of Nemotron-CC</a>. Translations are done by <a href="https://github.com/Helsinki-NLP/Opus-MT">OPUS-MT models</a> selected from the <a href="https://opus.nlpl.eu/dashboard/">OPUS-MT Dashboard</a>.<p>37 languages, 36 bitexts</br>
total number of files: 1,850,000</br>
total number of tokens: 937.0M</br>
total number of sentences: 32.1M</br></p>
Please <a href="http://opus.lingfil.uu.se/LREC2012.txt">cite the following article</a> if you use the OPUS packages and downloads in your own work:<br/> J. Tiedemann, 2012, <a href="http://www.lrec-conf.org/proceedings/lrec2012/pdf/463_Paper.pdf"><i>Parallel Data, Tools and Interfaces in OPUS.</i></a> In Proceedings of the 8th International Conference on Language Resources and Evaluation (LREC 2012)<br/><h3>Release history:</h3><p><ul><li><a href="nemotron-cc-10K-sample-v1syn.php">nemotron-cc-10K-sample v1syn</a></li></ul></p><h3>Download</h3><p>Below you can download data files for all language pairs in different formats and with different kind of annotation (if available). You can click on the various links as explained below.</p><p><b>License:</b> <a href="https://creativecommons.org/licenses/by/4.0/">CC-BY 4.0</a><br/></p><ul><li><a onclick="toggleSection('samples')">Corpus sample files (click to show)</a></li><li><a onclick="toggleSection('download-xml')">Download corpus in their native XML format (click to show)</a></li>
<li><a onclick="toggleSection('download-moses')">Download corpus in plain text format (click to show)</a></li>
</ul><div id='samples' style='display: none;'>
<p>Links to sample files from monolingual corpus files (language-ID links) and bitexts (click on 'view')</p><p><div class="sample"><table border="0" cellpadding="0">
<tr><th></th>
<th><a rel="nofollow" href="nemotron-cc-10K-sample/v1syn/bg_sample.html">bg</a></th>
<th><a rel="nofollow" href="nemotron-cc-10K-sample/v1syn/bs_sample.html">bs</a></th>
<th><a rel="nofollow" href="nemotron-cc-10K-sample/v1syn/ca_sample.html">ca</a></th>
<th><a rel="nofollow" href="nemotron-cc-10K-sample/v1syn/cs_sample.html">cs</a></th>
<th><a rel="nofollow" href="nemotron-cc-10K-sample/v1syn/da_sample.html">da</a></th>
<th><a rel="nofollow" href="nemotron-cc-10K-sample/v1syn/de_sample.html">de</a></th>
<th><a rel="nofollow" href="nemotron-cc-10K-sample/v1syn/el_sample.html">el</a></th>
<th><a rel="nofollow" href="nemotron-cc-10K-sample/v1syn/es_sample.html">es</a></th>
<th><a rel="nofollow" href="nemotron-cc-10K-sample/v1syn/et_sample.html">et</a></th>
<th><a rel="nofollow" href="nemotron-cc-10K-sample/v1syn/eu_sample.html">eu</a></th>
<th><a rel="nofollow" href="nemotron-cc-10K-sample/v1syn/fi_sample.html">fi</a></th>
<th><a rel="nofollow" href="nemotron-cc-10K-sample/v1syn/fr_sample.html">fr</a></th>
<th><a rel="nofollow" href="nemotron-cc-10K-sample/v1syn/ga_sample.html">ga</a></th>
<th><a rel="nofollow" href="nemotron-cc-10K-sample/v1syn/gl_sample.html">gl</a></th>
<th><a rel="nofollow" href="nemotron-cc-10K-sample/v1syn/hr_sample.html">hr</a></th>
<th><a rel="nofollow" href="nemotron-cc-10K-sample/v1syn/hu_sample.html">hu</a></th>
<th><a rel="nofollow" href="nemotron-cc-10K-sample/v1syn/is_sample.html">is</a></th>
<th><a rel="nofollow" href="nemotron-cc-10K-sample/v1syn/it_sample.html">it</a></th>
<th><a rel="nofollow" href="nemotron-cc-10K-sample/v1syn/ka_sample.html">ka</a></th>
<th><a rel="nofollow" href="nemotron-cc-10K-sample/v1syn/lt_sample.html">lt</a></th>
<th><a rel="nofollow" href="nemotron-cc-10K-sample/v1syn/lv_sample.html">lv</a></th>
<th><a rel="nofollow" href="nemotron-cc-10K-sample/v1syn/mk_sample.html">mk</a></th>
<th><a rel="nofollow" href="nemotron-cc-10K-sample/v1syn/mt_sample.html">mt</a></th>
<th><a rel="nofollow" href="nemotron-cc-10K-sample/v1syn/nb_sample.html">nb</a></th>
<th><a rel="nofollow" href="nemotron-cc-10K-sample/v1syn/nl_sample.html">nl</a></th>
<th></th>
<th><a rel="nofollow" href="nemotron-cc-10K-sample/v1syn/nn_sample.html">nn</a></th>
<th><a rel="nofollow" href="nemotron-cc-10K-sample/v1syn/pl_sample.html">pl</a></th>
<th><a rel="nofollow" href="nemotron-cc-10K-sample/v1syn/pt_sample.html">pt</a></th>
<th><a rel="nofollow" href="nemotron-cc-10K-sample/v1syn/ro_sample.html">ro</a></th>
<th><a rel="nofollow" href="nemotron-cc-10K-sample/v1syn/sk_sample.html">sk</a></th>
<th><a rel="nofollow" href="nemotron-cc-10K-sample/v1syn/sl_sample.html">sl</a></th>
<th><a rel="nofollow" href="nemotron-cc-10K-sample/v1syn/sq_sample.html">sq</a></th>
<th><a rel="nofollow" href="nemotron-cc-10K-sample/v1syn/sr_Cyrl_sample.html">sr_Cyrl</a></th>
<th><a rel="nofollow" href="nemotron-cc-10K-sample/v1syn/sv_sample.html">sv</a></th>
<th><a rel="nofollow" href="nemotron-cc-10K-sample/v1syn/tr_sample.html">tr</a></th>
<th><a rel="nofollow" href="nemotron-cc-10K-sample/v1syn/uk_sample.html">uk</a></th>
<th></th></tr>
<tr><th><a rel="nofollow" href="nemotron-cc-10K-sample/v1syn/en_sample.html">en</a></th>
<td><a rel="nofollow" title="English-Bulgarian (sample file)" href="nemotron-cc-10K-sample/v1syn/en-bg_sample.html">view</a></td><td><a rel="nofollow" title="English-Bosnian (sample file)" href="nemotron-cc-10K-sample/v1syn/en-bs_sample.html">view</a></td><td><a rel="nofollow" title="English-Catalan (sample file)" href="nemotron-cc-10K-sample/v1syn/en-ca_sample.html">view</a></td><td><a rel="nofollow" title="English-Czech (sample file)" href="nemotron-cc-10K-sample/v1syn/en-cs_sample.html">view</a></td><td><a rel="nofollow" title="English-Danish (sample file)" href="nemotron-cc-10K-sample/v1syn/en-da_sample.html">view</a></td><td><a rel="nofollow" title="English-German (sample file)" href="nemotron-cc-10K-sample/v1syn/en-de_sample.html">view</a></td><td><a rel="nofollow" title="English-Greek (sample file)" href="nemotron-cc-10K-sample/v1syn/en-el_sample.html">view</a></td><td><a rel="nofollow" title="English-Spanish (sample file)" href="nemotron-cc-10K-sample/v1syn/en-es_sample.html">view</a></td><td><a rel="nofollow" title="English-Estonian (sample file)" href="nemotron-cc-10K-sample/v1syn/en-et_sample.html">view</a></td><td><a rel="nofollow" title="English-Basque (sample file)" href="nemotron-cc-10K-sample/v1syn/en-eu_sample.html">view</a></td><td><a rel="nofollow" title="English-Finnish (sample file)" href="nemotron-cc-10K-sample/v1syn/en-fi_sample.html">view</a></td><td><a rel="nofollow" title="English-French (sample file)" href="nemotron-cc-10K-sample/v1syn/en-fr_sample.html">view</a></td><td><a rel="nofollow" title="English-Irish (sample file)" href="nemotron-cc-10K-sample/v1syn/en-ga_sample.html">view</a></td><td><a rel="nofollow" title="English-Galician (sample file)" href="nemotron-cc-10K-sample/v1syn/en-gl_sample.html">view</a></td><td><a rel="nofollow" title="English-Croatian (sample file)" href="nemotron-cc-10K-sample/v1syn/en-hr_sample.html">view</a></td><td><a rel="nofollow" title="English-Hungarian (sample file)" href="nemotron-cc-10K-sample/v1syn/en-hu_sample.html">view</a></td><td><a rel="nofollow" title="English-Icelandic (sample file)" href="nemotron-cc-10K-sample/v1syn/en-is_sample.html">view</a></td><td><a rel="nofollow" title="English-Italian (sample file)" href="nemotron-cc-10K-sample/v1syn/en-it_sample.html">view</a></td><td><a rel="nofollow" title="English-Georgian (sample file)" href="nemotron-cc-10K-sample/v1syn/en-ka_sample.html">view</a></td><td><a rel="nofollow" title="English-Lithuanian (sample file)" href="nemotron-cc-10K-sample/v1syn/en-lt_sample.html">view</a></td><td><a rel="nofollow" title="English-Latvian (sample file)" href="nemotron-cc-10K-sample/v1syn/en-lv_sample.html">view</a></td><td><a rel="nofollow" title="English-Macedonian (sample file)" href="nemotron-cc-10K-sample/v1syn/en-mk_sample.html">view</a></td><td><a rel="nofollow" title="English-Maltese (sample file)" href="nemotron-cc-10K-sample/v1syn/en-mt_sample.html">view</a></td><td><a rel="nofollow" title="English-BokmÃ¥l, Norwegian (sample file)" href="nemotron-cc-10K-sample/v1syn/en-nb_sample.html">view</a></td><td><a rel="nofollow" title="English-Dutch (sample file)" href="nemotron-cc-10K-sample/v1syn/en-nl_sample.html">view</a></td><th>en</th>
<td><a rel="nofollow" title="English-Norwegian Nynorsk (sample file)" href="nemotron-cc-10K-sample/v1syn/en-nn_sample.html">view</a></td><td><a rel="nofollow" title="English-Polish (sample file)" href="nemotron-cc-10K-sample/v1syn/en-pl_sample.html">view</a></td><td><a rel="nofollow" title="English-Portuguese (sample file)" href="nemotron-cc-10K-sample/v1syn/en-pt_sample.html">view</a></td><td><a rel="nofollow" title="English-Romanian (sample file)" href="nemotron-cc-10K-sample/v1syn/en-ro_sample.html">view</a></td><td><a rel="nofollow" title="English-Slovak (sample file)" href="nemotron-cc-10K-sample/v1syn/en-sk_sample.html">view</a></td><td><a rel="nofollow" title="English-Slovenian (sample file)" href="nemotron-cc-10K-sample/v1syn/en-sl_sample.html">view</a></td><td><a rel="nofollow" title="English-Albanian (sample file)" href="nemotron-cc-10K-sample/v1syn/en-sq_sample.html">view</a></td><td><a rel="nofollow" title="English-Serbian (sample file)" href="nemotron-cc-10K-sample/v1syn/en-sr_Cyrl_sample.html">view</a></td><td><a rel="nofollow" title="English-Swedish (sample file)" href="nemotron-cc-10K-sample/v1syn/en-sv_sample.html">view</a></td><td><a rel="nofollow" title="English-Turkish (sample file)" href="nemotron-cc-10K-sample/v1syn/en-tr_sample.html">view</a></td><td><a rel="nofollow" title="English-Ukrainian (sample file)" href="nemotron-cc-10K-sample/v1syn/en-uk_sample.html">view</a></td><th><a rel="nofollow" href="nemotron-cc-10K-sample/v1syn/en_sample.html">en</a></th></tr>
<tr><th></th>
<th><a rel="nofollow" href="nemotron-cc-10K-sample/v1syn/bg_sample.html">bg</a></th>
<th><a rel="nofollow" href="nemotron-cc-10K-sample/v1syn/bs_sample.html">bs</a></th>
<th><a rel="nofollow" href="nemotron-cc-10K-sample/v1syn/ca_sample.html">ca</a></th>
<th><a rel="nofollow" href="nemotron-cc-10K-sample/v1syn/cs_sample.html">cs</a></th>
<th><a rel="nofollow" href="nemotron-cc-10K-sample/v1syn/da_sample.html">da</a></th>
<th><a rel="nofollow" href="nemotron-cc-10K-sample/v1syn/de_sample.html">de</a></th>
<th><a rel="nofollow" href="nemotron-cc-10K-sample/v1syn/el_sample.html">el</a></th>
<th><a rel="nofollow" href="nemotron-cc-10K-sample/v1syn/es_sample.html">es</a></th>
<th><a rel="nofollow" href="nemotron-cc-10K-sample/v1syn/et_sample.html">et</a></th>
<th><a rel="nofollow" href="nemotron-cc-10K-sample/v1syn/eu_sample.html">eu</a></th>
<th><a rel="nofollow" href="nemotron-cc-10K-sample/v1syn/fi_sample.html">fi</a></th>
<th><a rel="nofollow" href="nemotron-cc-10K-sample/v1syn/fr_sample.html">fr</a></th>
<th><a rel="nofollow" href="nemotron-cc-10K-sample/v1syn/ga_sample.html">ga</a></th>
<th><a rel="nofollow" href="nemotron-cc-10K-sample/v1syn/gl_sample.html">gl</a></th>
<th><a rel="nofollow" href="nemotron-cc-10K-sample/v1syn/hr_sample.html">hr</a></th>
<th><a rel="nofollow" href="nemotron-cc-10K-sample/v1syn/hu_sample.html">hu</a></th>
<th><a rel="nofollow" href="nemotron-cc-10K-sample/v1syn/is_sample.html">is</a></th>
<th><a rel="nofollow" href="nemotron-cc-10K-sample/v1syn/it_sample.html">it</a></th>
<th><a rel="nofollow" href="nemotron-cc-10K-sample/v1syn/ka_sample.html">ka</a></th>
<th><a rel="nofollow" href="nemotron-cc-10K-sample/v1syn/lt_sample.html">lt</a></th>
<th><a rel="nofollow" href="nemotron-cc-10K-sample/v1syn/lv_sample.html">lv</a></th>
<th><a rel="nofollow" href="nemotron-cc-10K-sample/v1syn/mk_sample.html">mk</a></th>
<th><a rel="nofollow" href="nemotron-cc-10K-sample/v1syn/mt_sample.html">mt</a></th>
<th><a rel="nofollow" href="nemotron-cc-10K-sample/v1syn/nb_sample.html">nb</a></th>
<th><a rel="nofollow" href="nemotron-cc-10K-sample/v1syn/nl_sample.html">nl</a></th>
<th></th>
<th><a rel="nofollow" href="nemotron-cc-10K-sample/v1syn/nn_sample.html">nn</a></th>
<th><a rel="nofollow" href="nemotron-cc-10K-sample/v1syn/pl_sample.html">pl</a></th>
<th><a rel="nofollow" href="nemotron-cc-10K-sample/v1syn/pt_sample.html">pt</a></th>
<th><a rel="nofollow" href="nemotron-cc-10K-sample/v1syn/ro_sample.html">ro</a></th>
<th><a rel="nofollow" href="nemotron-cc-10K-sample/v1syn/sk_sample.html">sk</a></th>
<th><a rel="nofollow" href="nemotron-cc-10K-sample/v1syn/sl_sample.html">sl</a></th>
<th><a rel="nofollow" href="nemotron-cc-10K-sample/v1syn/sq_sample.html">sq</a></th>
<th><a rel="nofollow" href="nemotron-cc-10K-sample/v1syn/sr_Cyrl_sample.html">sr_Cyrl</a></th>
<th><a rel="nofollow" href="nemotron-cc-10K-sample/v1syn/sv_sample.html">sv</a></th>
<th><a rel="nofollow" href="nemotron-cc-10K-sample/v1syn/tr_sample.html">tr</a></th>
<th><a rel="nofollow" href="nemotron-cc-10K-sample/v1syn/uk_sample.html">uk</a></th>
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
<th><a rel="nofollow" title="bg.zip: untokenized XML documents (50,000 files, 0.9M sentences, 27.7M tokens)" href="download.php?f=nemotron-cc-10K-sample/v1syn/raw/bg.zip">bg</a></th>
<th><a rel="nofollow" title="bs.zip: untokenized XML documents (50,000 files, 0.9M sentences, 26.3M tokens)" href="download.php?f=nemotron-cc-10K-sample/v1syn/raw/bs.zip">bs</a></th>
<th><a rel="nofollow" title="ca.zip: untokenized XML documents (50,000 files, 0.9M sentences, 29.6M tokens)" href="download.php?f=nemotron-cc-10K-sample/v1syn/raw/ca.zip">ca</a></th>
<th><a rel="nofollow" title="cs.zip: untokenized XML documents (50,000 files, 0.9M sentences, 24.7M tokens)" href="download.php?f=nemotron-cc-10K-sample/v1syn/raw/cs.zip">cs</a></th>
<th><a rel="nofollow" title="da.zip: untokenized XML documents (50,000 files, 0.9M sentences, 27.2M tokens)" href="download.php?f=nemotron-cc-10K-sample/v1syn/raw/da.zip">da</a></th>
<th><a rel="nofollow" title="de.zip: untokenized XML documents (50,000 files, 0.9M sentences, 27.4M tokens)" href="download.php?f=nemotron-cc-10K-sample/v1syn/raw/de.zip">de</a></th>
<th><a rel="nofollow" title="el.zip: untokenized XML documents (50,000 files, 0.9M sentences, 29.8M tokens)" href="download.php?f=nemotron-cc-10K-sample/v1syn/raw/el.zip">el</a></th>
<th><a rel="nofollow" title="es.zip: untokenized XML documents (50,000 files, 0.9M sentences, 30.9M tokens)" href="download.php?f=nemotron-cc-10K-sample/v1syn/raw/es.zip">es</a></th>
<th><a rel="nofollow" title="et.zip: untokenized XML documents (50,000 files, 0.9M sentences, 13.3M tokens)" href="download.php?f=nemotron-cc-10K-sample/v1syn/raw/et.zip">et</a></th>
<th><a rel="nofollow" title="eu.zip: untokenized XML documents (50,000 files, 0.9M sentences, 21.1M tokens)" href="download.php?f=nemotron-cc-10K-sample/v1syn/raw/eu.zip">eu</a></th>
<th><a rel="nofollow" title="fi.zip: untokenized XML documents (50,000 files, 0.9M sentences, 20.8M tokens)" href="download.php?f=nemotron-cc-10K-sample/v1syn/raw/fi.zip">fi</a></th>
<th><a rel="nofollow" title="fr.zip: untokenized XML documents (50,000 files, 0.9M sentences, 31.5M tokens)" href="download.php?f=nemotron-cc-10K-sample/v1syn/raw/fr.zip">fr</a></th>
<th><a rel="nofollow" title="ga.zip: untokenized XML documents (50,000 files, 0.9M sentences, 32.0M tokens)" href="download.php?f=nemotron-cc-10K-sample/v1syn/raw/ga.zip">ga</a></th>
<th><a rel="nofollow" title="gl.zip: untokenized XML documents (50,000 files, 0.9M sentences, 18.7M tokens)" href="download.php?f=nemotron-cc-10K-sample/v1syn/raw/gl.zip">gl</a></th>
<th><a rel="nofollow" title="hr.zip: untokenized XML documents (50,000 files, 0.9M sentences, 18.9M tokens)" href="download.php?f=nemotron-cc-10K-sample/v1syn/raw/hr.zip">hr</a></th>
<th><a rel="nofollow" title="hu.zip: untokenized XML documents (50,000 files, 0.9M sentences, 24.1M tokens)" href="download.php?f=nemotron-cc-10K-sample/v1syn/raw/hu.zip">hu</a></th>
<th><a rel="nofollow" title="is.zip: untokenized XML documents (50,000 files, 0.9M sentences, 26.5M tokens)" href="download.php?f=nemotron-cc-10K-sample/v1syn/raw/is.zip">is</a></th>
<th><a rel="nofollow" title="it.zip: untokenized XML documents (50,000 files, 0.9M sentences, 28.3M tokens)" href="download.php?f=nemotron-cc-10K-sample/v1syn/raw/it.zip">it</a></th>
<th><a rel="nofollow" title="ka.zip: untokenized XML documents (50,000 files, 0.9M sentences, 17.3M tokens)" href="download.php?f=nemotron-cc-10K-sample/v1syn/raw/ka.zip">ka</a></th>
<th><a rel="nofollow" title="lt.zip: untokenized XML documents (50,000 files, 0.9M sentences, 22.5M tokens)" href="download.php?f=nemotron-cc-10K-sample/v1syn/raw/lt.zip">lt</a></th>
<th><a rel="nofollow" title="lv.zip: untokenized XML documents (50,000 files, 0.9M sentences, 24.0M tokens)" href="download.php?f=nemotron-cc-10K-sample/v1syn/raw/lv.zip">lv</a></th>
<th><a rel="nofollow" title="mk.zip: untokenized XML documents (50,000 files, 0.9M sentences, 25.1M tokens)" href="download.php?f=nemotron-cc-10K-sample/v1syn/raw/mk.zip">mk</a></th>
<th><a rel="nofollow" title="mt.zip: untokenized XML documents (50,000 files, 0.9M sentences, 24.7M tokens)" href="download.php?f=nemotron-cc-10K-sample/v1syn/raw/mt.zip">mt</a></th>
<th><a rel="nofollow" title="nb.zip: untokenized XML documents (50,000 files, 0.9M sentences, 25.9M tokens)" href="download.php?f=nemotron-cc-10K-sample/v1syn/raw/nb.zip">nb</a></th>
<th><a rel="nofollow" title="nl.zip: untokenized XML documents (50,000 files, 0.9M sentences, 27.8M tokens)" href="download.php?f=nemotron-cc-10K-sample/v1syn/raw/nl.zip">nl</a></th>
<th></th>
<th><a rel="nofollow" title="nn.zip: untokenized XML documents (50,000 files, 0.9M sentences, 26.2M tokens)" href="download.php?f=nemotron-cc-10K-sample/v1syn/raw/nn.zip">nn</a></th>
<th><a rel="nofollow" title="pl.zip: untokenized XML documents (50,000 files, 0.9M sentences, 23.5M tokens)" href="download.php?f=nemotron-cc-10K-sample/v1syn/raw/pl.zip">pl</a></th>
<th><a rel="nofollow" title="pt.zip: untokenized XML documents (50,000 files, 0.9M sentences, 28.7M tokens)" href="download.php?f=nemotron-cc-10K-sample/v1syn/raw/pt.zip">pt</a></th>
<th><a rel="nofollow" title="ro.zip: untokenized XML documents (50,000 files, 0.9M sentences, 26.4M tokens)" href="download.php?f=nemotron-cc-10K-sample/v1syn/raw/ro.zip">ro</a></th>
<th><a rel="nofollow" title="sk.zip: untokenized XML documents (50,000 files, 0.9M sentences, 24.9M tokens)" href="download.php?f=nemotron-cc-10K-sample/v1syn/raw/sk.zip">sk</a></th>
<th><a rel="nofollow" title="sl.zip: untokenized XML documents (50,000 files, 0.9M sentences, 24.6M tokens)" href="download.php?f=nemotron-cc-10K-sample/v1syn/raw/sl.zip">sl</a></th>
<th><a rel="nofollow" title="sq.zip: untokenized XML documents (50,000 files, 0.9M sentences, 31.4M tokens)" href="download.php?f=nemotron-cc-10K-sample/v1syn/raw/sq.zip">sq</a></th>
<th><a rel="nofollow" title="sr_Cyrl.zip: untokenized XML documents (50,000 files, 0.9M sentences, 22.9M tokens)" href="download.php?f=nemotron-cc-10K-sample/v1syn/raw/sr_Cyrl.zip">sr_Cyrl</a></th>
<th><a rel="nofollow" title="sv.zip: untokenized XML documents (50,000 files, 0.9M sentences, 26.6M tokens)" href="download.php?f=nemotron-cc-10K-sample/v1syn/raw/sv.zip">sv</a></th>
<th><a rel="nofollow" title="tr.zip: untokenized XML documents (50,000 files, 0.9M sentences, 22.4M tokens)" href="download.php?f=nemotron-cc-10K-sample/v1syn/raw/tr.zip">tr</a></th>
<th><a rel="nofollow" title="uk.zip: untokenized XML documents (50,000 files, 0.9M sentences, 24.8M tokens)" href="download.php?f=nemotron-cc-10K-sample/v1syn/raw/uk.zip">uk</a></th>
<th></th></tr>
<th><a rel="nofollow" title="en.zip: untokenized XML documents (50,000 files, 0.9M sentences, 28.4M tokens)" href="download.php?f=nemotron-cc-10K-sample/v1syn/raw/en.zip">en</a></th>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="English-Bulgarian (50,000 aligned documents 1.9M links 56.1M tokens )" href="download.php?f=nemotron-cc-10K-sample/v1syn/xml/en-bg.xml.gz">1.9M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="English-Bosnian (50,000 aligned documents 1.9M links 54.6M tokens )" href="download.php?f=nemotron-cc-10K-sample/v1syn/xml/en-bs.xml.gz">1.9M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="English-Catalan (50,000 aligned documents 1.9M links 58.0M tokens )" href="download.php?f=nemotron-cc-10K-sample/v1syn/xml/en-ca.xml.gz">1.9M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="English-Czech (50,000 aligned documents 1.9M links 53.0M tokens )" href="download.php?f=nemotron-cc-10K-sample/v1syn/xml/en-cs.xml.gz">1.9M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="English-Danish (50,000 aligned documents 1.9M links 55.6M tokens )" href="download.php?f=nemotron-cc-10K-sample/v1syn/xml/en-da.xml.gz">1.9M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="English-German (50,000 aligned documents 1.9M links 55.8M tokens )" href="download.php?f=nemotron-cc-10K-sample/v1syn/xml/en-de.xml.gz">1.9M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="English-Greek (50,000 aligned documents 1.9M links 58.2M tokens )" href="download.php?f=nemotron-cc-10K-sample/v1syn/xml/en-el.xml.gz">1.9M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="English-Spanish (50,000 aligned documents 1.9M links 59.2M tokens )" href="download.php?f=nemotron-cc-10K-sample/v1syn/xml/en-es.xml.gz">1.9M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="English-Estonian (50,000 aligned documents 1.9M links 41.6M tokens )" href="download.php?f=nemotron-cc-10K-sample/v1syn/xml/en-et.xml.gz">1.9M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="English-Basque (50,000 aligned documents 1.9M links 49.4M tokens )" href="download.php?f=nemotron-cc-10K-sample/v1syn/xml/en-eu.xml.gz">1.9M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="English-Finnish (50,000 aligned documents 1.9M links 49.1M tokens )" href="download.php?f=nemotron-cc-10K-sample/v1syn/xml/en-fi.xml.gz">1.9M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="English-French (50,000 aligned documents 1.9M links 59.8M tokens )" href="download.php?f=nemotron-cc-10K-sample/v1syn/xml/en-fr.xml.gz">1.9M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="English-Irish (50,000 aligned documents 1.9M links 60.3M tokens )" href="download.php?f=nemotron-cc-10K-sample/v1syn/xml/en-ga.xml.gz">1.9M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="English-Galician (50,000 aligned documents 1.9M links 47.1M tokens )" href="download.php?f=nemotron-cc-10K-sample/v1syn/xml/en-gl.xml.gz">1.9M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="English-Croatian (50,000 aligned documents 1.9M links 47.3M tokens )" href="download.php?f=nemotron-cc-10K-sample/v1syn/xml/en-hr.xml.gz">1.9M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="English-Hungarian (50,000 aligned documents 1.9M links 52.5M tokens )" href="download.php?f=nemotron-cc-10K-sample/v1syn/xml/en-hu.xml.gz">1.9M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="English-Icelandic (50,000 aligned documents 1.9M links 54.9M tokens )" href="download.php?f=nemotron-cc-10K-sample/v1syn/xml/en-is.xml.gz">1.9M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="English-Italian (50,000 aligned documents 1.9M links 56.6M tokens )" href="download.php?f=nemotron-cc-10K-sample/v1syn/xml/en-it.xml.gz">1.9M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="English-Georgian (50,000 aligned documents 1.9M links 45.7M tokens )" href="download.php?f=nemotron-cc-10K-sample/v1syn/xml/en-ka.xml.gz">1.9M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="English-Lithuanian (50,000 aligned documents 1.9M links 50.9M tokens )" href="download.php?f=nemotron-cc-10K-sample/v1syn/xml/en-lt.xml.gz">1.9M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="English-Latvian (50,000 aligned documents 1.9M links 52.4M tokens )" href="download.php?f=nemotron-cc-10K-sample/v1syn/xml/en-lv.xml.gz">1.9M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="English-Macedonian (50,000 aligned documents 1.9M links 53.5M tokens )" href="download.php?f=nemotron-cc-10K-sample/v1syn/xml/en-mk.xml.gz">1.9M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="English-Maltese (50,000 aligned documents 1.9M links 53.1M tokens )" href="download.php?f=nemotron-cc-10K-sample/v1syn/xml/en-mt.xml.gz">1.9M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="English-BokmÃ¥l, Norwegian (50,000 aligned documents 1.9M links 54.3M tokens )" href="download.php?f=nemotron-cc-10K-sample/v1syn/xml/en-nb.xml.gz">1.9M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="English-Dutch (50,000 aligned documents 1.9M links 56.2M tokens )" href="download.php?f=nemotron-cc-10K-sample/v1syn/xml/en-nl.xml.gz">1.9M</a></td>
<th>en</th>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="English-Norwegian Nynorsk (50,000 aligned documents 1.9M links 54.6M tokens )" href="download.php?f=nemotron-cc-10K-sample/v1syn/xml/en-nn.xml.gz">1.9M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="English-Polish (50,000 aligned documents 1.9M links 51.9M tokens )" href="download.php?f=nemotron-cc-10K-sample/v1syn/xml/en-pl.xml.gz">1.9M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="English-Portuguese (50,000 aligned documents 1.9M links 57.0M tokens )" href="download.php?f=nemotron-cc-10K-sample/v1syn/xml/en-pt.xml.gz">1.9M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="English-Romanian (50,000 aligned documents 1.9M links 54.7M tokens )" href="download.php?f=nemotron-cc-10K-sample/v1syn/xml/en-ro.xml.gz">1.9M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="English-Slovak (50,000 aligned documents 1.9M links 53.2M tokens )" href="download.php?f=nemotron-cc-10K-sample/v1syn/xml/en-sk.xml.gz">1.9M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="English-Slovenian (50,000 aligned documents 1.9M links 53.0M tokens )" href="download.php?f=nemotron-cc-10K-sample/v1syn/xml/en-sl.xml.gz">1.9M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="English-Albanian (50,000 aligned documents 1.9M links 59.8M tokens )" href="download.php?f=nemotron-cc-10K-sample/v1syn/xml/en-sq.xml.gz">1.9M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="English-Serbian (50,000 aligned documents 1.9M links 51.3M tokens )" href="download.php?f=nemotron-cc-10K-sample/v1syn/xml/en-sr_Cyrl.xml.gz">1.9M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="English-Swedish (50,000 aligned documents 1.9M links 55.0M tokens )" href="download.php?f=nemotron-cc-10K-sample/v1syn/xml/en-sv.xml.gz">1.9M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="English-Turkish (50,000 aligned documents 1.9M links 50.8M tokens )" href="download.php?f=nemotron-cc-10K-sample/v1syn/xml/en-tr.xml.gz">1.9M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="English-Ukrainian (50,000 aligned documents 1.9M links 53.2M tokens )" href="download.php?f=nemotron-cc-10K-sample/v1syn/xml/en-uk.xml.gz">1.9M</a></td>
<th>en</th>
</tr><tr><th></th>
<th>bg</th>
<th>bs</th>
<th>ca</th>
<th>cs</th>
<th>da</th>
<th>de</th>
<th>el</th>
<th>es</th>
<th>et</th>
<th>eu</th>
<th>fi</th>
<th>fr</th>
<th>ga</th>
<th>gl</th>
<th>hr</th>
<th>hu</th>
<th>is</th>
<th>it</th>
<th>ka</th>
<th>lt</th>
<th>lv</th>
<th>mk</th>
<th>mt</th>
<th>nb</th>
<th>nl</th>
<th></th>
<th>nn</th>
<th>pl</th>
<th>pt</th>
<th>ro</th>
<th>sk</th>
<th>sl</th>
<th>sq</th>
<th>sr_Cyrl</th>
<th>sv</th>
<th>tr</th>
<th>uk</th>
<th></th></tr>
</table>
</div></p></div><div id='download-moses' style='display: none;'><p>Links to zip-files with aligned plain text files, one per language (Moses format).</p><p>
<div class="sample"><table border="0" cellpadding="0">
<tr><th></th>
<th>bg</th>
<th>bs</th>
<th>ca</th>
<th>cs</th>
<th>da</th>
<th>de</th>
<th>el</th>
<th>es</th>
<th>et</th>
<th>eu</th>
<th>fi</th>
<th>fr</th>
<th>ga</th>
<th>gl</th>
<th>hr</th>
<th>hu</th>
<th>is</th>
<th>it</th>
<th>ka</th>
<th>lt</th>
<th>lv</th>
<th>mk</th>
<th>mt</th>
<th>nb</th>
<th>nl</th>
<th></th>
<th>nn</th>
<th>pl</th>
<th>pt</th>
<th>ro</th>
<th>sk</th>
<th>sl</th>
<th>sq</th>
<th>sr_Cyrl</th>
<th>sv</th>
<th>tr</th>
<th>uk</th>
<th></th></tr>
<th>en</th>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="English-Bulgarian (1.9M links 56.1M tokens )" href="download.php?f=nemotron-cc-10K-sample/v1syn/moses/en-bg.txt.zip">1.9M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="English-Bosnian (1.9M links 54.6M tokens )" href="download.php?f=nemotron-cc-10K-sample/v1syn/moses/en-bs.txt.zip">1.9M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="English-Catalan (1.9M links 58.0M tokens )" href="download.php?f=nemotron-cc-10K-sample/v1syn/moses/en-ca.txt.zip">1.9M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="English-Czech (1.9M links 53.0M tokens )" href="download.php?f=nemotron-cc-10K-sample/v1syn/moses/en-cs.txt.zip">1.9M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="English-Danish (1.9M links 55.6M tokens )" href="download.php?f=nemotron-cc-10K-sample/v1syn/moses/en-da.txt.zip">1.9M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="English-German (1.9M links 55.8M tokens )" href="download.php?f=nemotron-cc-10K-sample/v1syn/moses/en-de.txt.zip">1.9M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="English-Greek (1.9M links 58.2M tokens )" href="download.php?f=nemotron-cc-10K-sample/v1syn/moses/en-el.txt.zip">1.9M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="English-Spanish (1.9M links 59.2M tokens )" href="download.php?f=nemotron-cc-10K-sample/v1syn/moses/en-es.txt.zip">1.9M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="English-Estonian (1.9M links 41.6M tokens )" href="download.php?f=nemotron-cc-10K-sample/v1syn/moses/en-et.txt.zip">1.9M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="English-Basque (1.9M links 49.4M tokens )" href="download.php?f=nemotron-cc-10K-sample/v1syn/moses/en-eu.txt.zip">1.9M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="English-Finnish (1.9M links 49.1M tokens )" href="download.php?f=nemotron-cc-10K-sample/v1syn/moses/en-fi.txt.zip">1.9M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="English-French (1.9M links 59.8M tokens )" href="download.php?f=nemotron-cc-10K-sample/v1syn/moses/en-fr.txt.zip">1.9M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="English-Irish (1.9M links 60.3M tokens )" href="download.php?f=nemotron-cc-10K-sample/v1syn/moses/en-ga.txt.zip">1.9M</a></td>
<td bgcolor='#dbffc6'><a rel="nofollow" title="English-Galician (1.5M links 41.2M tokens )" href="download.php?f=nemotron-cc-10K-sample/v1syn/moses/en-gl.txt.zip">1.5M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="English-Croatian (1.9M links 47.2M tokens )" href="download.php?f=nemotron-cc-10K-sample/v1syn/moses/en-hr.txt.zip">1.9M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="English-Hungarian (1.9M links 52.5M tokens )" href="download.php?f=nemotron-cc-10K-sample/v1syn/moses/en-hu.txt.zip">1.9M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="English-Icelandic (1.9M links 54.9M tokens )" href="download.php?f=nemotron-cc-10K-sample/v1syn/moses/en-is.txt.zip">1.9M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="English-Italian (1.9M links 56.6M tokens )" href="download.php?f=nemotron-cc-10K-sample/v1syn/moses/en-it.txt.zip">1.9M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="English-Georgian (1.9M links 45.6M tokens )" href="download.php?f=nemotron-cc-10K-sample/v1syn/moses/en-ka.txt.zip">1.9M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="English-Lithuanian (1.9M links 50.9M tokens )" href="download.php?f=nemotron-cc-10K-sample/v1syn/moses/en-lt.txt.zip">1.9M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="English-Latvian (1.9M links 52.4M tokens )" href="download.php?f=nemotron-cc-10K-sample/v1syn/moses/en-lv.txt.zip">1.9M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="English-Macedonian (1.9M links 53.5M tokens )" href="download.php?f=nemotron-cc-10K-sample/v1syn/moses/en-mk.txt.zip">1.9M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="English-Maltese (1.9M links 53.1M tokens )" href="download.php?f=nemotron-cc-10K-sample/v1syn/moses/en-mt.txt.zip">1.9M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="English-BokmÃ¥l, Norwegian (1.9M links 54.3M tokens )" href="download.php?f=nemotron-cc-10K-sample/v1syn/moses/en-nb.txt.zip">1.9M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="English-Dutch (1.9M links 56.2M tokens )" href="download.php?f=nemotron-cc-10K-sample/v1syn/moses/en-nl.txt.zip">1.9M</a></td>
<th>en</th>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="English-Norwegian Nynorsk (1.9M links 54.6M tokens )" href="download.php?f=nemotron-cc-10K-sample/v1syn/moses/en-nn.txt.zip">1.9M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="English-Polish (1.9M links 51.9M tokens )" href="download.php?f=nemotron-cc-10K-sample/v1syn/moses/en-pl.txt.zip">1.9M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="English-Portuguese (1.9M links 57.0M tokens )" href="download.php?f=nemotron-cc-10K-sample/v1syn/moses/en-pt.txt.zip">1.9M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="English-Romanian (1.9M links 54.7M tokens )" href="download.php?f=nemotron-cc-10K-sample/v1syn/moses/en-ro.txt.zip">1.9M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="English-Slovak (1.9M links 53.2M tokens )" href="download.php?f=nemotron-cc-10K-sample/v1syn/moses/en-sk.txt.zip">1.9M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="English-Slovenian (1.9M links 53.0M tokens )" href="download.php?f=nemotron-cc-10K-sample/v1syn/moses/en-sl.txt.zip">1.9M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="English-Albanian (1.9M links 59.8M tokens )" href="download.php?f=nemotron-cc-10K-sample/v1syn/moses/en-sq.txt.zip">1.9M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="English-Serbian (1.9M links 51.2M tokens )" href="download.php?f=nemotron-cc-10K-sample/v1syn/moses/en-sr_Cyrl.txt.zip">1.9M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="English-Swedish (1.9M links 55.0M tokens )" href="download.php?f=nemotron-cc-10K-sample/v1syn/moses/en-sv.txt.zip">1.9M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="English-Turkish (1.9M links 50.8M tokens )" href="download.php?f=nemotron-cc-10K-sample/v1syn/moses/en-tr.txt.zip">1.9M</a></td>
<td bgcolor='#d9ffc7'><a rel="nofollow" title="English-Ukrainian (1.9M links 53.2M tokens )" href="download.php?f=nemotron-cc-10K-sample/v1syn/moses/en-uk.txt.zip">1.9M</a></td>
<th>en</th>
</tr><tr><th></th>
<th>bg</th>
<th>bs</th>
<th>ca</th>
<th>cs</th>
<th>da</th>
<th>de</th>
<th>el</th>
<th>es</th>
<th>et</th>
<th>eu</th>
<th>fi</th>
<th>fr</th>
<th>ga</th>
<th>gl</th>
<th>hr</th>
<th>hu</th>
<th>is</th>
<th>it</th>
<th>ka</th>
<th>lt</th>
<th>lv</th>
<th>mk</th>
<th>mt</th>
<th>nb</th>
<th>nl</th>
<th></th>
<th>nn</th>
<th>pl</th>
<th>pt</th>
<th>ro</th>
<th>sk</th>
<th>sl</th>
<th>sq</th>
<th>sr_Cyrl</th>
<th>sv</th>
<th>tr</th>
<th>uk</th>
<th></th></tr>
</table>
</div></p></div><div id='download-tmx' style='display: none;'><p>Links to compressed TMX files, one per language pair.</p><p>
<div class="sample"><table border="0" cellpadding="0">
<tr><th></th>
<th>bg</th>
<th>bs</th>
<th>ca</th>
<th>cs</th>
<th>da</th>
<th>de</th>
<th>el</th>
<th>es</th>
<th>et</th>
<th>eu</th>
<th>fi</th>
<th>fr</th>
<th>ga</th>
<th>gl</th>
<th>hr</th>
<th>hu</th>
<th>is</th>
<th>it</th>
<th>ka</th>
<th>lt</th>
<th>lv</th>
<th>mk</th>
<th>mt</th>
<th>nb</th>
<th>nl</th>
<th></th>
<th>nn</th>
<th>pl</th>
<th>pt</th>
<th>ro</th>
<th>sk</th>
<th>sl</th>
<th>sq</th>
<th>sr_Cyrl</th>
<th>sv</th>
<th>tr</th>
<th>uk</th>
<th></th></tr>
<th>en</th>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Bulgarian ()" href="download.php?f=nemotron-cc-10K-sample/v1syn/tmx/en-bg.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Bosnian ()" href="download.php?f=nemotron-cc-10K-sample/v1syn/tmx/en-bs.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Catalan ()" href="download.php?f=nemotron-cc-10K-sample/v1syn/tmx/en-ca.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Czech ()" href="download.php?f=nemotron-cc-10K-sample/v1syn/tmx/en-cs.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Danish ()" href="download.php?f=nemotron-cc-10K-sample/v1syn/tmx/en-da.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-German ()" href="download.php?f=nemotron-cc-10K-sample/v1syn/tmx/en-de.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Greek ()" href="download.php?f=nemotron-cc-10K-sample/v1syn/tmx/en-el.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Spanish ()" href="download.php?f=nemotron-cc-10K-sample/v1syn/tmx/en-es.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Estonian ()" href="download.php?f=nemotron-cc-10K-sample/v1syn/tmx/en-et.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Basque ()" href="download.php?f=nemotron-cc-10K-sample/v1syn/tmx/en-eu.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Finnish ()" href="download.php?f=nemotron-cc-10K-sample/v1syn/tmx/en-fi.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-French ()" href="download.php?f=nemotron-cc-10K-sample/v1syn/tmx/en-fr.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Irish ()" href="download.php?f=nemotron-cc-10K-sample/v1syn/tmx/en-ga.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Galician ()" href="download.php?f=nemotron-cc-10K-sample/v1syn/tmx/en-gl.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Croatian ()" href="download.php?f=nemotron-cc-10K-sample/v1syn/tmx/en-hr.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Hungarian ()" href="download.php?f=nemotron-cc-10K-sample/v1syn/tmx/en-hu.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Icelandic ()" href="download.php?f=nemotron-cc-10K-sample/v1syn/tmx/en-is.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Italian ()" href="download.php?f=nemotron-cc-10K-sample/v1syn/tmx/en-it.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Georgian ()" href="download.php?f=nemotron-cc-10K-sample/v1syn/tmx/en-ka.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Lithuanian ()" href="download.php?f=nemotron-cc-10K-sample/v1syn/tmx/en-lt.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Latvian ()" href="download.php?f=nemotron-cc-10K-sample/v1syn/tmx/en-lv.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Macedonian ()" href="download.php?f=nemotron-cc-10K-sample/v1syn/tmx/en-mk.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Maltese ()" href="download.php?f=nemotron-cc-10K-sample/v1syn/tmx/en-mt.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-BokmÃ¥l, Norwegian ()" href="download.php?f=nemotron-cc-10K-sample/v1syn/tmx/en-nb.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Dutch ()" href="download.php?f=nemotron-cc-10K-sample/v1syn/tmx/en-nl.tmx.gz">0</a></td>
<th>en</th>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Norwegian Nynorsk ()" href="download.php?f=nemotron-cc-10K-sample/v1syn/tmx/en-nn.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Polish ()" href="download.php?f=nemotron-cc-10K-sample/v1syn/tmx/en-pl.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Portuguese ()" href="download.php?f=nemotron-cc-10K-sample/v1syn/tmx/en-pt.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Romanian ()" href="download.php?f=nemotron-cc-10K-sample/v1syn/tmx/en-ro.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Slovak ()" href="download.php?f=nemotron-cc-10K-sample/v1syn/tmx/en-sk.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Slovenian ()" href="download.php?f=nemotron-cc-10K-sample/v1syn/tmx/en-sl.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Albanian ()" href="download.php?f=nemotron-cc-10K-sample/v1syn/tmx/en-sq.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Serbian ()" href="download.php?f=nemotron-cc-10K-sample/v1syn/tmx/en-sr_Cyrl.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Swedish ()" href="download.php?f=nemotron-cc-10K-sample/v1syn/tmx/en-sv.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Turkish ()" href="download.php?f=nemotron-cc-10K-sample/v1syn/tmx/en-tr.tmx.gz">0</a></td>
<td bgcolor='#ffcfcf'><a rel="nofollow" title="English-Ukrainian ()" href="download.php?f=nemotron-cc-10K-sample/v1syn/tmx/en-uk.tmx.gz">0</a></td>
<th>en</th>
</tr><tr><th></th>
<th>bg</th>
<th>bs</th>
<th>ca</th>
<th>cs</th>
<th>da</th>
<th>de</th>
<th>el</th>
<th>es</th>
<th>et</th>
<th>eu</th>
<th>fi</th>
<th>fr</th>
<th>ga</th>
<th>gl</th>
<th>hr</th>
<th>hu</th>
<th>is</th>
<th>it</th>
<th>ka</th>
<th>lt</th>
<th>lv</th>
<th>mk</th>
<th>mt</th>
<th>nb</th>
<th>nl</th>
<th></th>
<th>nn</th>
<th>pl</th>
<th>pt</th>
<th>ro</th>
<th>sk</th>
<th>sl</th>
<th>sq</th>
<th>sr_Cyrl</th>
<th>sv</th>
<th>tr</th>
<th>uk</th>
<th></th></tr>
</table>
</div></p></div><hr><h3>Disclaimer</h3> <ul> <li>We do not own any of the text from which the data has been extracted.</li> <li>We only offer files that we believe we are free to redistribute. If any doubt occurs about the legality of any of our file downloads we will take them off right away after contacting us.</li> </ul> <h3>Notice and take down policy</h3> Notice: Should you consider that our data contains material that is owned by you and should therefore not be reproduced here, please: <ul> <li>Clearly identify yourself, with detailed contact data such as an address, telephone number or email address at which you can be contacted.</li> <li>Clearly identify the copyrighted work claimed to be infringed.</li> <li>Clearly identify the material that is claimed to be infringing and information reasonably sufficient to allow us to locate the material.</li> <li>And contact the OPUS project at the following email address: opus-project at helsinki.fi.</li> </ul> Take down: We will comply to legitimate requests by removing the affected sources from the next release of the corpus.<div class="footer"></div>
</body>
</html>