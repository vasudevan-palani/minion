var gatsbyModule = angular.module('gatsby', ['ui.bootstrap','dndLists','ui.select2','angularFileUpload', 'summernote','highcharts-ng','datatables', 'datatables.bootstrap','datatables.tabletools']);


gatsbyModule.config(['$httpProvider', function($httpProvider) {
    $httpProvider.defaults.headers.common["X-Requested-With"] = 'XMLHttpRequest';
}]);

gatsbyModule.directive('donutEffort',function($rootScope)
{
  return {
    scope:{datamodel:'=',dataevent:'@'},
    restrict:'E',
    link: function (scope, elm, attrs) {
        var w = 300,
            h = 250;
        var colorscale = function (type) {
            switch (type) {
                case "task":
                    return "#1f77b4";
                case "incident":
                    return "#ff7f0e";
                case "ttrs":
                    return "#2ca02c";
                case "problem":
                    return "#d62728";
                case "change":
                    return "#9467bd";
                case "rrt":
                    return "#8c564b";
            }
        }

        var arcn = d3.svg.arc()
            .innerRadius(45)
            .outerRadius(85)
            .startAngle(function (d) {
            return (d.startAngle * (Math.PI / 180))
        })
            .endAngle(function (d) {
            return (d.endAngle * (Math.PI / 180))
        });

        var arcd = d3.svg.arc()
            .innerRadius(40)
            .outerRadius(42)
            .startAngle(0)
            .endAngle(0);


        var arc = d3.svg.arc()
            .innerRadius(50)
            .outerRadius(80)
            .startAngle(function (d) {
            return (d.startAngle * (Math.PI / 180))
        })
            .endAngle(function (d) {
            return (d.endAngle * (Math.PI / 180))
        });

        var backgroundarc = d3.svg.arc().innerRadius(50).outerRadius(80).startAngle(0).endAngle(2 * Math.PI);

        var svg = d3.select(elm[0]).append("svg:svg")
            .attr("width", w)
            .attr("height", h)
            .append("svg:g")
            .attr("transform", "translate(120," + (h / 2) + ")");

        svg.append('path').attr('d', backgroundarc).style('fill', '#DDDDDD');
        svg.append('path').attr('d', arcd).attr('id','arcd').style('fill', '#DDDDDD');

        svg.append("circle").attr("transform", "translate(130,-50)").attr("r", 5).style("fill", colorscale("incident"));
        svg.append("text").attr("transform", "translate(138,-47)").style("font-size", 12).text("Incident");

        svg.append("circle").attr("transform", "translate(130,-30)").attr("r", 5).style("fill", colorscale("task"));
        svg.append("text").attr("transform", "translate(138,-27)").style("font-size", 12).text("Task");

        svg.append("circle").attr("transform", "translate(130,-10)").attr("r", 5).style("fill", colorscale("ttrs"));
        svg.append("text").attr("transform", "translate(138,-7)").style("font-size", 12).text("Ttrs");

        svg.append("circle").attr("transform", "translate(130,10)").attr("r", 5).style("fill", colorscale("problem"));
        svg.append("text").attr("transform", "translate(138,13)").style("font-size", 12).text("Problem");

        svg.append("circle").attr("transform", "translate(130,30)").attr("r", 5).style("fill", colorscale("change"));
        svg.append("text").attr("transform", "translate(138,33)").style("font-size", 12).text("Change");

        svg.append("circle").attr("transform", "translate(130,50)").attr("r", 5).style("fill", colorscale("rrt"));
        svg.append("text").attr("transform", "translate(138,53)").style("font-size", 12).text("RRT");

        svg.append("text").attr("transform", "translate(-20,5)").attr('id',"centerText").text("24 hrs");

        function toFixed(value, precision) {
            var precision = precision || 0,
                power = Math.pow(10, precision),
                absValue = Math.abs(Math.round(value * power)),
                result = (value < 0 ? '-' : '') + String(Math.floor(absValue / power));

            if (precision > 0) {
                var fraction = String(absValue % power),
                    padding = new Array(Math.max(precision - fraction.length, 0) + 1).join('0');
                result += '.' + padding + fraction;
            }
            return result;
        }

        var drawDonut = function (data) {
            var startAngle = 0;
            for (var i = 0; i <= data.length - 1; i++) {
                var datum = data[i];
                var percent = datum.effort / 24.0 * 360;
                if (!angular.isUndefined(datum.startAngle)) {
                    datum.p_startAngle = datum.startAngle;
                } else {
                    datum.p_startAngle = 0;
                }
                if (!angular.isUndefined(datum.endAngle)) {
                    datum.p_endAngle = datum.endAngle;
                } else {
                    datum.p_endAngle = 0;
                }
                datum.startAngle = startAngle;
                datum.endAngle = startAngle + percent;
                startAngle = datum.endAngle + 1;
            };

            var path = svg.selectAll(".arc")
                .data(data);

            path.enter().append("svg:path")
                .attr("d", arc)
                .attr('class', 'arc')
                .on('click', function (d) {
                $rootScope.$broadcast(scope.dataevent, d);
            })
                .on('mouseover', function (d) {
                d3.select(this).transition(1000).attr('d', arcn);
                arcd.startAngle(d.startAngle * (Math.PI / 180));
                arcd.endAngle(d.endAngle * (Math.PI / 180));
                d3.select("#arcd").attr('d', arcd).style('fill', colorscale(d.type));;
                d3.select("#centerText").transition().duration(1000).text(toFixed(d.effort, 2) + " Hrs");
            })
                .on('mouseout', function (d) {
                d3.select(this).transition(1000).attr('d', arc);
                arcd.startAngle(0);
                arcd.endAngle(0);
                d3.select("#arcd").attr('d', arcd);
                d3.select("#centerText").transition().duration(1000).text("24 Hrs");
            })
                .style("cursor", "hand")
                .style("fill", function (d, i) {
                return colorscale(d.type)
            });

            path.style("fill", function (d, i) {
                return colorscale(d.type)
            });

            path.exit().remove();

            var percents = svg.selectAll(".percentText")
                .data(data);
            percents.exit().remove();
            percents.enter().append("svg:text").attr('class', 'percentText').style("font-size", 11).attr('transform', function (d) {
                var avg = (d.startAngle + d.endAngle) / 2 - 90;

                var x = 85 * Math.cos(avg * (Math.PI / 180));
                var y = 85 * Math.sin(avg * (Math.PI / 180));

                return "translate(" + x + "," + y + "), rotate(" + avg + ")";
            }).text(function (d) {
                return toFixed((d.endAngle - d.startAngle) * 100 / 360, 2) + "%";
            });

            percents.attr('transform', function (d) {
                var avg = (d.startAngle + d.endAngle) / 2 - 90;

                var x = 85 * Math.cos(avg * (Math.PI / 180));
                var y = 85 * Math.sin(avg * (Math.PI / 180));

                return "translate(" + x + "," + y + "), rotate(" + avg + ")";
            }).text(function (d) {
                return toFixed((d.endAngle - d.startAngle) * 100 / 360, 2) + "%";
            });

            path.transition().ease("elastic")
                .duration(5000)
                .attrTween("d", arcTween);

            function arcTween(b) {
                var i = d3.interpolate(b.startAngle, b.p_startAngle);
                var j = d3.interpolate(b.endAngle, b.p_endAngle);
                console.log(i);
                return function (t) {
                    b.startAngle = i(t);
                    b.endAngle = j(t);
                    return arc(b);
                };
            }
        }

        scope.$watch("datamodel", function () {
            drawDonut(scope.datamodel);
        }, true);

    }

  };

});

 gatsbyModule.directive('gatsbyCalendar',function()
 {
    return {
        require : 'ngModel',

        restrict : 'E',
        scope : {dateobj:'=ngModel',dateformat:'@format',disabled:'='},

        link : function(scope, element, attrs,ngModel)
        {

            var htmlcontent = '<div style="width:200px" class=" text-left input-group input-append date">\
                    <input data-format="'+scope.dateformat+'" maxlength="20" ng-model="dateobj" class="form-control input-group timestamp" type="text"></input>\
                    <span class="input-group-addon add-on">\
                      <i date-icon="glyphicon glyphicon-calendar" time-icon="glyphicon glyphicon-time" class="glyphicon glyphicon-calendar">\
                      </i>\
                    </span></div>';
            element.html(htmlcontent);


            if(!angular.isUndefined(attrs.pasteFormat))
            {
                $(element).find('input').on('paste', function () {
                  var e = this;
                  setTimeout(function()
                  {
                     
                    var text=$(e).val();
                    console.log(text);
                    console.log(attrs.pasteFormat);
                    //var date1 = Date.parseExact(text,attrs.pasteFormat);
                    var date1 = moment(text,attrs.pasteFormat);                    
                    console.log(date1);

                    if(attrs.dateTime == false)
                    {
                        $(e).val(date1.format("YYYY-MM-DD"));
                        console.log("dateTime == false");
                        console.log(date1.format("YYYY-MM-DD"));

                        $(e).trigger('change');                    
                    }
                    else
                    {
                        $(e).val(date1.format("YYYY-MM-DD HH:mm:ss"));
                        console.log("dateTime == true");
                        console.log(date1.format("YYYY-MM-DD HH:mm:ss"));

                        $(e).trigger('change');                    
                    }
                  },100)
                });

                //console.log(date1.format("yyyy-MM-dd HH:mm:ss"));
                //Thu Oct 01 2015 11:58:24 GMT+0530
            }



            scope.$watch("dateobj",function()
            {
                $(element).find("input").each(function(i,e)
                {
                    $(e).val(scope.dateobj);
                    $(e).trigger('change');
                    
                });
            });

            var options={};
            if(attrs.time == "false")
            {
                options.pickTime = false;
            }
            $(element).find("div").each(function(i,e)
                {
                    $(e).datetimepicker(options);
                });
            
            $(element).find("div").each(function(i,e)
            {
                $(e).on("changeDate",function()
                {
                    $(e).find("input").each(function(q,w)
                    {
                        ngModel.$setViewValue($(w).val());
                        ngModel.$render();
                    });

                    // Commenting hide function, to fix the bug - 
                    // when someone was changing time/date the calendar used to hide. It will not hide now.
                    //
                    //$(e).data("datetimepicker").hide();
                });

            });
        }
    }
 });


