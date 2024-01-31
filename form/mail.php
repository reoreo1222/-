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
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $to = 'reonon4627@gmail.com'; // 送信先メールアドレス
    $subject = 'Googleビジネスプロフィール 代行サービス 申し込みフォーム'; // メールの件名
    
    // メール本文の作成
    $message = "以下の内容でGoogleビジネスプロフィール代行サービスの申し込みがありました。\n\n";
    $message .= "\nメールアドレス: " . htmlspecialchars($_POST['メールアドレス']) . "\n";
    $message .= "ご紹介者名: " . htmlspecialchars($_POST['ご紹介者名']) . "\n";
    $message .= "申込会社名又は屋号: " . htmlspecialchars($_POST['申込会社名又は屋号']) . "\n";
    $message .= "会社所在地（郵便番号）: " . htmlspecialchars($_POST['会社所在地（郵便番号）']) . "\n";
    $message .= "会社所在地（住所、建物・号室）: " . htmlspecialchars($_POST['会社所在地（住所、建物・号室）']) . "\n";
    $message .= "会社電話番号: " . htmlspecialchars($_POST['会社電話番号']) . "\n";
    $message .= "役職肩書: " . htmlspecialchars($_POST['役職肩書']) . "\n";
    $message .= "代表者氏名: " . htmlspecialchars($_POST['代表者氏名']) . "\n";
    $message .= "請求書等送付先メールアドレス: " . htmlspecialchars($_POST['請求書等送付先メールアドレス']) . "\n";
    $message .= "お支払い方法: " . htmlspecialchars($_POST['お支払い方法']) . "\n";
    $message .= "その他お支払い方法: " . htmlspecialchars($_POST['その他お支払い方法']) . "\n";

    // 店舗1
    $message .= "\n\n=== 店舗1情報 ===\n";
    $message .= "店舗1屋号: " . htmlspecialchars($_POST['店舗1屋号']) . "\n";
    $message .= "店舗1所在地（郵便番号）: " . htmlspecialchars($_POST['店舗1所在地（郵便番号）']) . "\n";
    $message .= "店舗1所在地（住所、建物・号室）: " . htmlspecialchars($_POST['店舗1所在地（住所、建物・号室）']) . "\n";
    $message .= "店舗1電話番号: " . htmlspecialchars($_POST['店舗1電話番号']) . "\n";
    $message .= "店舗1ご担当者: " . htmlspecialchars($_POST['店舗1ご担当者']) . "\n";
    $message .= "店舗1お申込プラン: " . htmlspecialchars($_POST['店舗1お申込プラン']) . "\n";
    $message .= "店舗1その他お申込プラン: " . htmlspecialchars($_POST['店舗1その他お申込プラン']) . "\n";
    $message .= "店舗1サービス利用開始希望時期: " . htmlspecialchars($_POST['店舗1サービス利用開始希望時期']) . "\n";
    $message .= "店舗1MEO対策ワード: " . htmlspecialchars($_POST['店舗1MEO対策ワード']) . "\n";


    if (!empty($_POST['店舗2屋号']) || !empty($_POST['店舗2所在地（郵便番号）']) || !empty($_POST['店舗2所在地（住所、建物・号室）']) || !empty($_POST['店舗2電話番号']) || !empty($_POST['店舗2ご担当者']) || !empty($_POST['店舗2お申込プラン']) || !empty($_POST['店舗2その他お申込プラン']) || !empty($_POST['店舗2サービス利用開始希望時期']) || !empty($_POST['店舗2MEO対策ワード'])) {
      $message .= "\n\n=== 店舗2情報 ===\n";
      $message .= "店舗2屋号: " . htmlspecialchars($_POST['店舗2屋号']) . "\n";
      $message .= "店舗2所在地（郵便番号）: " . htmlspecialchars($_POST['店舗2所在地（郵便番号）']) . "\n";
      $message .= "店舗2所在地（住所、建物・号室）: " . htmlspecialchars($_POST['店舗2所在地（住所、建物・号室）']) . "\n";
      $message .= "店舗2電話番号: " . htmlspecialchars($_POST['店舗2電話番号']) . "\n";
      $message .= "店舗2ご担当者: " . htmlspecialchars($_POST['店舗2ご担当者']) . "\n";
      $message .= "店舗2お申込プラン: " . htmlspecialchars($_POST['店舗2お申込プラン']) . "\n";
      $message .= "店舗2その他お申込プラン: " . htmlspecialchars($_POST['店舗2その他お申込プラン']) . "\n";
      $message .= "店舗2サービス利用開始希望時期: " . htmlspecialchars($_POST['店舗2サービス利用開始希望時期']) . "\n";
      $message .= "店舗2MEO対策ワード: " . htmlspecialchars($_POST['店舗2MEO対策ワード']) . "\n";
  }
  
