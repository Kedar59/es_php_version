<?php
include('MySQL.php');
$all_question = array('number-of-islands','course-schedule','redundant-connection','coin-change','longest-common-subsequence','subsets','fibonacci-number','min-cost-to-connect-all-points','network-delay-time','best-time-to-buy-and-sell-stock','longest-substring-without-repeating-characters','single-threaded-cpu');
function fetch($question)
{
    $url = "https://leetcode.com/graphql";
    $query = <<<GRAPHQL

    {
        question(titleSlug: "$question") {
        questionId
        title
        content
        difficulty
        topicTags{name slug }
        }
    }
    
    GRAPHQL;
    $curl = curl_init();
    curl_setopt($curl,CURLOPT_URL,$url);
    curl_setopt($curl,CURLOPT_POST,true);
    curl_setopt($curl,CURLOPT_POSTFIELDS,json_encode(["query"=>$query]));
    curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($curl,CURLOPT_HTTPHEADER,array('Content-Type:application/json'));
    $response = curl_exec($curl);

    if(!$response)
    {
        echo "Noob";
    }

    $data = json_decode($response,true);
    $question = $data['data']['question'];
    curl_close($curl);  
   
    return $question;
    
    

}
function insert_question($mysql,$question)
{
    $question = fetch($question);
    $category = $question['topicTags'][count($question['topicTags'])-1];
    $difficulty = $question['difficulty'];
    $title = $question['title'];
    $content = $question['content'];
    $category = explode('-',$category['slug'])[0];

    $mysql->query("insert into questions1(category,difficulty,description,title) values('$category','$difficulty','$content','$title')");
}
function insert_all($mysql,$all_question)
{
    foreach($all_question as $question)
    {
        insert_question($mysql,$question);
    }
}
insert_all($mysql,$all_question);
?>