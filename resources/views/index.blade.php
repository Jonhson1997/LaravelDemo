@extends('layouts.layout')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    	<div class="hero-container" data-aos="fade-in">
    		<h1>Johnson</h1>
    		<p>#<span class="typed" data-typed-items="PHP, jQuery, Ajax, CodeIgniter, Python, Bootstrap"></span></p>
    	</div>
    </section><!-- End Hero -->
    <main id="main">
    	<!-- ======= About Section ======= -->
    	<section id="about" class="about">
    		<div class="container">
    			<div class="section-title">
    				<h2>關於我</h2>
    				<p>亞洲大學  資訊工程學系 / 杰鼎數位科技股份有限公司  高階程式設計師</p>
    			</div>
    			<div class="row">
    				<div class="col-lg-4" data-aos="fade-right">
    				  <img src="{{ asset('images/johnson.jpg') }}" class="img-fluid" alt="">
    				</div>
    				<div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
    					<h3>網站程式設計師</h3>
    					<p class="font-italic">
    						後端
    					</p>
    					<div class="row">
    						<div class="col-lg-6">
    							<ul>
    								<li><i class="icofont-rounded-right"></i> <strong>姓名</strong> 張健生</li>
    								<li><i class="icofont-rounded-right"></i> <strong>生日</strong> 1997/05/28</li>
    								<li><i class="icofont-rounded-right"></i> <strong>年齡</strong> 24</li>
    								<li><i class="icofont-rounded-right"></i> <strong>手機</strong> 0976****28</li>
    							</ul>
    						</div>
    						<div class="col-lg-6">
    							<ul>
    								<li><i class="icofont-rounded-right"></i> <strong>學位</strong> 學士</li>
    								<li><i class="icofont-rounded-right"></i> <strong>Email:</strong> johnson97312@gmail.com</li>
    								<li><i class="icofont-rounded-right"></i> <strong>職業:</strong> 網站後端工程師</li>
    							</ul>
    						</div>
    					</div>
    					<div>
    						大學就讀資訊工程學系，期間參加多個產學合作案：<br />
							電子書軟體開發、募資平台網站開發、叫車服務APP開發、<br />
							租借腳踏車感應系統開發、校園植物導覽平台開發、寶成公司滲透測試等。<br />
							於四年級時至杰鼎數位科技公司實習擔任工程師，畢業後繼續在職到現在，<br />
							期間開發多個常用套件、研發快速優化SEO、Google評分的套件、使用步驟、相容後台端，<br />
							並獨力完成20餘個案件，其中包含百萬等級的複雜購物型案件。
    					</div>
    				</div>
    			</div>
    		</div>
    	</section><!-- End About Section -->

    	<!-- ======= Facts Section ======= -->
    	<section id="facts" class="facts">
    		<div class="container">
    			<div class="section-title">
    				<h2>案件經驗</h2>
    				<p>曾獨立開發過業界知名企業網站如:山隆通運、國立中興大學、德盟企業、泰和碩藥品、楓林館等</p>
    			</div>
    			<div class="row no-gutters">
    				<div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
    					<div class="count-box">
    						<i class="icofont-repair"></i>
    						<span data-toggle="counter-up">122</span>
    						<p><strong>舊案維護</strong> 資深維護經驗</p>
    					</div>
    				</div>
    				<div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="100">
    					<div class="count-box">
    						<i class="icofont-badge"></i>
    						<span data-toggle="counter-up">20</span>
    						<p><strong>企業形象</strong> 快速開發技術</p>
    					</div>
    				</div>
    				<div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="200">
    					<div class="count-box">
    						<i class="icofont-shopping-cart"></i>
    						<span data-toggle="counter-up">3</span>
    						<p><strong>電商平台</strong> 獨立作業能力</p>
    					</div>
    				</div>
    				<div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="300">
    					<div class="count-box">
    						<i class="icofont-users-alt-5"></i>
    						<span data-toggle="counter-up">5</span>
    						<p><strong>複雜客製</strong> 團隊協調開發</p>
    					</div>
    				</div>
    			</div>
    		</div>
    	</section><!-- End Facts Section -->

    	<!-- ======= Skills Section ======= -->
    	<section id="skills" class="skills section-bg">
    		<div class="container">
    			<div class="section-title">
    				<h2>語言 / 技術</h2>
    				<!-- <p>文本</p> -->
    			</div>
    			<div class="row skills-content">
    				<div class="col-lg-6" data-aos="fade-up">
    					<div class="progress">
    						<span class="skill">HTML <i class="val">100%</i></span>
    						<div class="progress-bar-wrap">
    							<div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
    						</div>
    					</div>
                        <div class="progress">
                            <span class="skill">PHP <i class="val">100%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="progress">
                            <span class="skill">JavaScript <i class="val">80%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="progress">
                            <span class="skill">Ajax <i class="val">80%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="progress">
                            <span class="skill">Java <i class="val">70%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
    				</div>
    				<div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="progress">
                            <span class="skill">Bootstrap <i class="val">75%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
    					<div class="progress">
    						<span class="skill">CodeIgniter <i class="val">90%</i></span>
    						<div class="progress-bar-wrap">
    							<div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
    						</div>
    					</div>
    					<div class="progress">
    						<span class="skill">jQuery <i class="val">90%</i></span>
    						<div class="progress-bar-wrap">
    							<div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
    						</div>
    					</div>
                        <div class="progress">
                            <span class="skill">Python <i class="val">70%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="progress">
                            <span class="skill">API串接 <i class="val">95%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
    				</div>
    			</div>
    		</div>
    	</section><!-- End Skills Section -->

    	<!-- ======= Resume Section ======= -->
    	<section id="resume" class="resume">
    		<div class="container">
    			<div class="section-title">
    				<h2>經歷</h2>
    				<!-- <p>文本</p> -->
    			</div>
    			<div class="row">
    				<div class="col-lg-6" data-aos="fade-up">
    					<h3 class="resume-title">摘要</h3>
    					<div class="resume-item pb-0">
    						<h4>張健生</h4>
    						<p><em>具有高度學習力及適應力的程式設計師，擁有2年以上工作經驗，擅長PHP、CodeIgniter、jQuery、Ajax等技術，並在大學時期參加多個產學合作案。</em></p>
    						<ul>
    							<li>台中市</li>
    							<li>0976-602-528</li>
    							<li>johnson97312@gmail.com</li>
    						</ul>
    					</div>
    					<h3 class="resume-title">學歷</h3>
    					<div class="resume-item">
    						<h4>資訊工程學系學士</h4>
    						<h5>2015 - 2019</h5>
    						<p><em>台中市霧峰區亞洲大學</em></p>
    						<p>在一年級時因成績優異受到教授青睞，邀請加入實驗室，並在二、三年級時參加ITSA & PTC等相關程式競賽於校內獲得優異成績，期間參與了多項產學合作案：</p>
                            <ul>
                                <li>電子書軟體開發</li>
                                <li>募資平台網站開發</li>
                                <li>叫車服務APP開發</li>
                                <li>租借腳踏車感應系統開發</li>
                                <li>校園植物導覽平台開發</li>
                                <li>寶成公司滲透測試</li>
                            </ul>
                            <p>四年級時至業界實習並結合公司後台與LineBot技術開發出客製化後端管理LineBot功能，實習結束後持續就職至今。</p>
    					</div>
    				</div>
    				<div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
    					<h3 class="resume-title">經歷</h3>
    					<div class="resume-item">
    						<h4>高階程式設計師</h4>
    						<h5>2018 - 仍在職</h5>
    						<p><em>杰鼎數位科技公司</em></p>
    						<ul>
    							<li>負責專案獨立開發，效能優化，全端工程</li>
    							<li>給予案件規劃建議，架構設計，流程檢驗</li>
    							<li>開發前、後端模組及常用插件供生產部門使用</li>
    							<li>協助設計部門套用、修改前端插件</li>
    						</ul>
    					</div>
    				</div>
    			</div>
    		</div>
    	</section><!-- End Resume Section -->

    	<!-- ======= Portfolio Section ======= -->
    	<section id="portfolio" class="portfolio section-bg">
    		<div class="container">
    			<div class="section-title">
    				<h2>作品</h2>
    				<!-- <p>文本</p> -->
    			</div>
    			<div class="row" data-aos="fade-up">
    				<div class="col-lg-12 d-flex justify-content-center">
    					<ul id="portfolio-flters">
    						<li data-filter="*" class="filter-active">全部</li>
    						<li data-filter=".filter-01">企業形象</li>
    						<li data-filter=".filter-02">電商平台</li>
    					</ul>
    				</div>
    			</div>
    			<div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
                    @foreach($items as $k => $v)
    				<div class="col-lg-4 col-md-6 portfolio-item filter-{{$v['type']}}">
    					<div class="portfolio-wrap">
    						<img src="{{ asset('images/'.$v['img']) }}" class="img-fluid" alt="">
    						<div class="portfolio-links">
    							<a href="{{ asset('images/'.$v['img']) }}" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
    							<a href="{{(!empty($v['url']))?$v['url']:'JavaScript:void(0)'}}" target="{{(!empty($v['url']))?'_blank':''}}" title="More Details"><i class="bx bx-link"></i></a>
    						</div>
    					</div>
    				</div>
                    @endforeach
    			</div>
    		</div>
    	</section><!-- End Portfolio Section -->
    </main>
@endsection
