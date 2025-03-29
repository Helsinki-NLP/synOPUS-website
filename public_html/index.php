<?php include("count.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
  <meta name="generator" content="HTML Tidy for Linux (vers 25 March 2009), see www.w3.org">
  <title>synOPUS - an open corpus of synthetic parallel data</title>
  <link rel="stylesheet" href="index.css" type="text/css">
  <link rel="icon" href="favicon.ico" type="image/vnd.microsoft.icon">
  <script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-19943693-2']);
  _gaq.push(['_trackPageview']);
  (function() {
  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
  </script>
</head>

<body bgcolor="#FFFFFF" text="#000000" link="#FF0000" vlink="#800000" alink="#FF00FF">
  <div class="header">
    <?php include("header.php"); ?>
  </div>

  <div class="news">
    <h3>Latest News</h3>
    <ul>
      <li>2025-03-28: <a href="https://opus.nlpl.eu/legacy/synOpusExplorer/">synOPUS Explorer</a></li>
      <li>2025-03-26: <a href="Europarl.php">synthetic Europarl</a></li>
      <li>2025-03-25: <a href="https://github.com/Helsinki-NLP/synOPUS">synOPUS on GitHub</a></li>
    </ul>
  </div>

  <h1><img src="img/synopus_medium.png" width="160"> the synthetic open parallel corpus</h1>

  <p><a href="https://opus.nlpl.eu">OPUS</a> is a growing collection of translated texts. <b>synOPUS</b> is a new edition that provides synthetic data sets, i.e. data that has (partially) been generated, for example, by translating text into other languages using machine translation tools or large language models. We used several tools to compile the current collection. All pre-processing is done automatically. No manual corrections have been carried out.</p>

  <p>Contributions are very welcome! Please contact &lt;opus-project<?php
     echo '&#64;'; 
  ?>helsinki.fi
  &gt;</p>

  <a name="download" id="download"></a>

  <table align="center" width="100%">
    <tr>
      <td valign="top">
 
        <b>Tools &amp; Info</b>
        <ul>
	  <li><a href="https://opus.nlpl.eu/legacy/synOpusExplorer/">synOPUS Explorer</a></li>
	  <li><a href="https://pypi.org/project/opustools/">OPUS tools</a> (Python package)</li>
	  <li><a href="https://github.com/Helsinki-NLP/OpusFilter">OpusFilter</a></li>
	  <li><a href="https://github.com/Helsinki-NLP/OPUS-MT">OPUS-MT</a></li>
	  <li><a href="https://github.com/Helsinki-NLP/OPUS-CAT">OPUS-CAT</a></li>
	  <li><a href="https://github.com/Helsinki-NLP/Tatoeba-Challenge">The Tatoeba MT Challenge</a></li>
        </ul>
      </td>

      <td valign="top">
        <p><b>Released Datasets</b><br></p>
	<table>
	  <tr>
	    <td>
              <ul>
                <li><a href="Europarl.php">EUROPARL - European Parliament Proceedings</a></li>
              </ul>
	    </td>
	    <td>
	    </td>
	  </tr>
	</table>
      </td>
    </tr>
  </table>

  Please look at the publications below for more information about OPUS.<br>
  Please cite the <a href="LREC2012.txt">first</a> one in the list if 
  you use any part of the corpus in your own work!
  <hr>

  <div class="publications">
    <a name="OO" id="OO"></a>

    <h3>Publications</h3>

    <table>
      <tr>
        <td>
          <dl>
            <dt>J&ouml;rg Tiedemann, 2012,</dt>
            <dd>Parallel Data, Tools and Interfaces in OPUS.
                <a href="http://www.lrec-conf.org/proceedings/lrec2012/pdf/463_Paper.pdf">[pdf]</a><br>
                In <cite>Proceedings of the 8th International
                Conference on Language Resources and Evaluation
                (LREC'2012)</cite></dd>


	    <dt>J&ouml;rg Tiedemann and Santhosh Thottingal, 2020</dt>
	    <dd><a href="https://www.aclweb.org/anthology/2020.eamt-1.61/">OPUS-MT – Building open translation services for the World.<a/> In <cite><a href="https://www.aclweb.org/anthology/volumes/2020.eamt-1/">Proceedings of the 22nd Annual Conference of the European Association for Machine Translation</a></cite>, 2020 (<a href="https://www.aclweb.org/anthology/2020.eamt-1.61.bib">bib</a>, <a href="https://www.aclweb.org/anthology/2020.eamt-1.61.pdf">pdf</a>)

	    <dt>Mikko Aulamo, Sami Virpioja, Jörg Tiedemann, 2020</dt>
	    <dd><a href="https://www.aclweb.org/anthology/2020.acl-demos.20/">OpusFilter: A Configurable Parallel Corpus Filtering Toolbox.<a/> In <cite><a href="https://www.aclweb.org/anthology/volumes/2020.acl-demos/">Proceedings of the 58th Annual Meeting of the Association for Computational Linguistics: System Demonstrations</a></cite>, 2020 (<a href="https://www.aclweb.org/anthology/2020.acl-demos.20.bib">bib</a>, <a href="https://www.aclweb.org/anthology/2020.acl-demos.20.pdf">pdf</a>)

	    <dt>Mikko Aulamo, Umut Sulubacak, Sami Virpioja, Jörg Tiedemann, 2020</dt>
	    <dd><a href="https://www.aclweb.org/anthology/volumes/2020.lrec-1/">OpusTools and Parallel Corpus Diagnostics.<a/> In <cite><a href="https://www.aclweb.org/anthology/volumes/2020.lrec-1/">Proceedings of the 12th Language Resources and Evaluation Conference</a></cite>, 2020 (<a href="https://www.aclweb.org/anthology/2020.lrec-1.467.bib">bib</a>, <a href="https://www.aclweb.org/anthology/2020.lrec-1.467.pdf">pdf</a>)

	    <dt>J&ouml;rg Tiedemann, 2016a</dt>
	    <dd><a href="http://www.bjmc.lu.lv/fileadmin/user_upload/lu_portal/projekti/bjmc/Contents/4_2_28_Products.pdf">OPUS
	    - Parallel Corpora for Everyone.</a> In <cite>Baltic
	    Journal of Modern Computing</cite> (BJMC), Vol 4, No. 2,
	    Special Issue: Proceedings of the 19th Annual Conference
	    of the European Association of Machine Translation (EAMT),
	    2016</dd>

	    <dt>J&ouml;rg Tiedemann, 2016b</dt>
	    <dd><a href="http://www.lrec-conf.org/proceedings/lrec2016/pdf/62_Paper.pdf">Finding
	    Alternative Translations in a Large Corpus of Movie
	    Subtitles.</a> In <cite>Proceedings of the 10th
	    International Conference on Language Resources and
	    Evaluation</cite> (LREC-2016), 2016.</dd>

	    <dt>Pierre Lison and J&ouml;rg Tiedemann, 2016</dt>
	    <dd><a href="http://www.lrec-conf.org/proceedings/lrec2016/pdf/947_Paper.pdf">OpenSubtitles2016:
	    Extracting Large Parallel Corpora from Movie and TV
	    Subtitles.</a> In <cite>Proceedings of the 10th
	    International Conference on Language Resources and
	    Evaluation</cite> (LREC-2016), 2016.</dd>

	    <dt>Raivis Skadi&ncedil;&#X0161;, J&ouml;rg Tiedemann,
	    Roberts Rozis and Daiga Deksne, 2014</dt>
	    <dd>Billions of Parallel Words for Free
            [<a href="eubookshop-lrec2014.txt">bib</a>]
            [<a href="eubookshop-lrec2014.pdf">pdf</a>]</br>
            In <cite>Proceedings of the 9th International Conference
            on Language Resources and Evaluation (LREC'2014)</cite>,
            Reykjavik, Iceland</dd>

            <dt>J&ouml;rg Tiedemann, 2009,</dt>
            <dd>News from OPUS - A Collection of Multilingual Parallel
            Corpora with Tools and
            Interfaces <a href="http://stp.lingfil.uu.se/~joerg/published/ranlp-V.pdf">[pdf]</a><br>
            In N. Nicolov and K. Bontcheva and G. Angelova and
            R. Mitkov (eds.) <cite>Recent Advances in Natural Language
            Processing</cite> (vol V), pages 237-248, John Benjamins,
            Amsterdam/Philadelphia</dd>

            <dt>J&ouml;rg Tiedemann, 2011,</dt>
            <dd><a href="http://dx.doi.org/10.2200/S00367ED1V01Y201106HLT014">Bitext
            Alignment</a>, Synthesis Lecture on HLT, Morgan &amp;
            Claypool Publishers
            (at <a href="http://www.amazon.com/Alignment-Synthesis-Lectures-Language-Technologies/dp/1608455106">Amazon</a>)</dd>

            <dt>J&ouml;rg Tiedemann, 2008,</dt>
            <dd>Synchronizing Translated Movie
            Subtitles. <a href="http://stp.lingfil.uu.se/~joerg/published/lrec08.pdf">[pdf]</a><br>
            In <cite>Proceedings of the 6th International Conference
            on Language Resources and Evaluation
            (LREC'2008)</cite></dd>

            <dt>J&ouml;rg Tiedemann, 2007,</dt>
            <dd>Building a Multilingual Parallel Subtitle
            Corpus. <a href="http://stp.lingfil.uu.se/~joerg/paper/clin17.pdf">[pdf]</a><br>
            In <cite>Proceedings of CLIN 17</cite>, Leuven, Belgium,
            2007.</dd>

            <dt>J&ouml;rg Tiedemann, 2007,</dt>
            <dd>Improved Sentence Alignment for Movie
            Subtitles. <a href="http://stp.lingfil.uu.se/~joerg/paper/ranlp07-subalign.pdf">[pdf]</a><br>
            In <cite>Proceedings of RANLP '07</cite>, Borovets,
            Bulgaria, 2007.</dd>

            <dt>J&ouml;rg Tiedemann, 2003</dt>
            <dd>OPUS - an open source parallel
            corpus. <a href="http://stp.lingfil.uu.se/~joerg/paper/Nodalida03.pdf">[pdf]</a><br>
            In <cite>Proceedings of the 13th Nordic Conference on
            Computational Linguistics</cite>, University of Iceland,
            Reykjavik, 2003.</dd>

            <dt>J&ouml;rg Tiedemann, Lars Nygaard, 2004</dt>
            <dd>The OPUS corpus - parallel &amp;
            free. <a href="http://stp.ling.uu.se/~joerg/paper/opus_lrec04.pdf">[pdf]</a><br>
            In <cite>Proceedings of the Fourth International
            Conference on Language Resources and Evaluation
            (LREC'04)</cite>. Lisbon, Portugal, May 26-28.</dd>
          </dl>
        </td>

        <td valign="top">A text book on alignment:<br>
        <br>
        <a href="http://www.morganclaypool.com/doi/abs/10.2200/S00367ED1V01Y201106HLT014"><img border="0" src="img/bitextalign.jpg" height="200"></a></td>
      </tr>
    </table>
  </div>
  <hr>
  <div class="footer">
    <table border="0" width="100%">
      <tr>
        <td><a href="http://www.nlpl.eu"><img border="0" src="img/nlpl.png" height="160"></a></td>
        <td><a href="https://www.csc.fi"><img border="0" src="img/csc.png" height="80"></a></td>
        <td><a href="http://www.helsinki.fi"><img border="0" src="img/HY.jpg" height="120"></a></td>
        <td align="center"><a href="https://www.kielipankki.fi"><img border="0"
        src="img/kielipankki.png"
        height="40"></a><br/><br/><a href="https://neic.no"><img border="0"
        src="img/neic.png" height="35"></a></td>
        <td><a href="http://essenceofescience.se/sensordata/#nivre"><img border="0"
        src="img/essence.png"
        width="120"></a><br/><br/><a href="http://www.letsmt.eu"><img border="0"
        src="img/letsmt.jpg" width="120"></a></td>

        <td align="right">
          <a href="https://clustrmaps.com/site/19vsj" title="Visit
          tracker"><img src="//clustrmaps.com/map_v2.png?cl=ffffff&w=a&t=tt&d=jb3_gRwq0W-55WUXelIQXTVQXy4zDuu5yhp8fuyAEZw"
          /></a>
        </td>
      </tr>
    </table>
  </div>
</body>
</html>
