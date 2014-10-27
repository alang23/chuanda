<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <title>来穿搭过-用户注册</title>
<?php Widget::web_header_public();?>
    <!---->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>static/style/register.css?v=0.0.1">
</head>
<body>

<?php Widget::web_header();?>

    <!--=====以上头部================================-->


    
    <div class="lg-sub-container top-padding">
        
		<div class="lg-breadcrumb">
			<dl>
				<dt>您当前位置：</dt>
				<dd><a href="index.html">首页</a> > </dd>
				<dd>账户注册</dd>
			</dl>
			<div class="clear"></div>
		</div>


        <div class="reg-box">
            <form class="form-register" id="form1" action="<?=base_url()?>index.php?c=reg" method="post">

                <div class="form-item">
                    <label for="username">账户</label>
                    <div class="form-field">
                        <input type="text" name="mobile" id="username" class="form-text" placeholder="请填写您的手机号码">
                        <span class="required-dot">*</span>
                        <span class="item-tip form-alert"></span>
                    </div>
                    <div class="clear"></div>
                </div>

                <div class="form-item">
                    <label for="password">登录密码</label>
                    <div class="form-field">
                        <input type="password" name="pawd" id="password" class="form-text" placeholder="密码为6-16位数字与字母组合">
                        <span class="required-dot">*</span>
                        <span class="item-tip form-alert"></span>
                    </div>
                    <div class="clear"></div>
                </div>

                <div class="form-item">
                    <div class="form-field password-strong" id="password-strong">
                        <span>密码强度：</span>
                        <ul class="strong0">
                            <li class="st1"></li>
                            <li class="st2"></li>
                            <li class="st3"></li>
                            <li class="st4"></li>
                            <li class="st5"></li>
                            <li class="st6"></li>
                        </ul>
                    </div>
                    <div class="clear"></div>
                </div>

                <div class="form-item">
                    <label for="c_password">确认密码</label>
                    <div class="form-field">
                        <input type="password" name="c_password" id="c_password" class="form-text" placeholder="请再次输入密码">
                        <span class="required-dot">*</span>
                        <span class="item-tip form-alert"></span>
                    </div>
                    <div class="clear"></div>
                </div>

                <div class="form-item">
                    <label for="captcha">验证码</label>
                    <div class="form-field">
                        <input type="text" name="captcha" id="captcha" class="form-text form-text-captcha" placeholder="请输入验证码">
                        <span class="captcha-tip"><a href="javascript:void(0);" class="lg-btn lg-btn-default" id="getCaptcha-btn">获取验证码</a></span>
                        <span class="required-dot">*</span>
                        <span class="item-tip form-alert"></span>
                    </div>
                    <div class="clear"></div>
                </div>

                <div class="form-item">
                    <label></label>
                    <div class="form-field">
                        <input type="submit" class="lg-btn lg-btn-default lg-btn-large" value='同意协议并注册' />
                    </div>
                    <div class="clear"></div>
                </div>

                <div class="form-item">
                    <label></label>
                    <div class="form-field register-agreement">
                        <a href="javascript:void(0);" class="link-green" id="view-reg-rules">《来过注册协议》</a> &nbsp;&nbsp;&nbsp;&nbsp; <a href="javascript:void(0);" class="link-green" id="view-reg-advise">《来过注册》改进建议</a>
                    </div>
                    <div class="clear"></div>
                </div>
            </form>
        </div>
    </div>

    <!--注册协议-->
    <div class="reg-rules" id="reg-rules">
        
        <h3 class="tc">“来过”用户注册服务协议</h3>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;本网站（www.laiguo.com）及旗下所有软件所提供的各项服务的所有权和运作权均归深圳市来过网络有限公司（以下简称“来过”）所有。请您仔细阅读本注册协议，您点击"同意以下协议并注册"按钮后，本协议即构成对双方有约束力的法律文件。来过有权对本协议条款进行修改，修改后的协议一旦公布即有效代替原来的协议。用户可随时查阅最新协议。

        <br /><br />
        <h4 class="tc">第1条 来过服务条款的确认和接纳</h4>


        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.1来过的各项产品运作权归来过所有。用户同意所有注册协议条款并完成注册程序，才能成为来过的正式用户。用户确认：本协议条款是处理双方权利义务的契约，始终有效，法律另有强制性规定或双方另有特别约定的，依其规定。
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.2用户点击同意本协议的，即视为用户确认自己具有享受来过服务、下单购物等相应的权利能力和行为能力，能够独立承担法律责任。
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.3如果您在18周岁以下，您只能在父母或监护人的监护参与下才能使用来过。
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.4来过保留在中华人民共和国法律允许的范围内独自决定包括但不限于拒绝服务、关闭用户账户、清除或编辑内容或取消订单的权利。
        <br /><br />

        <h4 class="tc">第2条 来过服务提供、修改及终止</h4>

        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.1来过通过互联网依法为用户提供互联网信息等服务，用户在完全同意本协议及来过规定的情况下，方可有权使用来过的相关服务。
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.2用户必须自行准备如下设备和承担如下开支：（1）上网设备，包括并不限于电脑或者其他上网终端、调制解调器及其他必备的上网装置；（2）上网开支，包括并不限于网络接入费、上网设备租用费、手机流量费等。
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.3来过保留随时修改或中断服务而不需通知用户的权利。来过有权行使修改或中断服务的权利，不需对用户或任何无直接关系的第三方负责。
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.4用户对本协议的修改有异议，或对来过的服务不满，可以行使如下权利：（1）停止使用来过的网络服务 （2）通过客服等渠道告知来过停止对其服务。 结束服务后，用户使用来过服务的权利立即终止。在此情况下，来过没有义务传送任何未处理的信息或未完成的服务给用户或任何无直接关系的第三方。

        <h4 class="tc">第3条 用户信息及权利</h4>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.1用户提供的注册资料，用户同意：（1）提供合法、真实、准确、详尽的个人资料； （2）如有变动，及时更新用户资料。如果用户提供的注册资料不合法、不真实、不准确、不详尽的，用户需承担因此引起的相应责任及后果，并且来过保留终止用户使用来过各项服务的权利。
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.2用户在使用来过服务、参加网站活动（包含手机端APP）或访问网站网页（包含手机端APP）时，来过自动接收并记录的用户浏览器端或手机客户端数据，包括但不限于IP地址、网站Cookie中的资料及用户要求取用的网页记录。
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.3用户在来过进行浏览、下单购物等活动时，涉及用户真实姓名/名称、通信地址、联系电话、电子邮箱等隐私信息的，来过将予以严格保密，除非得到用户的授权或法律另有规定，来过不会向外界披露用户隐私信息。
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.4用户一旦注册成功，成为来过的会员，将得到用户名（用户邮箱）和密码，并对以此组用户名和密码登入系统后所发生的所有活动和事件负责，自行承担一切使用该用户名的言语、行为等而直接或者间接导致的法律责任。
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.5用户有义务妥善保管来过账号、用户名和密码，用户将对用户名和密码安全负全部责任。因用户原因导致用户名或密码泄露而造成的任何法律后果由用户本人负责。
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.6用户注册成功后，将产生用户名和密码等账户信息，您可以按照网站规定改变您的密码。用户密码遗失的，可以通过注册电子邮箱发送的链接重置密码，以手机号码注册的用户可以凭借手机号码找回原密码。用户若发现任何非法使用用户名或存在其他安全漏洞的情况，应立即告知来过。
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.7用户有权参加来过组织提供的各项线上、线下活动。
        <br />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.8用户有权下载安装来过手机客户端并使用其功能。
        <br /><br />

        <h4 class="tc">第4条 用户依法言行义务</h4>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.1不得传输或发表：煽动抗拒、破坏宪法和法律、行政法规实施的言论，煽动颠覆国家政权，推翻社会主义制度的言论，煽动分裂国家、破坏国家统一的的言论，煽动民族仇恨、民族歧视、破坏民族团结的言论；
        <br />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.2从中国大陆向境外传输资料信息时必须符合中国有关法规；
        <br />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.3不得利用来过从事洗钱、窃取商业秘密、窃取个人信息等违法犯罪活动；
        <br />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.4不得干扰来过的正常运转，不得侵入来过及国家计算机信息系统；
        <br />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.5不得传输或发表任何违法犯罪的、骚扰性的、中伤他人的、辱骂性的、恐吓性的、伤害性的、庸俗的，淫秽的、不文明的等信息资料；
        <br />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.6不得传输或发表损害国家社会公共利益和涉及国家安全的信息资料或言论；
        <br />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.7不得教唆他人从事本条所禁止的行为；
        <br />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.8不得利用在来过注册的账户进行非法牟利性经营活动；
        <br />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.9不得发布任何侵犯他人著作权、商标权等知识产权或合法权利的内容；
        <br />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;用户应不时关注并遵守来过不时公布或修改的各类合法规则规定。
        <br />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;来过保留删除网站内各类不符合法律政策或不真实的信息内容而无须通知用户的权利。 若用户未遵守以上规定的，来过有权作出独立判断并采取暂停或关闭用户账号等措施。用户须对自己在网上的言论和行为承担法律责任。
        <br /><br />

        <h4 class="tc">第5条 产品信息</h4>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5.1来过的产品价格、优惠信息、合作商户信息等随时都有可能发生变动，来过不作特别通知。由于网站上产品信息的数量极其庞大，虽然来过会尽最大努力保证您所浏览产品信息的准确性，但由于众所周知的互联网技术因素等客观原因存在，来过网页显示的信息可能会有一定的滞后性或差错，对此情形请您知悉并理解。
        <br />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5.2在您下订单时，请您仔细确认所购产品的名称、价格、数量、电话、时间、地点等信息。下单者与用户本人不一致的，下单者的行为和意思表示视为用户的行为和意思表示，用户应对下单者的行为及意思表示的法律后果承担连带责任。
        <br />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5.3除法律另有强制性规定外，双方约定如下：来过展示的产品和价格等信息仅仅是要约邀请，您下单时须确定您希望购买的产品数量、价款及支付方式、联系方式、合同履行地点、合同履行方式等内容；系统生成的订单信息是计算机信息系统根据您填写的内容自动生成的数据，仅是您向来过发出的合同要约；来过收到您的订单信息后，只有在来过将您在订单中订购的产品从系统中实际直接向您发出确认信息时，方才视为您与来过之间就实际直接向您发出的产品建立了合同关系；如果您在一份订单里订购了多种产品并且来过只给您发出了部分订单确认时，您与来过之间仅就实际直接向您发出的产品建立了合同关系；只有在来过实际直接向您发出了订单中订购的其他产品确认信息时，您和来过之间就订单中订购的其他已实际直接向您发出的产品才成立合同关系。您可以随时登录您在来过注册的账户，查询您的订单状态。
        <br />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5.4由于市场变化及各种合理商业理由难以控制的因素影响，来过无法保证您提交的订单信息中希望购买的产品都会实现；如您拟购买的产品无法实现，您有权并应及时取消订单或是更改订单。
        <br /><br />

        <h4 class="tc">第6条 所有权及知识产权条款</h4>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6.1用户一旦接受本协议，即表明该用户主动将其在任何时间段在来过发表的任何形式的信息内容（包括但不限于客户评价、客户咨询、各类话题文章等信息内容）的财产性权利等任何可转让的权利，如著作权财产权（包括并不限于：复制权、发行权、出租权、展览权、表演权、放映权、广播权、信息网络传播权、摄制权、改编权、翻译权、汇编权以及应当由著作权人享有的其他可转让权利），全部独家且不可撤销地转让给来过所有，用户同意来过有权就任何主体侵权而单独提起诉讼。
        <br />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6.2本协议已经构成《中华人民共和国著作权法》第二十五条（条文序号依照2011年版著作权法确定）及相关法律规定的著作财产权等权利转让书面协议，其效力及于用户在来过网站上发布的任何受著作权法保护的作品内容，无论该等内容形成于本协议订立前还是本协议订立后。
        <br />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6.3用户同意并已充分了解本协议的条款，承诺不将已发表于来过的信息，以任何形式发布或授权其它主体以任何方式使用（包括但限于在各类网站、媒体上使用）。
        <br />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6.4来过是来过的制作者，拥有此网站内容及资源的著作权等合法权利，受国家法律保护，有权不时地对本协议及来过的内容进行修改，并在来过张贴，无须另行通知用户。在法律允许的最大限度范围内，来过对本协议及来过内容拥有解释权。
        <br />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6.5除法律另有强制性规定外，未经来过明确的特别书面许可,任何单位或个人不得以任何方式非法地全部或部分复制、转载、引用、链接、抓取或以其他方式使用来过的信息内容，否则，来过有权追究其法律责任。
        <br />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6.6来过所刊登的资料信息（诸如文字、图表、标识、按钮图标、图像、声音文件片段、数字下载、数据编辑和软件），均是来过或其内容提供者的财产，受中国和国际相关法律法规及公约的保护。来过上所有内容的汇编是来过的排他财产，受中国和国际相关法律法规及公约的保护。来过上所有软件都是来过或其关联公司或其软件供应商的财产，受中国和国际版相关法律法规及公约的保护。
        <br /><br />

        <h4 class="tc">第7条 责任限制及不承诺担保</h4>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7.1除非另有明确的书面说明，来过及其所包含的或以其它方式通过来过提供给您的全部信息、内容、材料、产品（包括软件）和服务，均是在"按现状"和"按现有"的基础上提供的。 除非另有明确的书面说明，来过不对来过的运营及其包含在本网站上的信息、内容、材料、产品（包括软件）或服务作任何形式的、明示或默示的声明或担保（根据中华人民共和国法律另有规定的以外）。
        <br />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7.2来过不担保来过所包含的或以其它方式通过来过提供给您的全部信息、内容、材料、产品（包括软件）、服务、其服务器或从来过发出的电子信件、信息没有病毒或其他有害成分。 如因不可抗力或其它来过无法控制的原因使来过系统崩溃或无法正常使用导致网上交易无法完成或丢失有关的信息、记录等，来过会合理地尽力协助处理善后事宜。
        <br />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7.3用户明确同意其使用来过网络服务所存在的风险将完全由其自己承担；因其使用来过网络服务而产生的一切后果也由其自己承担，来过对用户不承担任何责任。
        <br /><br />

        <h4 class="tc">第8条 协议更新及用户关注义务</h4>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;根据国家法律法规变化及网站运营需要，来过有权对本协议条款不时地进行修改，修改后的协议一旦被张贴在来过上即生效，并代替原来的协议。用户可随时登录查阅最新协议；用户有义务不时关注并阅读最新版的协议及网站公告。如用户不同意更新后的协议，应立即停止接受来过网站依据本协议提供的服务；如用户继续使用本网站提供的服务，即视为同意更新后的协议。来过建议您在使用本网站之前阅读本协议及来过的公告。 如果本协议中任何一条被视为废止、无效或因任何理由不可执行，该条应视为可分性的且并不影响任何其余条款的有效性和可执行性。
        <br /><br />

        <h4 class="tc">第9条 法律管辖和适用</h4>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;本协议的订立、执行和解释及争议的解决均应适用中华人民共和国相关法律法规。 如发生本协议与适用之法律相抵触时，则这些条款将完全按法律规定重新解释，而其它有效条款继续有效。 如缔约方就本协议内容或其执行发生任何争议，双方应尽力友好协商解决；协商不成时，任何一方均可向来过所在地法院提起诉讼。
        <br /><br />

        <h4 class="tc">第10条 其他</h4>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10.1来过网站（包含手机端APP）所有者是指在政府部门依法许可或备案的来过网站经营主体。<br />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10.2来过尊重用户和消费者的合法权利，本协议及本网站上发布的各类规则、声明等其他内容，均是为了更好的、更加便利的为用户和消费者提供服务。来过欢迎用户和社会各界提出意见和建议，来过将虚心接受并适时修改本协议及来过上的各类规则。
        <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10.3您点击"同意协议并注册"按钮即视为您完全接受本协议，在点击之前请您再次确认已知悉并完全理解本协议的全部内容。

    </div>


    <div class="reg-advise" id="reg-advise">
        <h3>A.对于注册“基本信息页”，您的总体满意程度如何？</h3>
        <input type="radio" name="proposal" />很不满意 &nbsp;
        <input type="radio" name="proposal" />不太满意 &nbsp;
        <input type="radio" name="proposal" />一般 &nbsp;
        <input type="radio" name="proposal" />比较满意 &nbsp;
        <input type="radio" name="proposal" />非常满意 &nbsp;
        <h3>B.您的改进意见是？</h3>
        <textarea class="myInput"></textarea>
        <br class="clear" />
        <h3>C.您的手机号码/邮箱:</h3>
        <p><input type="text" class="input-text" /><span>(请尽量填写，以便我们及时给您回复)</span></p>
        <br class="clear" />
        <a href="javascript:void(0);" class="lg-btn lg-btn-default">提 交</a>
       
    </div>



    <script>
    $(function(){

        var jsHome = '<?=base_url()?>static/js/';
        $LAB.script(jsHome+'lg.js?v=0.0.1')
            .script(jsHome+'vender/jquery.placeholder.js?v=2.0.8')
            .script(jsHome+'plugin/register.js?v=0.0.1')
            .script(jsHome+'lib/http.js?v=0.0.1')
            .script(jsHome+'vender/layer/layer.min.js?v=1.8.5')
            .wait(function(){
                
                $('input, textarea').placeholder();
                var r = new RegVerify('form1');
                $("#view-reg-rules").click(function(){
                    $.layer({type: 1,shade: [0],area: ['auto', 'auto'],title: false,border: [0],page: {dom : '#reg-rules'}});
                });
                $("#view-reg-advise").click(function(){
                    $.layer({type: 1,shade: [0],area: ['auto', 'auto'],title: false,border: [0],page: {dom : '#reg-advise'}
                    });
                });
            });

        
    });
    </script>





    <!--=====以下底部================================-->

<?php Widget::web_footer();?>
    <!--footer end-->
</body>
</html>