// 店舗3
if (!empty($_POST['店舗3屋号']) || !empty($_POST['店舗3所在地（郵便番号）']) || !empty($_POST['店舗3所在地（住所、建物・号室）']) || !empty($_POST['店舗3電話番号']) || !empty($_POST['店舗3ご担当者']) || !empty($_POST['店舗3お申込プラン']) || !empty($_POST['店舗3その他お申込プラン']) || !empty($_POST['店舗3サービス利用開始希望時期']) || !empty($_POST['店舗3MEO対策ワード'])) {
  $message .= "\n\n=== 店舗3情報 ===\n";
  $message .= "店舗3屋号: " . htmlspecialchars($_POST['店舗3屋号']) . "\n";
  $message .= "店舗3所在地（郵便番号）: " . htmlspecialchars($_POST['店舗3所在地（郵便番号）']) . "\n";
  $message .= "店舗3所在地（住所、建物・号室）: " . htmlspecialchars($_POST['店舗3所在地（住所、建物・号室）']) . "\n";
  $message .= "店舗3電話番号: " . htmlspecialchars($_POST['店舗3電話番号']) . "\n";
  $message .= "店舗3ご担当者: " . htmlspecialchars($_POST['店舗3ご担当者']) . "\n";
  $message .= "店舗3お申込プラン: " . htmlspecialchars($_POST['店舗3お申込プラン']) . "\n";
  $message .= "店舗3その他お申込プラン: " . htmlspecialchars($_POST['店舗3その他お申込プラン']) . "\n";
  $message .= "店舗3サービス利用開始希望時期: " . htmlspecialchars($_POST['店舗3サービス利用開始希望時期']) . "\n";
  $message .= "店舗3MEO対策ワード: " . htmlspecialchars($_POST['店舗3MEO対策ワード']) . "\n";
}

// 店舗4
if (!empty($_POST['店舗4屋号']) || !empty($_POST['店舗4所在地（郵便番号）']) || !empty($_POST['店舗4所在地（住所、建物・号室）']) || !empty($_POST['店舗4電話番号']) || !empty($_POST['店舗4ご担当者']) || !empty($_POST['店舗4お申込プラン']) || !empty($_POST['店舗4その他お申込プラン']) || !empty($_POST['店舗4サービス利用開始希望時期']) || !empty($_POST['店舗4MEO対策ワード'])) {
  $message .= "\n\n=== 店舗4情報 ===\n";
  $message .= "店舗4屋号: " . htmlspecialchars($_POST['店舗4屋号']) . "\n";
  $message .= "店舗4所在地（郵便番号）: " . htmlspecialchars($_POST['店舗4所在地（郵便番号）']) . "\n";
  $message .= "店舗4所在地（住所、建物・号室）: " . htmlspecialchars($_POST['店舗4所在地（住所、建物・号室）']) . "\n";
  $message .= "店舗4電話番号: " . htmlspecialchars($_POST['店舗4電話番号']) . "\n";
  $message .= "店舗4ご担当者: " . htmlspecialchars($_POST['店舗4ご担当者']) . "\n";
  $message .= "店舗4お申込プラン: " . htmlspecialchars($_POST['店舗4お申込プラン']) . "\n";
  $message .= "店舗4その他お申込プラン: " . htmlspecialchars($_POST['店舗4その他お申込プラン']) . "\n";
  $message .= "店舗4サービス利用開始希望時期: " . htmlspecialchars($_POST['店舗4サービス利用開始希望時期']) . "\n";
  $message .= "店舗4MEO対策ワード: " . htmlspecialchars($_POST['店舗4MEO対策ワード']) . "\n";
}

