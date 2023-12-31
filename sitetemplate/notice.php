<?php include 'sub_header.php' ?>
<h2 class="sub_title">공지사항</h2>
<section class="board_section notice_section">
  <p class="site_guide">
    반응형 시멘틱 테이블을 이용한 게시판 리스트를 설계하였습니다.<br>
    읽기 , 쓰기 페이지는 구현되지 않았습니다.
    <button><i class="fa-solid fa-circle-xmark"></i></button>
  </p>
  <p class="sub_desc">
    <em class="emphasis">고객님의 소중한 의견을 주셔서 감사합니다.</em>
    언제나 고객님의 눈높이에 맞추어 최상의 서비스가 되기 위해 노력하겠습니다.
  </p>
  <table class="board">
    <thead>
      <tr>
        <th scope="row">번호</th>
        <th scope="row">제목</th>
        <th scope="row">작성자</th>
        <th scope="row">작성일자</th>
        <th scope="row">조회수</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>6</td>
        <td><a href="#">공지사항 게시판 테스트 6번 글</a></td>
        <td>관리자</td>
        <td>2023-03-23</td>
        <td>111</td>
      </tr>
      <tr>
        <td>5</td>
        <td><a href="#">공지사항 게시판 테스트 5번 글</a></td>
        <td>관리자</td>
        <td>2023-03-23</td>
        <td>111</td>
      </tr>
      <tr>
        <td>4</td>
        <td><a href="#">공지사항 게시판 테스트 4번 글</a></td>
        <td>관리자</td>
        <td>2023-03-23</td>
        <td>111</td>
      </tr>
      <tr>
        <td>3</td>
        <td><a href="#">공지사항 게시판 테스트 3번 글</a></td>
        <td>관리자</td>
        <td>2023-03-23</td>
        <td>111</td>
      </tr>
      <tr>
        <td>2</td>
        <td><a href="#">공지사항 게시판 테스트 2번 글</a></td>
        <td>관리자</td>
        <td>2023-03-23</td>
        <td>111</td>
      </tr>
      <tr>
        <td>1</td>
        <td><a href="#">공지사항 게시판 테스트 1번 글</a></td>
        <td>관리자</td>
        <td>2023-03-23</td>
        <td>111</td>
      </tr>
    </tbody>
  </table>

  <nav class="board_paging">
    <a class="active" href="#">1</a>
    <a href="#">2</a>
    <a href="#">3</a>
  </nav>

  <form class="board_search">
    <fieldset>
      <select>
        <option label="내용" title="내용으로 검색을 원하실경우 선택하세요">내용</option>
        <option label="제목" title="제목으로 검색을 원하실경우 선택하세요">제목</option>
        <option label="작성자" title="작성자로 검색을 원하실경우 선택하세요">작성자</option>
      </select>
      <label for="search_input" class="hidden">검색어를 입력하세요</label>
      <input id="search_input" type="text">
      <button>검색</button>
    </fieldset>
  </form>

</section>
<?php include 'sub_footer.php' ?>