gatsbyModule.directive('gatsbyTab',function()
 {
    return {
        restrict : 'E',
        scope : {tabs:'='},
        template:'<ul class="nav nav-pills">\
                   <li ng-if="!tab.hasMenu()" ng-class="{active:tab.isSelected()}" ng-repeat="tab in tabs">\
                      <a class="a-small" href="#" ng-click="tab.click()">{{tab.name}}</a>\
                   </li>\
                    <li ng-if="tab.hasMenu()" ng-class="{active:tab.isSelected()}" class="dropdown" ng-repeat="tab in tabs">\
                      <a href="#" class="a-small dropdown-toggle" ng-class="{active:tab.isSelected()}">{{tab.name}} \
                      <span class="caret"></span>\
                      </a>\
                      <ul class="dropdown-menu" role="menu">\
                         <li ng-repeat="menu in tab.menus">\
                            <a href="#" class="a-small" ng-click="menu.click()">{{menu.name}}</a>\
                         </li>\
                      </ul>\
                   </li>\
                </ul>'

                                           
    }
 });


gatsbyModule.directive('gatsbyDatatables',function()
 {
    return {
        restrict : 'E',
        scope : {tabs:'='},
        template:'<ul class="nav nav-pills">\
                   <li ng-if="!tab.hasMenu()" ng-class="{active:tab.isSelected()}" ng-repeat="tab in tabs">\
                      <a class="a-small" href="#" ng-click="tab.click()">{{tab.name}}</a>\
                   </li>\
                    <li ng-if="tab.hasMenu()" ng-class="{active:tab.isSelected()}" class="dropdown" ng-repeat="tab in tabs">\
                      <a href="#" class="a-small dropdown-toggle" ng-class="{active:tab.isSelected()}">{{tab.name}} \
                      <span class="caret"></span>\
                      </a>\
                      <ul class="dropdown-menu" role="menu">\
                         <li ng-repeat="menu in tab.menus">\
                            <a href="#" class="a-small" ng-click="menu.click()">{{menu.name}}</a>\
                         </li>\
                      </ul>\
                   </li>\
                </ul>'

                                           
    }
 });

