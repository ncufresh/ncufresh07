<center>
  <table border="2" bordercolor="#f5f5f5">
    <tr><th bgcolor="#00cc99" colspan="6">營服統計表</th></tr>
    <tr><td>類別</td><td>總人數</td><td>S總人數</td><td>M總人數</td><td>L總人數</td><td>XL總人數</td></tr>
<{section name="total" loop=$total}>
    <tr><td><{$total[total].type}></td><td><{$total[total].amount}></td><td><{$total[total].s_amount}></td><td><{$total[total].m_amount}></td><td><{$total[total].l_amount}></td><td><{$total[total].xl_amount}></td></tr>
<{/section}>
  </table>
</center>