<div class='row'>
    <div class='col-md-12 text-center'>
        <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
                {
                    "symbols": [{
                            "proName": "FOREXCOM:SPXUSD",
                            "title": "S&P 500"
                        },
                        {
                            "proName": "FOREXCOM:NSXUSD",
                            "title": "Nasdaq 1000"
                        },
                        {
                            "proName": "FX_IDC:EURUSD",
                            "title": "EUR/USD"
                        },
                        {
                            "proName": "BITSTAMP:BTCUSD",
                            "title": "BTC/USD"
                        },
                        {
                            "proName": "BITSTAMP:ETHUSD",
                            "title": "ETH/USD"
                        },
                        {
                            "description": "",
                            "proName": "BMFBOVESPA:IBXX"
                        },
                        {
                            "description": "",
                            "proName": "COVID19:DEATHS_BR"
                        }
                    ],
                    "colorTheme": "dark",
                    "isTransparent": false,
                    "displayMode": "adaptive",
                    "locale": "br"
                }
            </script>
        </div>
        <img src="<?php echo base_url('assets/img') ?>/fundo3.png" alt="" class="img-fluid img-responsive mt-1" style="width: 100%;">
        <!-- TradingView Widget END -->
    </div>

</div>


<script>
    $('.home').addClass('active');
</script>