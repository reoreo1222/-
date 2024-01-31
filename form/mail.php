<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>確認画面</title>
  <link rel="stylesheet" href="assets/reset.css">
  <link rel="stylesheet" href="assets/mail.css">
  <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
  <script type="text/javascript" charset="UTF-8" src="https://yubinbango.github.io/yubinbango-data/data/581.js"></script>
</head>
<body class="body">
<?php
// フォームが送信されたかどうかを確認

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {

  $to = 'reonon4627@gmail.com'; // 送信先メールアドレス
  $subject = 'Googleビジネスプロフィール 代行サービス 申し込みフォーム'; // メールの件名
  
 
   // メール本文の作成
   $message = "以下の内容でGoogleビジネスプロフィール代行サービスの申し込みがありました。\n\n";

      $message .= "\nメールアドレス: $email\n";
$message .= "ご紹介者名: $referrer\n";
$message .= "申込会社名又は屋号: $companyName\n";
$message .= "会社所在地（郵便番号）: $companyZip\n";
$message .= "会社所在地（住所、建物・号室）: $companyAddress\n";
$message .= "会社電話番号: $companyPhone\n";
$message .= "役職肩書: $position\n";
$message .= "代表者氏名: $representativeName\n";
$message .= "請求書等送付先メールアドレス: $billingEmail\n";
$message .= "お支払い方法: $paymentMethod\n";
$message .= "その他お支払い方法: $otherPaymentMethod\n";
$message .= "店舗1屋号: $store1Name\n";
$message .= "店舗1所在地（郵便番号）: $store1Zip\n";
$message .= "店舗1所在地（住所、建物・号室）: $store1Address\n";
$message .= "店舗1電話番号: $store1Phone\n";
$message .= "店舗1ご担当者: $store1Contact\n";
$message .= "店舗1お申込プラン: $store1Plan\n";
$message .= "店舗1その他お申込プラン: $store1OtherPlan\n";
$message .= "店舗1サービス利用開始希望時期: $store1StartDate\n";
$message .= "店舗1MEO対策ワード: $store1MEO\n";
echo htmlspecialchars($_POST['メールアドレス']);


$email = isset($_POST['メールアドレス']) ? $_POST['メールアドレス'] : '';
$referrer = isset($_POST['ご紹介者名']) ? $_POST['ご紹介者名'] : '';
$companyName = isset($_POST['申込会社名又は屋号']) ? $_POST['申込会社名又は屋号'] : '';
// 他のフォームフィールドも同様に取得

// 各変数がデータを持っているか確認
if (empty($email) || empty($referrer) || empty($companyName)) {
    echo '必要なデータが不足しています。';
    exit();
}
      
      $mailSent = mail($to, $subject, $message,$_POST);

      foreach ($_POST as $key => $value) {
        // 'submit' フィールドと 'mail_set' フィールドはスキップ
        if ($key != 'mail_set') {
        // キー内のアンダースコアをスペースに置換して可読性向上
        $key = str_replace('_', ' ', $key);
        $message .= "$key: $value\n";
    }
    }

      if ($mailSent) {
        header('Location: thank_you.html');
        exit();
    } else {
        // メール送信に失敗した場合のエラー処理などを追加することができます
        echo 'メールの送信に失敗しました。';
    }
  
    // 他のフォームフィールドがあれば追加

    }

    // これで、これらの値をHTMLに必要な場所に挿入できます
  ?>

<!-- ▲ Headerやその他コンテンツなど　※自由に編集可 ▲-->

<!-- ▼************ 送信内容表示部　※編集は自己責任で ************ ▼-->
<div id="formWrap">
<h3 class="confirm-title">確認画面</h3>
<p class="confirm-text">以下の内容で間違いがなければ、「送信する」ボタンを押してください。</p>
<form action="" method="POST">
<table class="form-table">
<tbody>
    <tr><th>メールアドレス</th><td><?php echo htmlspecialchars($_POST['メールアドレス']); ?></td></tr>
    <tr><th>ご紹介者名</th><td><?php echo htmlspecialchars($_POST['ご紹介者名']); ?></td></tr>
    <tr><th>申込会社名又は屋号</th><td><?php echo htmlspecialchars($_POST['申込会社名又は屋号']); ?></td></tr>
    <tr><th>会社所在地（郵便番号）</th><td><?php echo htmlspecialchars($_POST['会社所在地（郵便番号）']); ?></td></tr>
    <tr><th>会社所在地（住所、建物・号室）</th><td><?php echo htmlspecialchars($_POST['会社所在地（住所、建物・号室）']); ?></td></tr>
    <tr><th>会社電話番号</th><td><?php echo htmlspecialchars($_POST['会社電話番号']); ?></td></tr>
    <tr><th>役職肩書</th><td><?php echo htmlspecialchars($_POST['役職肩書']); ?></td></tr>
    <tr><th>代表者氏名</th><td><?php echo htmlspecialchars($_POST['代表者氏名']); ?></td></tr>
    <tr><th>請求書等送付先メールアドレス</th><td><?php echo htmlspecialchars($_POST['請求書等送付先メールアドレス']); ?></td></tr>
    <tr><th>お支払い方法</th><td><?php echo htmlspecialchars($_POST['お支払い方法']); ?></td></tr>
    <tr><th>その他お支払い方法</th><td><?php echo htmlspecialchars($_POST['その他お支払い方法']); ?></td></tr>
    <tr><th>店舗1屋号</th><td><?php echo htmlspecialchars($_POST['店舗1屋号']); ?></td></tr>
    <tr><th>店舗1所在地（郵便番号）</th><td><?php echo htmlspecialchars($_POST['店舗1所在地（郵便番号）']); ?></td></tr>
    <tr><th>店舗1所在地（住所、建物・号室）</th><td><?php echo htmlspecialchars($_POST['店舗1所在地（住所、建物・号室）']); ?></td></tr>
    <tr><th>店舗1電話番号</th><td><?php echo htmlspecialchars($_POST['店舗1電話番号']); ?></td></tr>
    <tr><th>店舗1ご担当者</th><td><?php echo htmlspecialchars($_POST['店舗1ご担当者']); ?></td></tr>
    <tr><th>店舗1お申込プラン</th><td><?php echo htmlspecialchars($_POST['店舗1お申込プラン']); ?></td></tr>
    <tr><th>店舗1その他お申込プラン</th><td><?php echo htmlspecialchars($_POST['店舗1その他お申込プラン']); ?></td></tr>
    <tr><th>店舗1サービス利用開始希望時期</th><td><?php echo htmlspecialchars($_POST['店舗1サービス利用開始希望時期']); ?></td></tr>
    <tr><th>店舗1MEO対策ワード</th><td><?php echo htmlspecialchars($_POST['店舗1MEO対策ワード']); ?></td></tr>
    
