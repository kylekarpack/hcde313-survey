<?php
include("common.html");
?>
		<div id="masthead">
			<h2>Your Progress:</h2>
			<div id="bar"></div>			
		</div>

			<h1>Welcome!</h1>
			<div id="intro">
				Thank you for taking time to be a part of this study. This is a project for HCDE 313 and an experiement in rapid web application development.
				I eventually hope to turn this project into a full-fledged piece of survey software. For now, your responses will help me build a database of information about University of Washington for use in several projects.
				For HCDE 313, I am exploring the <a target="_blank" href="http://chronicle.com/blogs/next/2012/09/12/skills-gap-employers-and-colleges-point-fingers-at-each-other/">skills gap.</a> Thanks for taking the time to help me learn about how out-of-class learning compares to learning at the UW. Your input is very valuable and can be used to help design better curricula and improve the hireability of University of Washington graduates.
				<br><span id="terms" >Learn More / Terms</span>
				<div id="info">
					<div id="disclaimer" class="close" title="Click to close">
						This survey is anonymous.<span class="close">X</span><br>
						The record kept of your survey responses does not contain any identifying information about you unless a specific question in the survey has asked for this. There is no way of identifying you through survey responses, and this data will be used solely for academic purposes.<br><br>
						If you do not agree, please <a href="#" class="quit">quit and exit now.</a><br><br>
						<button type="submit" class="close">Close this dialog</button>
					</div>
					<div id="build">
						<span class="close">X</span>
						<h4 style="margin:5px 0 10px;text-align:center;">About This Software:</h4>
						<ul>
							<li><span>Version:</span> 0.0.1</li>
							<li><span>Author:</span> <a href="/">Kyle Karpack</a></li>
							<li><span>Built With:</span> jQuery, jQuery UI, CSS, HTML, PHP, MySQL</li>
							<li><span>Tested in:</span> Chrome 24 on Windows, Chrome 24 on OSX</li>
							<li><span>Hand-coded from:</span> Start to finish</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="clear"></div>
			
			<form id="survey" method="post" action="submit.php">
				<h1>Questions:</h1>
				<div class="q">
					<p>1. Are you a student at or <span style="color:#2d2d2d;" title="less than 4 years" style="text-decoration:underline;cursor:default">recent</span> graduate of the University of Washington?</p>
					<label><input type="radio" name="q1" value="yes" /> Yes</label>
					<label><input type="radio" name="q1" value="no" /> No</label>
					<p id="err">This study is not for you! Please <span class="quit">go back</span></p>
				</div>
				
				<div class="q">
					<p>2. What is your major?<br>
					<select name="q2">
						<option select="" value="NONE"> Select your Major
						</option><option value="NONE"> NOT IN LIST / OTHER
						</option><option value="0ACMS  2015">ACMS: Biological and Life Sciences
						</option><option value="0ACMS  1015">ACMS: Discrete Math and Algorithms
						</option><option value="0ACMS  0015">ACMS: Engineering and Physical Science
						</option><option value="0ACMS  7015">ACMS: Mathematical Economics
						</option><option value="0ACMS  4015">ACMS: Operations Research
						</option><option value="0ACMS  3015">ACMS: Sci Comp &amp; Num Algorithms
						</option><option value="0ACMS  8015">ACMS: Social and Behavioral Science
						</option><option value="0ACMS  5015">ACMS: Statistics
						</option><option value="0A A   0016">Aeronautical &amp; Astronautical Engineering
						</option><option value="0A S   10  ">Aerospace Leadership Minor
						</option><option value="0AES   0011">American Ethnic Studies
						</option><option value="0AIS   0011">American Indian Studies
						</option><option value="0AIS   00  ">American Indian Studies Minor
						</option><option value="0ASL   00  ">American Sign Language Minor
						</option><option value="0ANTH  0011">Anthropology
						</option><option value="0ANTH  00  ">Anthropology Minor
						</option><option value="0ANTH  2011">Anthropology: AG Option
						</option><option value="0ANTH  1011">Anthropology: MAGH Option
						</option><option value="0AMATH 00  ">Applied Mathematics Minor
						</option><option value="0AFS   0016">Aquatic &amp; Fishery Sci (BS in Not admitting)
						</option><option value="0AFS   0015">Aquatic &amp; Fishery Sciences (BS)
						</option><option value="0AFS   00  ">Aquatic &amp; Fishery Sciences Minor
						</option><option value="0ARCHST5011">Arch Studies w/Const Mgmt
						</option><option value="0ARCHST0011">Architectural Studies
						</option><option value="0ARCH  00  ">Architecture Minor
						</option><option value="0ART H 0011">Art History
						</option><option value="0ART H 00  ">Art History Minor
						</option><option value="0ART   7014">Art: Ceramics (BFA Not admitting)
						</option><option value="0ART   0511">Art: Design Studies (BA)
						</option><option value="0ART   2014">Art: Fibers (BFA)
						</option><option value="0ART   2514">Art: Ind Design (BFA Not admitting)
						</option><option value="0DESIGN2517">Art: Industrial Design (BOD)
						</option><option value="0DESIGN0517">Art: Interaction Design (BOD)
						</option><option value="0ART   0011">Art: Interdisc. Visual Art (BA)
						</option><option value="0ART   1014">Art: Metals (BFA)
						</option><option value="0ART   6011">Art: Painting and Drawing (BA)
						</option><option value="0ART   6014">Art: Painting and Drawing (BFA)
						</option><option value="0ART   9514">Art: Photomedia (Formerly Photography) (BFA)
						</option><option value="0ART   5014">Art: Printmaking (BFA Not admitting)
						</option><option value="0ART   8014">Art: Sculpture (BFA Not admitting)
						</option><option value="0ART   9014">Art: Three Dimensional Forum (BFA)
						</option><option value="0ART   3214">Art: VCD (BFA Not admitting)
						</option><option value="0DESIGN3217">Art: Visual Communication Design (BOD)
						</option><option value="0ASTR  0015">Astronomy
						</option><option value="0ATM S 0015">Atmospheric Sciences
						</option><option value="0ATM S 00  ">Atmospheric Sciences Minor
						</option><option value="0BALTIC00  ">Baltic Studies Minor
						</option><option value="0BIOCHM0011">Biochemistry (BA)
						</option><option value="0BIOCHM0015">Biochemistry (BS)
						</option><option value="0BIOEN 0016">Bioengineering
						</option><option value="0BIOEN 6016">Bioengineering: Nanoscience/Molecular Engr Option
						</option><option value="0B H   00  ">Bioethics and Humanities Minor (Formerly MHE)
						</option><option value="0BIOL  0511">Biology (BA)
						</option><option value="0BIOL  0015">Biology: Cell &amp; Molecular (BS Not admitting)
						</option><option value="0BIOL  2015">Biology: Ecol &amp; Evol (Not admitting)
						</option><option value="0BIOL  1015">Biology: Ecol, Evol &amp; Cons Biol (Not admitting)
						</option><option value="0BIOL  4515">Biology: Ecology, Evolution &amp; Conservation
						</option><option value="0BIOL  2515">Biology: Envir &amp; Conservation (Not admitting)
						</option><option value="0BIOL  1515">Biology: General (BS)
						</option><option value="0BIOL  3015">Biology: Mlcr, Cell, Dvp
						</option><option value="0BIOL  3515">Biology: Physiology
						</option><option value="0BIOL  4015">Biology: Plant Biol
						</option><option value="0BSE   1015">Bioresource Sci &amp; Engineering: Business Opt (BS)
						</option><option value="0BSE   0015">Bioresource Sci &amp; Engineering: General Option (BS)
						</option><option value="0PEI   0012">Bus Admin: Entre &amp; Innovation (Not admitting)
						</option><option value="0B A   0012">Business Administration
						</option><option value="0ACCTG 0012">Business Administration: Accounting
						</option><option value="0ENTRE 0012">Business Administration: Entrepreneurship
						</option><option value="0FINANC0012">Business Administration: Finance
						</option><option value="0HRMGT 0012">Business Administration: Human Resource Mgmt
						</option><option value="0I S   0012">Business Administration: Information Systems
						</option><option value="0MKTG  1012">Business Administration: Marketing
						</option><option value="0OSCM  0012">Business Administration: Ops and Supply Chain Mgmt
						</option><option value="0CHEM E0016">Chemical Engineering
						</option><option value="0CHEM E0516">Chemical Engineering: Nanosci/Molecular Option
						</option><option value="0CHEM  0011">Chemistry (BA)
						</option><option value="0CHEM  0015">Chemistry (BS)
						</option><option value="0CHEM  1015">Chemistry (BS) ACS Cert
						</option><option value="0CHEM  00  ">Chemistry Minor
						</option><option value="0CHIN  0011">Chinese
						</option><option value="0CHIN  00  ">Chinese Minor
						</option><option value="0CIV E 0016">Civil Engineering
						</option><option value="0CL ST 0011">Classical Studies
						</option><option value="0CL ST 00  ">Classical Studies Minor
						</option><option value="0CLAS  0011">Classics
						</option><option value="0CL HST00  ">Classics and Ancient History Minor
						</option><option value="0CLIMAT00  ">Climate Science Minor
						</option><option value="0MEDXD 0017">Clinical Health Services
						</option><option value="0COM   0011">Communication
						</option><option value="0COM   00  ">Communication Minor (Not admitting)
						</option><option value="0COM E 0011">Communication: Evening
						</option><option value="0COM   3011">Communication: Journalism
						</option><option value="0CEP   0011">Community, Environment &amp; Planning
						</option><option value="0CHID  0011">Comparative History of Ideas
						</option><option value="0CHID  00  ">Comparative History of Ideas Minor
						</option><option value="0C LIT 0011">Comparative Literature
						</option><option value="0C LIT 00  ">Comparative Literature Minor
						</option><option value="0C LIT 3011">Comparative Literature: Cinema Studies
						</option><option value="0CMP E 0016">Computer Engineering
						</option><option value="0C SCI 0015">Computer Science
						</option><option value="0CM    0016">Construction Management
						</option><option value="0CM    5016">Construction Mgmt w/Arch Studies
						</option><option value="0DANCE 0011">Dance (Not admitting)
						</option><option value="0DANCE 00  ">Dance Minor
						</option><option value="0DANCE 2011">Dance: Creative Studies
						</option><option value="0DANCE 1011">Dance: Dance Studies
						</option><option value="0DANISH0011">Danish
						</option><option value="0DANISH00  ">Danish Minor
						</option><option value="0DXARTS0014">Digital Arts/Experimental Media
						</option><option value="0DIS ST00  ">Disability Studies Minor
						</option><option value="0DIVERS00  ">Diversity Minor
						</option><option value="0DRAMA 0011">Drama
						</option><option value="0DRAMA 5011">Drama: History, Theory, Criticism
						</option><option value="0DRAMA 6011">Drama: Performance
						</option><option value="0DRAMA 7011">Drama: Production
						</option><option value="0ECFS  0011">Early Childhood &amp; Family Studies
						</option><option value="0ESS   0015">Earth and Space Sci: Standard Opt (Not admitting)
						</option><option value="0ESS   0011">Earth and Space Sciences (BA)
						</option><option value="0ESS   00  ">Earth and Space Sciences Minor
						</option><option value="0ESS   1015">Earth and Space Sciences: Biology Option
						</option><option value="0ESS   3015">Earth and Space Sciences: Environmental Option
						</option><option value="0ESS   5015">Earth and Space Sciences: Geology Option
						</option><option value="0ESS   2015">Earth and Space Sciences: Physics Option
						</option><option value="0EELLC 0011">Eastern European Lang, Lit, &amp; Culture
						</option><option value="0ECORES00  ">Ecological Restoration Minor
						</option><option value="0ECON  0011">Economics (BA)
						</option><option value="0ECON  0015">Economics (BS)
						</option><option value="0ELS   00  ">Education, Learning &amp; Society Minor
						</option><option value="0E E   0016">Electrical Engineering
						</option><option value="0ENGL  0011">English
						</option><option value="0ENGL E0011">English: Evening
						</option><option value="0ENGL  2011">English: Writing Emphasis
						</option><option value="0ENVIR 1011">Envir Studies: Ecol/Conser (Not admitting)
						</option><option value="0ENVIR 0011">Envir Studies: Environmental Studies
						</option><option value="0ENVIR 00  ">Envir Studies: Environmental Studies Minor
						</option><option value="0ENVIR 4011">Envir Studies: International (Not admitting)
						</option><option value="0ENVIR 2011">Envir Studies: Pop &amp; Health (Not admitting)
						</option><option value="0ENVIR 3011">Envir Studies: Resources (Not admitting)
						</option><option value="0ENV H 0015">Environmental Health
						</option><option value="0ENV H 00  ">Environmental Health Minor
						</option><option value="0ESRM  00  ">ESRM: Env Science &amp; Resource Mgmt Minor
						</option><option value="0ESRM  0016">ESRM: General (BS in Not admitting)
						</option><option value="0ESRM  0015">ESRM: General (BS)
						</option><option value="0ESRM  2015">ESRM: Landscape Ecology &amp; Conservation (BS)
						</option><option value="0ESRM  2016">ESRM: LE &amp; C (BS in Not admitting)
						</option><option value="0ESRM  1016">ESRM: RE &amp; EH (BS in Not admitting)
						</option><option value="0ESRM  1015">ESRM: Restoration Ecol &amp; Envir Horticulture (BS)
						</option><option value="0ESRM  3016">ESRM: SFM (BS in Not admitting)
						</option><option value="0ESRM  3015">ESRM: Sustainable Forest Management (BS)
						</option><option value="0ESRM  4016">ESRM: WC (BS in Not admitting)
						</option><option value="0ESRM  4015">ESRM: Wildlife Conservation (BS)
						</option><option value="0ESTO  00  ">Estonian Minor
						</option><option value="0ETHNOM6011">Ethnomusicology
						</option><option value="0FINN  0011">Finnish
						</option><option value="0FINN  00  ">Finnish Minor
						</option><option value="0FRENCH0011">French
						</option><option value="0FRENCH00  ">French Minor
						</option><option value="0GWSS  0011">Gender, Women &amp; Sexuality Studies
						</option><option value="0GWSS  00  ">Gender, Women &amp; Sexuality Studies Minor
						</option><option value="0GEN ST0011">General Studies (BA) (Not admitting)
						</option><option value="0GEN ST0015">General Studies (BS) (Not admitting)
						</option><option value="0GEOG  0011">Geography
						</option><option value="0GEOG  00  ">Geography Minor
						</option><option value="0GERMAN0911">German Lang &amp; Lit (Not admitting)
						</option><option value="0GERMAN09  ">German Lang &amp; Lit Minor (Not admitting)
						</option><option value="0GERMAN0011">Germanics
						</option><option value="0GERMAN00  ">Germanics Minor
						</option><option value="0GERMAN1011">Germanics: Cultural Studies (Not admitting)
						</option><option value="0GERMAN10  ">Germanics: Minor Cltrl Studies (Not admitting)
						</option><option value="0GERMAN30  ">Germanics: Minor in Linguistics
						</option><option value="0GLOBLH00  ">Global Health Minor
						</option><option value="0GREEK 0011">Greek
						</option><option value="0GREEK 00  ">Greek Minor
						</option><option value="0HCDE  0516">HCDE: Human-Cmptr Interaction
						</option><option value="0HCDE  0016">HCDE: Individualized
						</option><option value="0HCDE  1016">HCDE: Technical Communication
						</option><option value="0HIHIME0016">Health Informatics &amp; Health Info Mgmt
						</option><option value="0HINDI 00  ">Hindi Minor (Not admitting see South Asian)
						</option><option value="0HIST  0011">History
						</option><option value="0HPS   0011">History and Philosophy of Science
						</option><option value="0HIST  00  ">History Minor
						</option><option value="0HSTSCI00  ">History of Science Minor
						</option><option value="0HIA E 0016">Hlth Info Admin (Not admitting)
						</option><option value="0HRGT  00  ">Human Rights Minor
						</option><option value="0HUM E 0011">Humanities: Evening
						</option><option value="0INDIV 0011">Individualized Studies (BA)
						</option><option value="0INDIV 0015">Individualized Studies (BS)
						</option><option value="0IND E 0016">Industrial Engineering
						</option><option value="0INFO  0016">Informatics
						</option><option value="0INFO  1016">Informatics: HCI Option
						</option><option value="0INFO  2016">Informatics: IA Option
						</option><option value="0SISA  0011">Intl Studies: Asian Studies
						</option><option value="0SISCA 0011">Intl Studies: Canadian Studies
						</option><option value="0RELIG 0011">Intl Studies: Comparative Religion
						</option><option value="0EURO  0011">Intl Studies: European Studies
						</option><option value="0SIS   0011">Intl Studies: General
						</option><option value="0SISJE 0011">Intl Studies: Jewish Studies
						</option><option value="0SISLA 0011">Intl Studies: Lat Am/Carib Studies
						</option><option value="0SIS   00  ">Intl Studies: Minor (General)
						</option><option value="0SISAF 00  ">Intl Studies: Minor in African Studies
						</option><option value="0SISCA 00  ">Intl Studies: Minor in Canadian Studies
						</option><option value="0SISCH 00  ">Intl Studies: Minor in China Studies
						</option><option value="0SISCI 00  ">Intl Studies: Minor in Comparative Islamic Studies
						</option><option value="0RELIG 00  ">Intl Studies: Minor in Comparative Religion
						</option><option value="0EURO  00  ">Intl Studies: Minor in European Studies
						</option><option value="0SISJA 00  ">Intl Studies: Minor in Japan Studies
						</option><option value="0SISJE 00  ">Intl Studies: Minor in Jewish Studies
						</option><option value="0SISKO 00  ">Intl Studies: Minor in Korea Studies
						</option><option value="0SISLA 00  ">Intl Studies: Minor in Latin Am/Carib Studies
						</option><option value="0SISSA 00  ">Intl Studies: Minor in South Asia
						</option><option value="0SISSE 00  ">Intl Studies: Minor in Southeast Asia
						</option><option value="0ITAL  0011">Italian
						</option><option value="0ITAL  00  ">Italian Minor
						</option><option value="0JAPAN 0011">Japanese
						</option><option value="0JAPAN 00  ">Japanese Minor
						</option><option value="0KOREAN0011">Korean
						</option><option value="0KOREAN00  ">Korean Minor
						</option><option value="0LABOR 00  ">Labor Studies Minor
						</option><option value="0L ARCH0017">Landscape Architecture
						</option><option value="0L STU 00  ">Landscape Studies Minor (Not admitting)
						</option><option value="0LATIN 0011">Latin
						</option><option value="0LATIN 00  ">Latin Minor
						</option><option value="0LATV  00  ">Latvian Minor
						</option><option value="0LSJ   0011">Law, Societies &amp; Justice
						</option><option value="0LSJ   00  ">Law, Societies &amp; Justice Minor
						</option><option value="0LAW   0000">Law: Juris Doctor 
						</option><option value="0LING  0011">Linguistics
						</option><option value="0LING  00  ">Linguistics Minor
						</option><option value="0LITH  00  ">Lithuanian Minor
						</option><option value="0MARBIO00  ">Marine Biology Minor
						</option><option value="0MS E  0016">Materials Science &amp; Engineering
						</option><option value="0MS E  00  ">Materials Science &amp; Engineering Minor
						</option><option value="0MS E  7016">Materials Science &amp; Engr: Nanosci/Molecular Engr
						</option><option value="0MATH  00  ">Mathematics Minor
						</option><option value="0MATH  6015">Mathematics: Comprehensive
						</option><option value="0MATH  4011">Mathematics: Liberal Arts (Not admitting)
						</option><option value="0MATH  7011">Mathematics: Philosophy
						</option><option value="0MATH  0011">Mathematics: Standard (BA)
						</option><option value="0MATH  0015">Mathematics: Standard (BS)
						</option><option value="0MATH  1011">Mathematics: Teacher Prep
						</option><option value="0M E   0016">Mechanical Engineering
						</option><option value="0M E   6016">Mechanical Engineering: Mechatronics
						</option><option value="0M E   9516">Mechanical Engineering: Nanosci &amp; Molec Engr
						</option><option value="0MHE   00  ">Med Hist/Eth Minor (Not admitting see Bioethics)
						</option><option value="0MED T 0016">Medical Technology
						</option><option value="0MICRO 0015">Microbiology
						</option><option value="0MICRO 00  ">Microbiology Minor
						</option><option value="0M SCI 10  ">Military Sci/Leadership Minor
						</option><option value="0MUSIC 0011">Music (BA)
						</option><option value="0MUSIC 00  ">Music Minor
						</option><option value="0MUSAP 1018">Music: Composition (BA/BM)
						</option><option value="0MUSAP 1017">Music: Composition (BM)
						</option><option value="0MUSIC 6411">Music: Early Music Option (BA)
						</option><option value="0MUSIC 4018">Music: Guitar (BA/BM)
						</option><option value="0MUSIC 4017">Music: Guitar (BM)
						</option><option value="0MUSIC 3018">Music: Jazz Studies (BA/BM)
						</option><option value="0MUSIC 3017">Music: Jazz Studies (BM)
						</option><option value="0MUSAP 7018">Music: Music Education (BA/BM)
						</option><option value="0MUSAP 7017">Music: Music Education (BM)
						</option><option value="0MUSIC 1018">Music: Music History (BA/BM)
						</option><option value="0MUSIC 1011">Music: Music History Option (BA)
						</option><option value="0MUSAP 6018">Music: Orchestral Instrument (BA/BM)
						</option><option value="0MUSAP 6017">Music: Orchestral Instrument (BM)
						</option><option value="0MUSAP 5018">Music: Organ Performance (BA/BM)
						</option><option value="0MUSAP 5017">Music: Organ Performance (BM)
						</option><option value="0MUSAP 2018">Music: Piano Performance (BA/BM)
						</option><option value="0MUSAP 2017">Music: Piano Performance (BM)
						</option><option value="0MUSAP 3018">Music: String Performance (BA/BM)
						</option><option value="0MUSAP 3017">Music: String Performance (BM)
						</option><option value="0MUSAP 4018">Music: Vocal Performance (BA/BM)
						</option><option value="0MUSAP 4017">Music: Vocal Performance (BM)
						</option><option value="0MUSIC 5811">Music: Voice Option (BA)
						</option><option value="0N SCI 00  ">Naval Science Minor
						</option><option value="0NEAR E5011">Near Eastern Studies: Biblical &amp; Ancient
						</option><option value="0NEAR E4011">Near Eastern Studies: Comparative Islamic
						</option><option value="0NEAR E3011">Near Eastern Studies: Culture &amp; Civilization
						</option><option value="0NEAR E2011">Near Eastern Studies: Languages &amp; Civilization
						</option><option value="0NEAR E00  ">Near Eastern Studies: Minor
						</option><option value="0NBIO  0015">Neurobiology
						</option><option value="0NORW  0011">Norwegian
						</option><option value="0NORW  00  ">Norwegian Minor
						</option><option value="0NURS  0016">Nursing
						</option><option value="0NURSX 0016">Nursing: Accelerated (postbaccalaureate)
						</option><option value="0OCEAN 0011">Oceanography (BA)
						</option><option value="0OCEAN 0015">Oceanography (BS)
						</option><option value="0OCEAN 00  ">Oceanography Minor
						</option><option value="0PALEOB00  ">Paleobiology Minor
						</option><option value="0PSE   1015">Paper Sci &amp; Engr: Bus Opt (BS Not admitting)
						</option><option value="0PSE   1016">Paper Sci &amp; Engr: Bus Option (BS in Not admitting)
						</option><option value="0PSE   0015">Paper Sci &amp; Engr: Gen Opt (BS Not admitting)
						</option><option value="0PSE   0016">Paper Sci &amp; Engr: Gen Option (BS in Not admitting)
						</option><option value="0MEDXPM0017">Paramedicine
						</option><option value="0PHIL  0011">Philosophy
						</option><option value="0PHIL  00  ">Philosophy Minor
						</option><option value="0PHYS  0015">Physics (Not admitting see Physics options)
						</option><option value="0PHYS  00  ">Physics Minor
						</option><option value="0PHYS  0115">Physics: Applied Physics
						</option><option value="0PHYS  0215">Physics: Biophysics
						</option><option value="0PHYS  0315">Physics: Comprehensive
						</option><option value="0PHYS  0415">Physics: Teacher Preparation
						</option><option value="0POL S 00  ">Political Science Minor
						</option><option value="0POL S 0011">Political Science: General
						</option><option value="0POL S 8011">Political Science: International Security
						</option><option value="0POL S 7011">Political Science: Political Economy
						</option><option value="0PR O  0015">Prosthetics and Orthotics (Not admitting)
						</option><option value="0PSYCH 0011">Psychology (BA)
						</option><option value="0PSYCH 0015">Psychology (BS)
						</option><option value="0PH    0011">Public Health (BA)
						</option><option value="0PH    0015">Public Health (BS)
						</option><option value="0PH&amp;CM 00  ">Public Health Minor (Not admitting)
						</option><option value="0Q SCI 00  ">Quantitative Science Minor
						</option><option value="0ROM LI0011">Romance Linguistics
						</option><option value="0RUSS  0011">Russian
						</option><option value="0RL SL 00  ">Russian Lit/Slavic Literatures Minor
						</option><option value="0RUSLAN00  ">Russian Minor
						</option><option value="0SNKRT 00  ">Sanskrit Minor (Not admitting see So Asian)
						</option><option value="0SCAN A0011">Scandinavian Area Studies
						</option><option value="0SCAN A00  ">Scandinavian Area Studies Minor
						</option><option value="0SLAV  00  ">Slavic Languages Minor
						</option><option value="0SOCS E0011">Social Sciences: Evening
						</option><option value="0SOC WF0011">Social Welfare
						</option><option value="0SOC   0011">Sociology
						</option><option value="0SOC E 0011">Sociology: Evening (Not admitting)
						</option><option value="0SOC   4011">Sociology: Global &amp; Soc Chng (Not admitting)
						</option><option value="0SOC   2011">Sociology: Indiv &amp; Society (Not admitting)
						</option><option value="0SOC   1011">Sociology: Law, Society &amp; Soc Pol (Not admitting)
						</option><option value="0SOC   3011">Sociology: Social Orgs (Not admitting)
						</option><option value="0SASIAN00  ">South Asian L&amp;L Minor
						</option><option value="0SASIAN0011">South Asian Languages
						</option><option value="0SPAN  0011">Spanish
						</option><option value="0SPAN  00  ">Spanish Minor
						</option><option value="0SPHSCX0015">Speech and Hearing Science: Extension Postbac
						</option><option value="0SPHSC 0015">Speech and Hearing Sciences
						</option><option value="0SPHSC 0115">Speech and Hearing Sciences: Comm Disorders
						</option><option value="0STAT  0015">Statistics
						</option><option value="0STAT  00  ">Statistics Minor
						</option><option value="0STREAM00  ">Streamside Studies Minor (Not admitting)
						</option><option value="0SWED  0011">Swedish
						</option><option value="0SWED  00  ">Swedish Minor
						</option><option value="0T C   0016">Technical Communication
						</option><option value="0TJP   00  ">Technical Japanese Minor
						</option><option value="0URBDP 00  ">Urban Design and Planning Minor
						</option><option value="0UED   00  ">Urban Ecological Design Minor
						</option><option value="0VALUES00  ">Values in Society Minor
						</option><option value="0WOMEN 0011">Women Studies (Not admitting)
						</option><option value="0WOMEN 00  ">Women Studies Minor (Not admitting)
						</option>
					</select>
				</div>
				
				<div class="q">
					<p>3. What is your class standing?</p>
						<input type ="radio" name="q3" value="freshman"></input>Freshman<br>
						<input type ="radio" name="q3" value="sophomore"></input>Sophomore<br>
						<input type ="radio" name="q3" value="junior"></input>Junior<br>
						<input type ="radio" name="q3" value="senior"></input>Senior<br>
						<input type ="radio" name="q3" value="super-senior"></input>Super Senior<br>
						<input type ="radio" name="q3" value="grad"></input>Graduate Student<br>
						<input type ="radio" name="q3" value="finished"></input>Recently Graduated / Other<br>
				</div>
				
				<div class="q">
					<p>4. What type of work do you plan to enter after graduation?<br><input type="text" name="q4"></input></p>
				</div>
				
				<div class="q">
					<p>5. How well do you feel that classes at the UW have prepared you for this field?<br>
						<fieldset style="max-width:500px;text-align:center;margin-top:5px;		">
						<input type="radio" name="q5" value="1" />
						<input type="radio" name="q5" value="2" />
						<input type="radio" name="q5" value="3" />
						<input type="radio" name="q5" value="4" />
						<input type="radio" name="q5" value="5" />
						<input type="radio" name="q5" value="6" />
						<input type="radio" name="q5" value="7" />
						<span style="float:left;">Not Well</span>
						<span style="float:right;">Very Well</span>
					</fieldset>
					</p>
				</div>
				
				<div class="q">
					<p>6. Please list at least 2 skills that you have developed IN CLASS. More is better!</p>
						<div id="q-six" class="plusMinus">
							<input name="q6[]" value=""></input>
							<input name="q6[]" value=""></input>
						</div>
						<div class="buttons">
							<button type="button" id="m6">- Remove
							<button type="button" id="p6">+ Add	
						</div>
				</div>
				
				<div class="q">
					<p>7. Please list at least 2 skills that you have developed OUTSIDE OF CLASS <em>(at work, independently, etc).</em> Again, more is better:</p>
						<div id="q-sev" class="plusMinus">
							<input name="q7[]" value=""></input>
							<input name="q7[]" value=""></input>
						</div>
						<div class="buttons">
							<button type="button" id="m7">- Remove
							<button type="button" id="p7">+ Add	
						</div>
				</div>
				
				<div class="q">
					<p>8. Which class at the UW has best prepared you for employment in your field?<br>
					<input name="q8"></input></p>
				</div>
				
				<div class="q">
					<p>9. What was good about this class?<br>
					<textarea rows="6" cols="55" name="q9"></textarea>
					</p>
				</div>
				
				<div class="q">
					<p>10. Rank the following in terms of most helpful to least helpful (click and drag to sort):</p>
					<ul class="sort">	
						<li class="ui-state-default"><input name="q10[]" value="Classroom Learning"></input></li>
						<li class="ui-state-default"><input name="q10[]" value="On the Job Learning"></input></li>
						<li class="ui-state-default"><input name="q10[]" value="Independent Learning"></input></li>
						<li class="ui-state-default"><input name="q10[]" value="Research / Volunteer Experience"></input></li>
					</ul>
				</div>
				
				<div class="q">
					<p>11. Do you have any comments or thoughts about the skills gap or university education in general?<br>
					<input name="q11"></input></p>
				</div>
				
				<input type="submit">
				<input type="submit" id="top">
			</form>
		</div>
	</div>
</body>
</html>