// 店舗5
if (!empty($_POST['店舗5屋号']) || !empty($_POST['店舗5所在地（郵便番号）']) || !empty($_POST['店舗5所在地（住所、建物・号室）']) || !empty($_POST['店舗5電話番号']) || !empty($_POST['店舗5ご担当者']) || !empty($_POST['店舗5お申込プラン']) || !empty($_POST['店舗5その他お申込プラン']) || !empty($_POST['店舗5サービス利用開始希望時期']) || !empty($_POST['店舗5MEO対策ワード'])) {
  $message .= "\n\n=== 店舗5情報 ===\n";
  $message .= "店舗5屋号: " . htmlspecialchars($_POST['店舗5屋号']) . "\n";
  $message .= "店舗5所在地（郵便番号）: " . htmlspecialchars($_POST['店舗5所在地（郵便番号）']) . "\n";
  $message .= "店舗5所在地（住所、建物・号室）: " . htmlspecialchars($_POST['店舗5所在地（住所、建物・号室）']) . "\n";
  $message .= "店舗5電話番号: " . htmlspecialchars($_POST['店舗5電話番号']) . "\n";
  $message .= "店舗5ご担当者: " . htmlspecialchars($_POST['店舗5ご担当者']) . "\n";
  $message .= "店舗5お申込プラン: " . htmlspecialchars($_POST['店舗5お申込プラン']) . "\n";
  $message .= "店舗5その他お申込プラン: " . htmlspecialchars($_POST['店舗5その他お申込プラン']) . "\n";
  $message .= "店舗5サービス利用開始希望時期: " . htmlspecialchars($_POST['店舗5サービス利用開始希望時期']) . "\n";
  $message .= "店舗5MEO対策ワード: " . htmlspecialchars($_POST['店舗5MEO対策ワード']) . "\n";
}

  

    // メールの送信
    $mailSent = mail($to, $subject, $message);

    // 送信結果の確認
    if ($mailSent) {
        header('Location: thank_you.html');
        exit();
    } else {
        // メール送信に失敗した場合のエラー処理
        $lastError = error_get_last();
        echo 'メールの送信に失敗しました。エラーメッセージ: ' . $lastError['message'];
    }
}
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
    <tr><th>店舗2屋号</th><td><?php echo htmlspecialchars($_POST['店舗2屋号']); ?></td></tr>
    <tr><th>店舗2所在地（郵便番号）</th><td><?php echo htmlspecialchars($_POST['店舗2所在地（郵便番号）']); ?></td></tr>
    <tr><th>店舗2所在地（住所、建物・号室）</th><td><?php echo htmlspecialchars($_POST['店舗2所在地（住所、建物・号室）']); ?></td></tr>
    <tr><th>店舗2電話番号</th><td><?php echo htmlspecialchars($_POST['店舗2電話番号']); ?></td></tr>
    <tr><th>店舗2ご担当者</th><td><?php echo htmlspecialchars($_POST['店舗2ご担当者']); ?></td></tr>
    <tr><th>店舗2お申込プラン</th><td><?php echo htmlspecialchars($_POST['店舗2お申込プラン']); ?></td></tr>
    <tr><th>店舗2その他お申込プラン</th><td><?php echo htmlspecialchars($_POST['店舗2その他お申込プラン']); ?></td></tr>
    <tr><th>店舗2サービス利用開始希望時期</th><td><?php echo htmlspecialchars($_POST['店舗2サービス利用開始希望時期']); ?></td></tr>
    <tr><th>店舗2MEO対策ワード</th><td><?php echo htmlspecialchars($_POST['店舗2MEO対策ワード']); ?></td></tr>
    <tr><th>店舗3屋号</th><td><?php echo htmlspecialchars($_POST['店舗3屋号']); ?></td></tr>
    <tr><th>店舗3所在地（郵便番号）</th><td><?php echo htmlspecialchars($_POST['店舗3所在地（郵便番号）']); ?></td></tr>
    <tr><th>店舗3所在地（住所、建物・号室）</th><td><?php echo htmlspecialchars($_POST['店舗3所在地（住所、建物・号室）']); ?></td></tr>
    <tr><th>店舗3電話番号</th><td><?php echo htmlspecialchars($_POST['店舗3電話番号']); ?></td></tr>
    <tr><th>店舗3ご担当者</th><td><?php echo htmlspecialchars($_POST['店舗3ご担当者']); ?></td></tr>
    <tr><th>店舗3お申込プラン</th><td><?php echo htmlspecialchars($_POST['店舗3お申込プラン']); ?></td></tr>
    <tr><th>店舗3その他お申込プラン</th><td><?php echo htmlspecialchars($_POST['店舗3その他お申込プラン']); ?></td></tr>
    <tr><th>店舗3サービス利用開始希望時期</th><td><?php echo htmlspecialchars($_POST['店舗3サービス利用開始希望時期']); ?></td></tr>
    <tr><th>店舗3MEO対策ワード</th><td><?php echo htmlspecialchars($_POST['店舗3MEO対策ワード']); ?></td></tr>
    <tr><th>店舗4屋号</th><td><?php echo htmlspecialchars($_POST['店舗4屋号']); ?></td></tr>
    <tr><th>店舗4所在地（郵便番号）</th><td><?php echo htmlspecialchars($_POST['店舗4所在地（郵便番号）']); ?></td></tr>
    <tr><th>店舗4所在地（住所、建物・号室）</th><td><?php echo htmlspecialchars($_POST['店舗4所在地（住所、建物・号室）']); ?></td></tr>
    <tr><th>店舗4電話番号</th><td><?php echo htmlspecialchars($_POST['店舗4電話番号']); ?></td></tr>
    <tr><th>店舗4ご担当者</th><td><?php echo htmlspecialchars($_POST['店舗4ご担当者']); ?></td></tr>
    <tr><th>店舗4お申込プラン</th><td><?php echo htmlspecialchars($_POST['店舗4お申込プラン']); ?></td></tr>
    <tr><th>店舗4その他お申込プラン</th><td><?php echo htmlspecialchars($_POST['店舗4その他お申込プラン']); ?></td></tr>
    <tr><th>店舗4サービス利用開始希望時期</th><td><?php echo htmlspecialchars($_POST['店舗4サービス利用開始希望時期']); ?></td></tr>
    <tr><th>店舗4MEO対策ワード</th><td><?php echo htmlspecialchars($_POST['店舗4MEO対策ワード']); ?></td></tr>
    <tr><th>店舗5屋号</th><td><?php echo htmlspecialchars($_POST['店舗5屋号']); ?></td></tr>
    <tr><th>店舗5所在地（郵便番号）</th><td><?php echo htmlspecialchars($_POST['店舗5所在地（郵便番号）']); ?></td></tr>
    <tr><th>店舗5所在地（住所、建物・号室）</th><td><?php echo htmlspecialchars($_POST['店舗5所在地（住所、建物・号室）']); ?></td></tr>
    <tr><th>店舗5電話番号</th><td><?php echo htmlspecialchars($_POST['店舗5電話番号']); ?></td></tr>
    <tr><th>店舗5ご担当者</th><td><?php echo htmlspecialchars($_POST['店舗5ご担当者']); ?></td></tr>
    <tr><th>店舗5お申込プラン</th><td><?php echo htmlspecialchars($_POST['店舗5お申込プラン']); ?></td></tr>
    <tr><th>店舗5その他お申込プラン</th><td><?php echo htmlspecialchars($_POST['店舗5その他お申込プラン']); ?></td></tr>
    <tr><th>店舗5サービス利用開始希望時期</th><td><?php echo htmlspecialchars($_POST['店舗5サービス利用開始希望時期']); ?></td></tr>
    <tr><th>店舗5MEO対策ワード</th><td><?php echo htmlspecialchars($_POST['店舗5MEO対策ワード']); ?></td></tr>
    
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