<?php

namespace app\languages;

class MandarinLang extends Lang {

    public function langAccueil()
    {
        $this->lang['home'] = '概况';
        $this->lang['restoAsiat'] = '拉罗谢尔 亚洲 餐厅';
        $this->lang['hero'] = '在 舒适 和 豪华 的 氛围，来 发现 或 重新  中国，日本 和 泰国 美食 的 味道。';
        $this->lang['ourMenu'] = '我们 的 菜单';
        $this->lang['specialties'] = '特色菜';
        $this->lang['discoverSpecialties'] = '发现 我们 的 特色菜';
        $this->lang['specialtiesSpeech'] = "对 我们 而 言，为 您 提供 新鲜 产品 至 关 重要，因为 质 量 胜于 数量。 
        我们 会 妥善 保管 那些 与 食物 卫生 有关 的 人员，在 那些 麻烦 时期 尤其 如 此。";

    }

    public function langEvents()
    {
        $this->lang['events'] = '活动';
        $this->lang['organizeEvents'] = '在 我们 的 餐厅 组织 您 的 活动';
        $this->lang['e1_nom'] = '生日 派对';
        $this->lang['e1_italic'] = '我们 会 做 到 的，以便 您 长 时间 记得 生日';
        $this->lang['e1_1'] = '选择 自己 的 生日 蛋糕';
        $this->lang['e1_2'] = '娱乐 儿 童 的 小品';
        $this->lang['e1_3'] = '具体 的 饮食 会 考虑';
        $this->lang['e1_p'] = '我们 的 工作人 员会 照顾 你 非常 谨慎，并会 确保 你 不 吨缺 什么';
        $this->lang['e2_nom'] = '私人派对';
        $this->lang['e2_italic'] = '我们 精妙 的 员工 将 为 您 提供 精致 的 内饰 和 温暖 的 微笑，并向 您 致意。';
        $this->lang['e2_1'] = '愉快 和 亲切 的 地方';
        $this->lang['e2_2'] = '服务员 密切 注意';
        $this->lang['e2_3'] = '大家 都会 喜欢 的 食物';
        $this->lang['e2_p'] = '我们 的 餐厅 专门 为 您 服务，是 举办 此 类 活动 的 理想 场所。';
        $this->lang['e3_nom'] = '公司聚会';
        $this->lang['e3_italic'] = '我们 的 餐厅 向您 保证 与 您 的 同事 和 经理们 愉快 而 独特 的 体验';
        $this->lang['e3_1'] = '你 饮酒 的 监督，使 你 可以 有 乐趣，而 不 必去 想它';
        $this->lang['e3_2'] = '原始 活动';
        $this->lang['e3_3'] = '光气氛';
        $this->lang['e3_p'] = '压力 将 减少，您 的 同事 将 感谢 您 选择 我们。';
    }

    public function langAbout()
    {
        $this->lang['about'] = '关于 我们 的 餐厅';
        $this->lang['promise'] = '我们 能 提供 什么';
        $this->lang['idealPlace'] = "如果 您 喜欢 亚洲 美食，拉罗谢尔 的 La pousse de bambou 就是 您 的 理想 选择。";
        $this->lang['quality1'] = '完美 的 产品 质 量';
        $this->lang['quality2'] = '对于 原来 的 食谱 最大 的 尊重';
        $this->lang['quality3'] = '最 佳 经验';
        $this->lang['aboutSpeech'] = "我们 的 餐厅 提供 美味 的 菜单，包括 中国，泰国，越南 和 日本 特色 菜，您 可以 与 家人 或 
        朋友 一起 在 温暖 的 氛围 中 享用！ 要 在 La Pousse de Bambou 预订 餐 位，请 现在 联系 我们";
        $this->lang['chefs'] = '厨师';
        $this->lang['proChefs'] = '认识 我们 的 专业 厨师';
        $this->lang['chef1_name'] = 'Walter White';
        $this->lang['chef1_job'] = '厨师 长';
        $this->lang['chef2_name'] = 'Sarah Jhonson';
        $this->lang['chef2_job'] = '面包师';
        $this->lang['chef3_name'] = 'William Anderson';
        $this->lang['chef3_job'] = '厨师';
        $this->lang['whyUs'] = '为什么';
        $this->lang['whyChoosingUs'] = '为什么 选择 我们 的 餐厅';
        $this->lang['why1_name'] = '质量';
        $this->lang['why1_text'] = "我们 的 产品 是 新鲜 的，并 在 致力 于 环境 保护 的当 地 生产 商 中 进行 选择";
        $this->lang['why2_name'] = '传统';
        $this->lang['why2_text'] = '我们 进行了 广泛 的 研究，并 与 亚洲 的 烹饪 专家 联系，为 您 带 来 最 美味 的 菜肴';
        $this->lang['why3_name'] = "经验";
        $this->lang['why3_text'] = "我们 只 聘用 杰出 教育 计划 的 厨师，并且 至少 有 5年 以上 该 领域 的 从业 经验";
    }

