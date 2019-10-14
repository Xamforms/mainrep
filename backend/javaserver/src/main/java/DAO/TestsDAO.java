package DAO;

import DataSets.GroupsDataSet;
import DataSets.TestsDataSet;
import org.hibernate.HibernateException;
import org.hibernate.Session;
import org.hibernate.query.Query;

import javax.persistence.NoResultException;
import javax.persistence.criteria.CriteriaBuilder;
import javax.persistence.criteria.CriteriaQuery;
import javax.persistence.criteria.Root;
import java.util.List;

public class TestsDAO {

    private Session session;

    public TestsDAO(Session session) {
        this.session = session;
    }

    public TestsDataSet get(long id) throws HibernateException {
        return (TestsDataSet) session.get(TestsDataSet.class, id);
    }

    public List<TestsDataSet> getTestByTeacher(int teacher_id) throws HibernateException {
        CriteriaBuilder cb = session.getCriteriaBuilder();
        CriteriaQuery<TestsDataSet> cq = cb.createQuery(TestsDataSet.class);
        Root<TestsDataSet> root = cq.from(TestsDataSet.class);
        cq.select(root);
        cq.where(cb.equal(root.get("teacher_id"), teacher_id));
        List<TestsDataSet> tests;
        Query<TestsDataSet> query = session.createQuery(cq);
        try{
            tests = query.getResultList();
        }catch (NoResultException ex){
            System.out.println("Тестов от этого учителя не найдено");
            return null;
        }
        return tests;
    }

    public List<TestsDataSet> getTestByName(String name) throws HibernateException {
        CriteriaBuilder cb = session.getCriteriaBuilder();
        CriteriaQuery<TestsDataSet> cq = cb.createQuery(TestsDataSet.class);
        Root<TestsDataSet> root = cq.from(TestsDataSet.class);
        cq.select(root);
        cq.where(cb.equal(root.get("name"), name));
        List<TestsDataSet> tests;
        Query<TestsDataSet> query = session.createQuery(cq);
        try{
            tests = query.getResultList();
        }catch (NoResultException ex){
            System.out.println("Тестов с таким названием не найдено");
            return null;
        }
        return tests;
    }

    public long insertTest(String name, String creation_time, boolean test_type) throws HibernateException {
        return (Long) session.save(new TestsDataSet(name, creation_time, test_type));
    }
}