gatsbyModule.directive('gatsbyInput',function()
 {
    return {
        restrict : 'A',
        scope : true,
        transclude: true,
        template:'<div class="input-group" >\
                                <span class="input-group-addon">\
                                    <i class="fa"></i>\
                                </span><span ng-transclude></span></div>',

        link: function(scope,elm,attrs)
        {
            if(attrs.gatsbyInput == "search")
            {
                $(elm).find("i").addClass("fa-search");
            }
        }
    }
 });

gatsbyModule.directive('gatsbyIcon',function()
 {
    return {
        restrict : 'A',
        scope : false,
        link: function(scope,elm,attrs)
        {
            if(attrs.gatsbyBtn != "")
            {
                $(elm).prepend("<span class='glyphicon glyphicon-"+attrs.gatsbyIcon+"'></span> ");
                
            }
        }
    }
 });

gatsbyModule.directive('gatsbyBtn',function()
 {
    return {
        restrict : 'A',
        scope : false,
        link: function(scope,elm,attrs)
        {
            if(attrs.gatsbyBtn != "")
            {
                $(elm).prepend("<span class='glyphicon glyphicon-"+attrs.gatsbyBtn+"'></span> ");
                $(elm).addClass("btn btn-sm ");
            }

            if(!angular.isUndefined(attrs.category))
            {
                $(elm).addClass("btn-"+attrs.category);
            }
            else
            {
                $(elm).addClass("btn-primary");
            }
        }
    }
 });


