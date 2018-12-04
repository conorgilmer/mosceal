<?php 
$thisPage = "Finance";
include ("inc/header.php");
include ("inc/menu.php");
?>

		   <!-- main page content -->
		  <div class="wrapper">
		  <!-- above the containers to push down the footer -->

		      <div class="container">


	<!-- Page stuff -->
<h2> Finance Widgets </h2>
   <div class="row">
                        <div class="span1">
                        </div>
                        <div class="span5">
<h4>TC2000</h4>
                        </div>
                        <div class="span5">
<h4>Currencies Investing.com</h4>
                        </div>
                        <div class="span1">
                        </div>
     </div>
   <div class="row">
                        <div class="span1">
                        </div>
                        <div class="span5">
<!-- Start TC2000 widget -->
<iframe width="320" noresize="noresize" scrolling="no" height="300" frameborder="0" src="https://widgets.tc2000.com/WidgetServer.ashx?id=123904"></iframe>
<!-- END TC2000 Widget -->
		</div>
                        <div class="span5">
<iframe frameborder="0" scrolling="auto" height="175" width="555" allowtransparency="true" marginwidth="0" marginheight="0" src="https://sslfxrates.forexprostools.com/index_exchange.php?params&inner-border-color=%23CBCBCB&border-color=%23cbcbcb&bg1=%23F6F6F6&bg2=%23ffffff&inner-text-color=%23000000&currency-name-color=%23000000&header-text-color=%23FFFFFF&force_lang=1" align="center"></iframe><br />

<a href="http://www.investing.com" target="_blank"><img src="https://wmt-invdn-com.akamaized.net/forexpros_en_logo.png" alt="Investing.com" title="Investing.com" style="float:left" /></a><span style="float:right"><span style="font-size: 11px;color: #333333;text-decoration: none;">The Exchange Rates are powered by <a href="https://www.investing.com/" rel="nofollow" target="_blank" style="font-size: 11px;color: #06529D; font-weight: bold;" class="underline_link">Investing.com</a>.</span></span>
		</div>
                        <div class="span1">
                        </div>
		</div>

   <div class="row">
<h4>tradingview.com</h4>
                        <div class="span1">
                        </div>
                        <div class="span11">

<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div id="tradingview_cb938"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/NASDAQ-AAPL/" rel="noopener" target="_blank"><span class="blue-text">AAPL chart</span></a> by TradingView</div>
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.widget(
  {
  "width": 980,
  "height": 610,
  "symbol": "NASDAQ:AAPL",
  "interval": "D",
  "timezone": "Etc/UTC",
  "theme": "Light",
  "style": "1",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "allow_symbol_change": true,
  "container_id": "tradingview_cb938"
}
  );
  </script>
</div>
<!-- TradingView Widget END -->
                        </div>
		</div>
   <div class="row">
<h4>Cryptocurrencies - Investing.com</h4>

                        <div class="span1">
                        </div>
                        <div class="span5">

<iframe src="https://www.widgets.investing.com/top-cryptocurrencies?theme=lightTheme" width="100%" height="600" frameborder="0" allowtransparency="true" marginwidth="0" marginheight="0"></iframe>

Powered by <a href="https://www.investing.com?utm_source=WMT&amp;utm_medium=referral&amp;utm_campaign=TOP_CRYPTOCURRENCIES&amp;utm_content=Footer%20Link" target="_blank" rel="nofollow">Investing.com</a>
		</div>

                        <div class="span5">
		</div>
                        <div class="span1">
                        </div>
		</div>

   <div class="row">
                        <div class="span1">
                        </div> 
                        <div class="span7">
<h4>Currencies - xe.com</h4>
                        </div> 
                        <div class="span3">
<h4>Currencies - fx-rate.net</h4>
                        </div> 
                        <div class="span1">
                        </div> 
   </div>
   <div class="row">

                        <div class="span1">
                        </div>

                        <div class="span7"
id="xecurrencywidget"></div>
<script>var xeCurrencyWidget = {"domain":"conorgilmer.eu","language":"en","size":"normal"};</script>
<script src="https://www.xe.com/syndication/currencyconverterwidget.js"></script>

                        <div class="span3"
<div align="center" style="margin-top: 30px;"><div align="center" style="margin: 0px; padding: 0px; border: 2px solid rgb(136, 136, 136); width: 135px; background-color: rgb(255, 255, 255);"><div align="center" style="width: 100%; border-bottom: 1px solid rgb(136, 136, 136); margin: 0px; padding: 0px; text-align: center; color: rgb(0, 0, 0); background-color: rgb(160, 192, 48);"><a href="https://fx-rate.net/EUR/" style="text-decoration: none; font-size: 14px; font-weight: bold; text-align: center; color: rgb(0, 0, 0);"><img src="https://fx-rate.net/images/countries/eu.png" style="margin: 0px; padding: 0px; border: none;"> Euro Exchange Rate</a></div><script type="text/javascript" src="https://fx-rate.net/fx-rates2.php?label_name=Euro Exchange Rate&lab=1&width=135&currency=EUR&cp1_Hex=000000&cp2_Hex=FFFFFF&cp3_Hex=a0c030&hbg=0&flag_code=eu&length=continent&label_type=currency&cp=000000,FFFFFF,a0c030&lang=en"></script></div></div>
                        </div>
                        <div class="span1">
                        </div>
                 </div>

<?php include ("inc/footer.php") ?>



