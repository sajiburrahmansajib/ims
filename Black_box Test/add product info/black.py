from selenium import webdriver
from webdriver_manager.chrome import ChromeDriverManager
from selenium.webdriver.common.keys import Keys
import time

driver = webdriver.Chrome(ChromeDriverManager().install())
driver.get("http://localhost/munna/home.php")

addproductinfo=driver.find_element_by_xpath('/html/body/div/div[1]/div[2]/a/button')
addproductinfo.click()
time.sleep(2)

inputname = driver.find_element_by_xpath('/html/body/div[2]/form/div[1]/div[1]/input')
inputname.send_keys('mobile')
time.sleep(2)

inputstockquantity = driver.find_element_by_xpath('/html/body/div[2]/form/div[1]/div[3]/input')
inputstockquantity.send_keys('10000')
time.sleep(2)

inputstockstatus = driver.find_element_by_xpath('/html/body/div[2]/form/div[1]/div[4]/input')
inputstockstatus.send_keys('stock')
time.sleep(2)

inputpurchaseprice= driver.find_element_by_xpath('/html/body/div[2]/form/div[1]/div[5]/input')
inputpurchaseprice.send_keys('10')
time.sleep(2)

inputsellingprice= driver.find_element_by_xpath('/html/body/div[2]/form/div[1]/div[6]/input')
inputsellingprice.send_keys('1000')
time.sleep(2)


btnSubmit = driver.find_element_by_xpath('/html/body/div[2]/form/div[2]/button')


btnSubmit.click()
time.sleep(3)