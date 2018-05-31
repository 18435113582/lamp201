function getComment(t, p) {
    $(t).ajaxPlus({
        list: '/thread/comment/list.json',
        config: {
            template: '#ans_template'
        },
        param: p,
        success: function(r) {
            if(r.total > 0){
                $(this).removeClass('Dn');
            }else{
                $(this).addClass('Dn');
            }
        }
    });
}

function getExper(t, p) {
    $(t).ajaxPlus({
        list: '/thread/rate/list.json',
        config: {
            template: '#exp_template'
        },
        param: p,
        success: function(r) {
            if (r.total > 0) {
                $(this).closest('.Exper').removeClass('Dn').find('dt span').text('已有' + r.total + '人发糖，糖 +' + r.totalScore);
                $('#candy').popShow()
            }
        }
    });
}
$(function() {
    //评论回复
    var commentUl, answerBtn, answerDialog = $('#answer'),
        answerEditor = answerDialog.find('form.Comment textarea'),
        answerClick = function(t) {
            answerBtn = t;
            commentUl = answerBtn.closest('.commit-item');
            answerEditor.val('').blur();
            answerDialog.popShow();
        };
    answerDialog.find('form').submit(function() {
        $(this).ajaxPlus({
            post: '/thread/comment/create.json',
            param: function(p) {
                if (p.content.trim() == '') {
                    alert('内容不能为空');
                    return false;
                }
                if (p.content.len() > 200) {
                    alert('内容不能超过100个汉字');
                    return false;
                }
                p.tid = answerBtn.attr('tid');
                p.pid = answerBtn.attr('pid');
                p.fuid = answerBtn.attr('fuid');
                p.fusername = answerBtn.attr('fusername');
                p.rid = answerBtn.attr('rid');
            },
            success: function() {
                alert('回复成功');
                answerDialog.popHide();
                answerBtn.attr('[rid!=0]') && (answerBtn = commentUl.find('.option [name=answer]'));
                var num = ~~(answerBtn.find('em').text()) + 1;
                answerBtn.find("em").text(num);
                // answerBtn.html(function(index, oldcontent) {
                //     return oldcontent.replace(/^(\D+)(\d+)(\D*)$/, function() {
                //         return arguments[1] + (Number(arguments[2]) + 1) + arguments[3]
                //     })
                // });
                getComment(commentUl.find('.reply-list'), {
                    page: 1
                });
            }
        });
        return false;
    });
    $('.commit-panel').on('click', '[name=answer]', function() {
        if (!_isLogin.jump('回复')) {
            return false;
        }
        answerClick($(this));
        return false;
    });
    $('.commit-panel').on('click', '.reply-item', function(e) {
        if (!_isLogin.jump('回复')) {
            return false;
        }
        $(e.target).is('p') && answerClick($(this).find('[name=answer]'));
    });
    $('[name=moreAnswer]').click(function() {
        getComment($(this).closest('.reply-list '), {
            page: 2
        });
        return false;
    });
    //发糖
    var candyBtn, candyDialog = $('#candy');
    candyDialog.find('form').submit(function() {
        $(this).ajaxPlus({
            post: '/thread/rate/create.json',
            param: function(p) {
                if (!/^[1-9]\d*$/.test(p.score)) {
                    alert('发糖数必须是大于0的整数');
                    return false;
                }
                if (p.reason.len() > 20) {
                    alert('发糖理由不能超过10个汉字');
                    return false;
                }
                p.pid = candyBtn.attr('pid') || '';
                p.type = candyBtn.closest('.Trends').length > 0 ? 1 : 0;
            },
            success: function(ret, req) {
                candyDialog.popHide();
                alert('发糖成功');
                var num = ~~(candyBtn.find('em').text()) + ~~(req.param.score);
                candyBtn.find("em").text(num);
                // Reply.btn
                // candyBtn.html(function(index, oldcontent) {
                //     return oldcontent.replace(/^(\D+)(\d+)(\D*)$/, function() {
                //         return arguments[1] + (Number(arguments[2]) + 1) + arguments[3]
                //     })
                // });
                // candyBtn
                // getExper(candyBtn.parent().prev('.Exper').find('table'), {
                //     page: 1
                // });
            }
        })
        return false;
    });
    $('.thread-detail, .commit-panel').on('click', '[name=sugar]', function() {
        if (!_isLogin.jump('发糖')) {
            return false;
        }
        var _pid = $(this).attr("pid");
        candyDialog.find(".Exper table").attr("aj-param", '{"pid":' + _pid + ',"limit":10}');
        getExper(candyDialog.find(".Exper table"), {
            page: 1,
            pid: _pid
        });
        candyBtn = $(this).ajaxPlus({
            get: '/thread/rate/constraint.json',
            success: function(d) {
                candyDialog.popShow().find('[name=reason], [name=score]').val('');
                var t = candyDialog.find('table td');
                t.eq(1).text(d.data.max_send_pertime);
                t.eq(2).text(d.data.send_remain);
            }
        });
    });
    $('[name=moreExper]').click(function() {
        getExper($(this).closest('table[aj-param]'), {
            page: 2
        });
    });
    $('.Exper dt a').click(function() {
        var t = $(this);
        t.toggleClass("open").parent().next().toggleClass('Dn').imgLoad();
        candyDialog.popShow();
    });
    //推荐
    var recomBtn, recomDialog = $('#recom'),
        comment_hot = $('#comment_hot'),
        comment_hot_dd = comment_hot.children('dd'),
        setRecom = function(t, a, c) {
            t.ajaxPlus({
                post: '/thread/post/hot.json',
                param: function(p) {
                    p.tid = recomBtn.attr('tid');
                    p.pid = recomBtn.attr('pid');
                    p.act = a;
                },
                success: function() {
                    alert(a == 'add' ? '推荐成功' : '取消推荐成功');
                    c && c();
                }
            });
        };
    $('.commit-panel').on('click', '[name=recom]', function() {
        recomBtn = $(this);
        recomBtn.text() == '推荐' ? recomDialog.popShow().find('[name=reason]').val('') : setRecom(recomBtn, 'remove', function() {
            if (recomBtn.closest('#comment_hot').length > 0) {
                recomBtn.closest('.commit-item').remove();
                $('#comment_top .Recom[pid=' + recomBtn.attr('pid') + ']').html('<i></i>推荐');
                comment_hot_dd.children('ul').length == 0 && comment_hot.addClass('Dn');
            } else {
                comment_hot.find('ul[data-id=' + recomBtn.attr('pid') + ']').remove()
                recomBtn.html('<i></i>推荐');
            }
        });
    });
    recomDialog.find('form').submit(function() {
        setRecom($(this), 'add', function() {
            recomDialog.popHide();
            recomBtn.html('<i></i>取消推荐');
            recomBtn.closest('.commit-item').clone().appendTo(comment_hot_dd);
            comment_hot.removeClass('Dn');
            var p = comment_hot_dd.find('ul:last');
            _window.scrollTop(p.offset().top);
        });
        return false;
    });
    //屏蔽帖子
    $('.thread-detail [name=shield]').click(function() {
        $('#shield').popShow();
    });
    //楼层直达
    var form = $('#comment_top dt form').submit(function() {
        form.ajaxPlus({
            get: '/thread/post/plink.json',
            param: function(p) {
                if (!/^[1-9]\d*$/.test(p.floor)) {
                    alert('必须是大于0的整数');
                    return false;
                }
                if (p.floor > parseInt(form.find('input').attr('max'))) {
                    alert('没有找到这个楼层');
                    return false;
                }
            },
            success: function(r) {
                location.href = r.url;
            }
        });
        return false;
    });
    form.find('a').click(function() {
        form.submit();
    });
    //屏蔽app链接
    $('article a[href*="/app/"]').click(function() {
        return false;
    });
    //视频播放
    var $player = $('.prism-player');
    $player.length && _getScript('https://g.alicdn.com/de/prismplayer/1.9.4/prism-min.js', 'https://g.alicdn.com/de/prismplayer/1.9.4/skins/default/index-min.css', function() {
        $player.each(function() {
            var t = $(this),
                player = new prismplayer({
                    id: this.id,
                    source: t.attr('source'),
                    cover: t.attr('cover'),
                    autoplay: false,
                    width: "100%",
                    height: t.parent().width() * 3 / 4 + 'px'
                });
            player.on("play", function() {
                _hmt.push(['_trackEvent', '视频', '点击', '播放']);
            });
        })
    });
});