<!-- 他のフォームフィールドがあれば追加 -->
</tbody></table>

                <!-- 他のフォームフィールドがあれば追加 -->
                </tbody></table>
	<div class="contract">
<h4>約款、確認、免責事項</h4>
<ol class="contract-inner">
    <li>当サービスの実施を適用するGoogleビジネスプロフィールの１アカウント毎に、１契約とします。</li>
    <li>当サービスは検索上位表示及び、集客等お客様の期待する効果を保証するものではありません。</li>
    <li>当サービスはGoogleのガイドポリシー及び当社理念に反すると当社が判断した場合サービスの適用範囲を制限できるものとします。</li>
    <li>業務対応は、土日祝、弊社指定の休業日及び営業時間外にご連絡を頂いた場合、翌営業日以降の対応となります。</li>
    <li>当サービスは、Googleの仕様変更により、サービスの内容の一部を変更する場合がございます。また、事情及び理由の説明なく当社の都合によりサービスの提供を一時停止、中止、解約する場合がございます。</li>
    <li>当サービスは、サービスの一部を当社の業務提携先に委託する場合があります。</li>
    <li>お支払い期日を過ぎ、遅延した場合、年利14.6%の割合による遅延損害金が発生します。また、お支払いが停止した場合や、契約不履行に該当すると当社が判断した場合、当社の都合により即時にサービスを停止することがございます。</li>
    <li>対策開始日を契約開始日とし、最短契約期間以降は自動更新となります。</li>
    <li>解約通知日の翌月末をもって解約といたします。(文書またはメールや公式LINEなど、当社側に記録として残る形での通知に限る）ただし当社の都合による解約の場合を除き、ご契約中のプランごとに定めている最短契約期間を満たしている事を条件とします。万が一、最短契約期間を満たしていない場合は、残りの契約期間に相当する金額を前払いいただくことで解約となります。ただし、お支払い期日を過ぎた債務を残している場合は、解約が成立しない場合があります。</li>
    <li>ご契約の有効期間中、当社スタッフがページ内の編集を実施するために必要な環境を維持することを保証及び協力致します。</li>
    <li>Googleの仕様変更及び対策上の操作により、作成したコンテンツが削除・変更された場合、当社は一切の責任を負わないものとします。また、当社は善良なる管理者の注意をもって対策を実施しますが、掲載情報の内容相違などを含む情報発信において、万が一貴社が不利益を被る場合があったとしても、当社は一切の責任を負わないものとします。</li>
    <li>ご契約の有効期間中、当社への確認なく当サービスと同一または類似する他社のサービスの導入及び編集権限を他社に与えることをご遠慮いただきます。万が一、当社が作成したコンテンツを当社以外の者が削除・編集し、再度そのコンテンツを復元および作成する場合、別途費用が発生する旨を承諾します。また、Googleの仕様により完全なる復元・作成が出来ないことを承諾し、または当社から復元・作成をお断りする場合があることを承諾いたします。</li>
    <li>ご契約の有効期間中、当社以外の者の操作が起因し、ページが削除または正常に機能しない場合であっても、当社のサービス料が発生する旨を承諾します。</li>
		<li>ご解約時、ご契約期間中に作成されたコンテンツや情報は原則削除となります。</li>
    <li>ご解約時以降、作成されたコンテンツや情報を引継ぎでの運用をご希望の場合は、240,000 円（お支払い1回限り）での買取りにてご提供となります。※税別</li>
	<li>当社の実績紹介を目的として、作成したコンテンツ情報やアクセス実績等が公開される場合があることを承諾いたします。</li>
	<li>法律違反及び公序良俗に反する経営・運営をしていないこと、ならびに貴社の関係者において反社会的勢力との一切の関係が無いことを証明・誓約いたします。</li>
	<li>当サービスの申し込みにおいて、当サービスの契約、支払い、ならびに利用に関する全ての事項のあらゆる権限・責任を有していることを保証します。</li>
  </ol>
			<p>上記内容に承諾しました。</p>
	</div>

<p class="confirm-btn"><input type="hidden" name="submit" value="confirm_submit">
<input type="submit" value="　送信する　" name="submit">
<input type="button" value="前画面に戻る" onclick="history.back()"></p>
</form>
<!-- ▲ *********** 送信内容確認部　※編集は自己責任で ************ ▲-->

<!-- ▼ Footerその他コンテンツなど　※編集可 ▼-->
<footer class="footer"></footer>

</body>

</html>