gatsbyModule.directive('gatsbyEditor',function()
 {
    return {
        require : 'ngModel',
        restrict : 'A',
        scope : {editorval:'=ngModel'},
        template:'<div class="modal-header">\
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>\
                           <h4 class="modal-title">Gatsby Editor</h4>\
                        </div>\
                        <div class="modal-body">\
                           <div summernote ng-model="editorval" style="height:400px"></div>\
                        </div>\
                        <div class="modal-footer">\
                           <button type="button" data-dismiss="modal" class="btn btn-primary">Close</button>\
                        </div>',
        link: function(scope,elm,attrs)
        {
            $(elm).addClass('modal fade');
            $(elm).attr('tabindex','-1');
            $(elm).attr('data-width','1000');
            $(elm).css('display','none');
        }
    }
 });

gatsbyModule.directive('gatsbyRank',function($userUtils,$rootScope)
 {
    return {
        restrict : 'A',
        scope : {gatsbyRank:'=',allowFunc:'&',disAllowFunc:'&'},

        link : function(scope,elm,attrs)
        {

            $rootScope.$watch("loginuser",function()
            {
                rank = $userUtils.getUserRank();

                if(rank < scope.gatsbyRank)
                {
                    $(elm).css('display','none');
                    scope.disAllowFunc();
                }
                else
                {
                    $(elm).css('display','');
                    scope.allowFunc();
                }

            });                
        }
    }
 });

gatsbyModule.directive('gatsbyBreadCrumb',function($userUtils,$rootScope)
 {
    return {
        restrict : 'A',
        scope : {gatsbyBreachCrumb:'@',level:'@',eventname:'@',name:'@'},

        link : function(scope,elm,attrs)
        {
            $(elm).on('click',function(event)
            {
                $rootScope.$broadcast("breadCrumbClick",{level:scope.level,href:scope.eventname,name:scope.name});
                $rootScope.$broadcast(scope.eventname,{});
                console.log(scope.eventname);
            });
        }
    }
 });


gatsbyModule.directive('gatsbyBucketRank',function($userUtils,$rootScope)
 {
    return {
        restrict : 'A',
        scope : {gatsbyBucketRank:'=',allowFunc:'&',disAllowFunc:'&'},

        link : function(scope,elm,attrs)
        {

            $rootScope.$watch("selectedBucket",function()
            {


                if(attrs.category == $rootScope.stream)
                {
                    rank = $rootScope.selectedBucket.rank;

    
                    if(rank < scope.gatsbyBucketRank)
                    {
                        $(elm).css('display','none');

                        scope.disAllowFunc();
                    }
                    else
                    {
                        $(elm).css('display','');
                        scope.allowFunc();
                    }
                }

            });                
        }
    }
 });