    public function langGallery()
    {
        $this->lang['gallery'] = '图片';
        $this->lang['pictures'] = '我们 餐厅 的 一些 图片';
    }

    public function langMenu()
    {
        $this->lang['menu'] = '涮菜';
        $this->lang['discoverMenu'] = '了解 我们 的 美味 菜单';
        $this->lang['all'] = '所有 菜';

    }

    public function langFooter()
    {
        $this->lang['phone'] = '电话:';
        $this->lang['mail'] = '电子邮箱:';
        $this->lang['social'] = ['twitter', 'facebook', 'instagram', 'pinterest'];
        $this->lang['socials'] = '关注我们';
        $this->lang['admin'] = '管理 员';
        $this->lang['rights'] = '保留 所有 权利 沪';
    }

    public function langContact()
    {
        $this->lang['contact'] = '联系';
        $this->lang['contactUs'] = '联系我们';
        $this->lang['address'] = '地点:';
        $this->lang['openingsTitle'] = ' 营业时间';
        $this->lang['openingDays'] = '周二至周日';
        $this->lang['openingTime1'] = '11:45 - 14:30';
        $this->lang['openingTime2'] = '19:30 - 22:00';
        $this->lang['openings'] = $this->lang['openingDays'] . ' '. $this->lang['openingTime1'] . ' 和 '.
            $this->lang['openingTime2'];
        $this->lang['closed'] = '周一关闭';
        $this->lang['name'] = '名字: ';
        $this->lang['subject'] = '主题: ';
        $this->lang['message'] = '留言:';
        $this->lang['sendMessage'] = '提交';
    }

    public function langBook() {
        $this->lang['book'] = '订座';
        $this->lang['bookHere'] = '在 我们 的 餐厅 预订 一 张 桌子';
        $this->lang['date'] = '日期:';
        $this->lang['time'] = '时间:';
        $this->lang['peopleNb'] = '人数:';

        $this->lang['testimonials'] = '感言';
        $this->lang['customersThink'] = '客户 对 我们 的 评价';

        $this->lang['avis1_job'] = '首席 执行 官 兼 董事 长';
        $this->lang['avis1_avis'] = '美味 的 ！ 这 家 餐厅 气派 雄伟，而且 很 有 道理，很 神圣。 这 是 一次 真正 的 亚洲 国家 之 行，
        您 可以 在 此 品尝 典型 的 菜肴。 我 建议 ！';

        $this->lang['avis2_job'] = '设计 师';
        $this->lang['avis2_avis'] = '优秀！！！ 该 产品 是 新鲜 和 良好 补充。 选择 是 宽 的，服务 是 非常 有效 的。 工作 人员 很 
        专业。 很 值得 的 钱。';

        $this->lang['avis3_job'] = '老板';
        $this->lang['avis3_avis'] = '餐厅 非常 干净，洗手间 也 很 干净。 甜点 中 有 新鲜 水果，切 成 丁 或 整 块，这 非常 罕见。 
        这 是 该 地区 最 好 的 餐馆 之 一。';

        $this->lang['avis4_job'] = '自由 职业 者';
        $this->lang['avis4_avis'] = '我们 去了 这 家 亚洲 餐厅，并 没有 感到 失望。 我们 感到 欢迎，菜单 种类 繁多。
工作 人员 友好 而 敬业，值得 一 游，并且 无疑 是 该 领域 的 宝贵 资产。';

        $this->lang['avis5_job'] = '企业 家';
        $this->lang['avis5_avis'] = '一家 很 棒 的 亚洲 餐厅。 优质 的 服务 和 高 品质 的 美食。 这 项 服务 无 可 挑剔，工作 人员 
        将 您 的 空 盘子 移 开，以免 桌子 混乱。 价格 合理。';

    }


}

