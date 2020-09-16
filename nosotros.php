<?php include('header.php'); ?>
<section class="text-center pt-5 mt-5">
    <h1><?php lang('us_001');?></h1>
</section>
<div class="container py-5 about_us">
    <h4 class="mb-5 text-center"><?php lang('us_002');?></h4>
    <div class="row text-center">
        <div class="col-6 col-md-4 col-lg-3">
            <h2 class="timer count-title count-number display-2" data-to="30" data-speed="1500"></h2>
            <p class="count-text "><?php lang('us_003');?></p>
        </div>
        <div class="col-6 col-md-4 col-lg-3">
            <h2 class="timer count-title count-number display-2" data-to="1000" data-speed="1500"></h2>
            <p class="count-text "><?php lang('us_004');?></p>
        </div>
        <div class="col-6 col-md-4 col-lg-3">
            <h2 class="timer count-title count-number display-2" data-to="6" data-speed="1500"></h2>
            <p class="count-text "><?php lang('us_005');?></p>
        </div>
        <div class="col-6 col-md-4 col-lg-3">
            <h2 class="timer count-title count-number display-2" data-to="5" data-speed="1500"></h2>
            <span class="display-2">M</span>
            <p class="count-text "><?php lang('us_006');?></p>
        </div>

        <div class="col-6 col-md-4 col-lg-3">
            <h2 class="timer count-title count-number display-2" data-to="30" data-speed="1500"></h2>
            <span class="display-2">M</span>
            <p class="count-text "><?php lang('us_007');?></p>
        </div>
        <div class="col-6 col-md-4 col-lg-3">
            <h2 class="timer count-title count-number display-2" data-to="100" data-speed="1500"></h2>
            <span class="display-2">K</span>
            <p class="count-text "><?php lang('us_008');?></p>
        </div>
        <div class="col-6 col-md-4 col-lg-3">
            <h2 class="timer count-title count-number display-2" data-to="100" data-speed="1500"></h2>
            <p class="count-text "><?php lang('us_009');?></p>
        </div>
        <div class="col-6 col-md-4 col-lg-3">
            <h2 class="timer count-title count-number display-2" data-to="6" data-speed="1500"></h2>
            <p class="count-text "><?php lang('us_010');?></p>
        </div>
    </div>
</div>
<div class="video pb-5">
    <iframe src="https://player.vimeo.com/video/345543171?title=0&byline=0" width="100%" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
</div>

<script type="text/javascript">
    $(document).ready(function ($) {
        $.fn.countTo = function (options) {
            options = options || {};

            return $(this).each(function () {
                // set options for current element
                var settings = $.extend({}, $.fn.countTo.defaults, {
                    from:            $(this).data('from'),
                    to:              $(this).data('to'),
                    speed:           $(this).data('speed'),
                    refreshInterval: $(this).data('refresh-interval'),
                    decimals:        $(this).data('decimals')
                }, options);

                // how many times to update the value, and how much to increment the value on each update
                var loops = Math.ceil(settings.speed / settings.refreshInterval),
                    increment = (settings.to - settings.from) / loops;

                // references & variables that will change with each update
                var self = this,
                    $self = $(this),
                    loopCount = 0,
                    value = settings.from,
                    data = $self.data('countTo') || {};

                $self.data('countTo', data);

                // if an existing interval can be found, clear it first
                if (data.interval) {
                    clearInterval(data.interval);
                }
                data.interval = setInterval(updateTimer, settings.refreshInterval);

                // initialize the element with the starting value
                render(value);

                function updateTimer() {
                    value += increment;
                    loopCount++;

                    render(value);

                    if (typeof(settings.onUpdate) == 'function') {
                        settings.onUpdate.call(self, value);
                    }

                    if (loopCount >= loops) {
                        // remove the interval
                        $self.removeData('countTo');
                        clearInterval(data.interval);
                        value = settings.to;

                        if (typeof(settings.onComplete) == 'function') {
                            settings.onComplete.call(self, value);
                        }
                    }
                }

                function render(value) {
                    var formattedValue = settings.formatter.call(self, value, settings);
                    $self.html(formattedValue);
                }
            });
        };

        $.fn.countTo.defaults = {
            from: 0,               // the number the element should start at
            to: 0,                 // the number the element should end at
            speed: 1000,           // how long it should take to count between the target numbers
            refreshInterval: 100,  // how often the element should be updated
            decimals: 0,           // the number of decimal places to show
            formatter: formatter,  // handler for formatting the value before rendering
            onUpdate: null,        // callback method for every time the element is updated
            onComplete: null       // callback method for when the element finishes updating
        };

        function formatter(value, settings) {
            return value.toFixed(settings.decimals);
        }
    }(jQuery));

    jQuery(function ($) {
      // custom formatting example
      $('.count-number').data('countToOptions', {
        formatter: function (value, options) {
          return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
        }
      });

      // start all the timers
      $('.timer').each(count);

      function count(options) {
        var $this = $(this);
        options = $.extend({}, options || {}, $this.data('countToOptions') || {});
        $this.countTo(options);
      }
    });
</script>
<?php include('footer.php'); ?>