gatsbyModule.directive('gatsbyPanel',function()
 {
    return {
        restrict : 'E',
        scope : {title:'=',close:'&'},
        transclude : true,
        template : '<div class="{{css_class}}">\
                       <div class="box-header">\
                       <div class="box-name">\
                           {{title}}<button ng-if="closable()" ng-click="close()" type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>\
                       </div>\
                       </div>\
                       <div class="box-content">\
                       <div ng-transclude></div>\
                       </div>\
                    </div>',
        link : function(scope,elm,attrs)
        {
            if(angular.isUndefined(attrs.category))
            {
                scope.css_class = "box ui-draggable";
            }
            else
            {
                scope.css_class = "box ui-draggable box-"+attrs.category;
            }
            
            scope.closable = function()
            {
                if(angular.isUndefined(attrs.close))
                {
                    return false;
                }
                return true;
            }
        }
    }
 });

gatsbyModule.service('$gatsbyUtils',function($rootScope,$sce,$http)
{
    this.alert = function(str) {
            $rootScope.info = str;
            $rootScope.alert = "";

            $("#modal_info").modal();
        };
    this.ajaxCall = function(options)
    {
        var notifcationObj;
        if(!angular.isUndefined(options.preMessage))
        {
            notifcationObj = $(".notifications").notify({message:options.preMessage,fadeOut:{enabled:false}});
            notifcationObj.show();
        }

        this._ajaxCall(options.url,options.data,function(data)
        {
        if(!angular.isUndefined(options.postMessage))
            {
                if(angular.isUndefined(notifcationObj))
                {
                    notifcationObj = $(".notifications").notify({message:options.postMessage}).show();
                }
                else
                {
                    notifcationObj.$note.html(options.postMessage);
                    notifcationObj.options.fadeOut.enabled=true;
                    notifcationObj.show();                    
                }
            }
            options.successFunction(data);
        },
        function(data)
        {
            notifcationObj.hide();
            if (options.errorFunction != undefined)
            options.errorFunction(data);
        },false);
    };

    this._ajaxCall = function(url, data, successFunction, errorFunction, silent) {
        

        if(angular.isUndefined($rootScope.ajaxCount))
        {
            $rootScope.ajaxCount = 0;
        }

        $rootScope.ajaxCount++;
        $rootScope.progressbar_width = Math.floor(100/($rootScope.ajaxCount*2));

        if (silent == undefined) {
            silent = false;
        }

        if (!silent) {
            ajax_msg="Please wait";

        }

        $http.post(url, data).success(function(data, status, headers, config) {

            $rootScope.ajaxCount--;
            if($rootScope.ajaxCount == 0)
            {
                $rootScope.progressbar_width = 100;
            }
            else
            {
                $rootScope.progressbar_width = Math.floor(100/($rootScope.ajaxCount*2));
            }
            
            if ('code' in data && data.code == "0") {
                if (!silent) {
                    ajax_msg=data.message;
                }

                if ('redirect' in data && data.redirect != "") {
                    window.location = data.redirect;
                }
                successFunction(data);
            } else if ('error' in data && data.error != "") {
                
                if (!silent) {
                    
                    $rootScope.error = data.error;
                    $("#modal_error").modal();                    
                }
                if (errorFunction != undefined) {
                    errorFunction(data);
                }
            }
        }).
        error(function(data, status, headers, config) {
            $rootScope.ajaxCount--;
            if($rootScope.ajaxCount == 0)
            {
                $rootScope.progressbar_width = 100;
            }
            else
            {
                $rootScope.progressbar_width = 100/($rootScope.ajaxCount*2);
            }

            $rootScope.error = "Internal Server Error/ Network Error";
            $("#modal_error").modal();
            
        });
    };

    this.paginate = function(config) {
        this.ajaxCall(
            config.url, {
                cursor: config.pagenum * config.pagecount,
                pagecount: config.pagecount,
                data: config.formdata
            },
            function(data) {
                scopevar = config.scope;
                scopevar.maxpagecount = Math.ceil(data.data.totalcount / config.pagecount);
                scopevar.totalcount = data.data.totalcount;
                scopevar.rows = data.data.rows;
                scopevar.currentpage = config.pagenum+1;

                scopevar.pageindexes = [];

                if (scopevar.maxpagecount * config.pagecount > config.pagecount) {
                    temp = Math.floor(config.pagenum / 10) * 10 + 1;
                    //temp = config.pagenum+1;
                    if (temp <= 0) {
                        temp = 1;
                    }

                    if (temp > 10) {
                        scopevar.pageindexes.push({
                            label: "<<",
                            value: temp - 10
                        });
                    } else {
                        scopevar.pageindexes.push({
                            label: "<<",
                            value: temp
                        });
                    }

                    for (i = temp; i < temp + 10 && i <= scopevar.maxpagecount; i++) {
                        scopevar.pageindexes.push({
                            label: i,
                            value: i
                        });
                    }
                    if (((i - 1) * config.pagecount) < scopevar.totalcount) {
                        scopevar.pageindexes.push({
                            label: ">>",
                            value: i
                        });
                    }
                }
                config.successfunc(scopevar.rows, data);

            },
            function(data) {},
            true
        );

    };

    this.isBreached = function(date1str) {
        breach_time = moment(date1str).valueOf();
        now = moment().tz("Etc/GMT+0");
        if (now.isAfter(moment(date1str))) {
            //console.log(true);
            return true;
        } else {
            //console.log(false);
            return false;
        }
    };
    
    this.isGoingToBreach = function(date1str) {

        //breach_time = Date.parse(date1str);
        //now = Date.now().setTimezone('GMT');
        breach_time = moment(date1str).tz("Etc/GMT+0");
        now = moment().tz("Etc/GMT+0");
        tomorrow = moment().tz("Etc/GMT+0").add(1, 'days');

        range = moment.range(now, tomorrow);
        // console.log("isGoingToBreach");
        // console.log(tomorrow);
        // console.log(breach_time);
        // console.log(now);
        // console.log("isGoingToBreach---Ends");
        if (range.contains(breach_time)){
            //console.log(true);
            return true;
        } else {
            //console.log(false);
            return false;
        }
    };

    this.error = function(str) {
        $rootScope.error = str;

        $("#modal_error").modal();
    };


    this.formathtml = function(str) {
        return utils.formatHtml(str);
    };
    this.getCurrentDate = function() {
        var curDate = new Date();
        var month = curDate.getMonth() + 1;
        var monthstr = month;
        if (month < 10) {
            monthstr = "0" + month;
        }
        var date = curDate.getDate();
        var datestr = date;
        if (date < 10) {
            datestr = "0" + date;
        }

        var currentDate = curDate.getFullYear() + "-" + monthstr + "-" + datestr;

        return currentDate;
    };

    this.increaseDate = function(datestr) {
        var curDate = Date.parse(datestr);
        curDate.add(1).day();
        var month = curDate.getMonth() + 1;
        var monthstr = month;
        if (month < 10) {
            monthstr = "0" + month;
        }
        var date = curDate.getDate();
        var datestr = date;
        if (date < 10) {
            datestr = "0" + date;
        }

        var currentDate = curDate.getFullYear() + "-" + monthstr + "-" + datestr;

        return currentDate;
    };

    this.decreaseDate = function(datestr) {
        var curDate = Date.parse(datestr);
        curDate.add(-1).day();
        var month = curDate.getMonth() + 1;
        var monthstr = month;
        if (month < 10) {
            monthstr = "0" + month;
        }
        var date = curDate.getDate();
        var datestr = date;
        if (date < 10) {
            datestr = "0" + date;
        }

        var currentDate = curDate.getFullYear() + "-" + monthstr + "-" + datestr;

        return currentDate;
    };


    this.renderHtml = function(html_code) {
        return $sce.trustAsHtml(html_code);
    };



});

