$(function() {
    var $topic_detail = $('#topic_detail'),
        topicid = $topic_detail.attr('topicid'),
        topicname;
    $topic_detail.ajaxPlus({
        get: "/topic/index/detail.json",
        response: function(r) {
            r.topicInfo.read = r.topicInfo.read || 0;
            r.topicInfo.thread = r.topicInfo.thread || 0;
            r.topicInfo.follower = r.topicInfo.follower || 0;
            topicname = r.topicInfo.name
            $(".topic-fixed .topic-name").text(topicname);
            $(".topic-fixed .cover").attr("src",r.topicInfo.big_img);
        },
        param: function(p) {
            p.id = topicid;
        }
    });
    $('#topic_list ul').bindTab({
        result: {
            type: [{
                name: '热门讨论',
                param: '{"type": 3,"id": ' + topicid + '}'
            }, {
                name: '最新发布',
                param: '{"type": 2,"id": ' + topicid + '}'
            }]
        }
    }, {
        scroll: '/topic/index/thread.json',
        response: function(r) {
            r.data = $.merge(r.topthreads || [], r.threads);
			r.topicid = topicid;
        }
    });
    $('body').on("click",".add-btn",function() {
        location.href = $(this).attr('href') + '?topicid=' + topicid + '&topicname=' + topicname;
        return false;
    });
});