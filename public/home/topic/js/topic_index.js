$(function() {
    var $topic_index = $('#topic_index'),
        type = $topic_index.attr('type'),
        $topic_list = $topic_index.find('.topic-list');
    $topic_index.find('.tag-bar').bindTab({
        get: '/topic/index/category.json',
        config: {
            tabIndex: '[type=' + type + ']'
        },
        response: function(r) {
            $.each(r.data, function() {
                this.url = '/topic/index/list.json';
                this.param = '{"category_id":' + this.id + '}';
                this.config = '{"loadingShow": 1}';
            });
            r.data.unshift({
                id: 0,
                name: '推荐话题',
                img_url: "https://imgfs.oppo.cn/uploads/thread/attachment/2017/11/16/15107990004798.jpg",
                url: '/topic/index/related.json',
                param: '{"type":1}',
                config: '{"loadingShow":1}'
            });
            _isLogin.state() && r.data.push({
                name: '关注话题',
                url: '/topic/follow/index.json',
                img_url: "https://imgfs.oppo.cn/uploads/thread/attachment/2017/11/16/15107989979081.jpg",
                config: '{"loadingShow":1,"emptyShow":"还没有关注话题"}'
            });
        }
    }).on('click', '.tag-item', function() {
        $topic_list.children().hide().eq($(this).index()).show();
    });
});