gatsbyModule.service('$userUtils',function($rootScope)
{
    this.isManager = function(data) {

        if (data != undefined) {
            var usergroups = data.loginuser.UserGroups;
            for (var i = usergroups.length - 1; i >= 0; i--) {
                if (usergroups[i].Group.name == "manager") {

                    return true;
                }
            };
        }
        return false;
    };

    this.getRrtBucketRank=function()
    {
        if(!angular.isUndefined($rootScope.selectedRrtBucket))
        {
            return $rootScope.selectedRrtBucket.rank;
        }
        else
        {
            return 0;
        }
        
    }

    this.getUserRank = function(data)
    {
        if(!angular.isUndefined($rootScope.loginuser))
        {
            return $rootScope.loginuser.UserGroup.Group.rank;
        }
        else
        {
            return 0;
        }        
    }

    this.getUserId = function()
    {
        if(!angular.isUndefined($rootScope.loginuser))
        {
            
            return $rootScope.loginuser.User.id;
        }
        else
        {
            return 0;
        }        
    }

    this.getIncidentBuckets = function() {

        if ($rootScope.loginuser != undefined) {
            return $rootScope.loginuser.IncidentBuckets;
        } else {
            return "";
        }

    }

    this.getName = function(data) {

        if (data.loginuser != undefined) {
            return data.loginuser.User.first_name + " " +data.loginuser.User.last_name;
        } else {
            return "";
        }

    };
});


gatsbyModule.directive('checklistModel', ['$parse', '$compile', function($parse, $compile) {
  // contains
  function contains(arr, item) {
    if (angular.isArray(arr)) {
      for (var i = 0; i < arr.length; i++) {
        if (angular.equals(arr[i], item)) {
          return true;
        }
      }
    }
    return false;
  }

  // add
  function add(arr, item) {
    arr = angular.isArray(arr) ? arr : [];
    for (var i = 0; i < arr.length; i++) {
      if (angular.equals(arr[i], item)) {
        return arr;
      }
    }    
    arr.push(item);
    return arr;
  }  

  // remove
  function remove(arr, item) {
    if (angular.isArray(arr)) {
      for (var i = 0; i < arr.length; i++) {
        if (angular.equals(arr[i], item)) {
          arr.splice(i, 1);
          break;
        }
      }
    }
    return arr;
  }

  // http://stackoverflow.com/a/19228302/1458162
  function postLinkFn(scope, elem, attrs) {
    // compile with `ng-model` pointing to `checked`
    $compile(elem)(scope);

    // getter / setter for original model
    var getter = $parse(attrs.checklistModel);
    var setter = getter.assign;

    // value added to list
    var value = $parse(attrs.checklistValue)(scope.$parent);

    // watch UI checked change
    scope.$watch('checked', function(newValue, oldValue) {
      if (newValue === oldValue) { 
        return;
      } 
      var current = getter(scope.$parent);
      if (newValue === true) {
        setter(scope.$parent, add(current, value));
      } else {
        setter(scope.$parent, remove(current, value));
      }
    });

    // watch original model change
    scope.$parent.$watch(attrs.checklistModel, function(newArr, oldArr) {
      scope.checked = contains(newArr, value);
    }, true);
  }

  return {
    restrict: 'A',
    priority: 1000,
    terminal: true,
    scope: true,
    compile: function(tElement, tAttrs) {
      if (tElement[0].tagName !== 'INPUT' || !tElement.attr('type', 'checkbox')) {
        throw 'checklist-model should be applied to `input[type="checkbox"]`.';
      }

      if (!tAttrs.checklistValue) {
        throw 'You should provide `checklist-value`.';
      }

      // exclude recursion
      tElement.removeAttr('checklist-model');
      
      // local scope var storing individual checkbox model
      tElement.attr('ng-model', 'checked');

      return postLinkFn;
    }
  };
}]);

gatsbyModule.directive('onReadFile', function ($parse) {
    return {
        restrict: 'A',
        scope: false,
        link: function(scope, element, attrs) {
            var fn = $parse(attrs.onReadFile);
            
            element.on('change', function(onChangeEvent) {
                var reader = new FileReader();
                
                reader.onload = function(onLoadEvent) {
                    scope.$apply(function() {
                        fn(scope, {$fileContent:onLoadEvent.target.result});
                    });
                };

                reader.readAsText((onChangeEvent.srcElement || onChangeEvent.target).files[0]);
            });
        }
    };
});